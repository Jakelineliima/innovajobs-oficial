<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\User;
use Cake\Event\EventInterface;
use Cake\Http\Exception\NotFoundException;
use Cake\ORM\Query;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Session;
use Cake\ORM\TableRegistry;

/**
 * Vagas Controller
 *
 * @property \App\Model\Table\VagasTable $Vagas
 * @method \App\Model\Entity\Vaga[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VagasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function vagaexibir()
    {
        $this->Authorization->skipAuthorization();
        $this->viewBuilder()->setLayout('default');
        $this->paginate = [
            'contain' => ['Gêneros', 'Especiais', 'Escolaridades'],
        ];
        $vagas = $this->paginate($this->Vagas);
        $this->set(compact('vagas'));
    }

    public function vagaexibirlog()
    {
        $this->Authorization->skipAuthorization();
        $this->viewBuilder()->setLayout('menu');
        $this->paginate = [
            'contain' => ['Gêneros', 'Especiais', 'Escolaridades'],
        ];
        $vagas = $this->paginate($this->Vagas);
        $this->set(compact('vagas'));
    }
    /**
     * View method
     *
     * @param string|null $id Vaga id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('menu');
        $vaga = $this->Vagas->newEmptyEntity();
        $this->Authorization->authorize($vaga);
        $vaga = $this->Vagas->get($id, [
            'contain' => ['Gêneros', 'Especiais', 'Escolaridades', 'Users'],
        ]);
        $this->set(compact('vaga'));
    }

    public function vermais($id = null)
    {
        $vaga = $this->Vagas->newEmptyEntity();
        $this->Authorization->skipAuthorization();
        $vaga = $this->Vagas->get($id, [
            'contain' => ['Gêneros', 'Especiais', 'Escolaridades'],
        ]);

        $this->set(compact('vaga'));
    }

    public function vermaislog($id = null)
    {
        $vaga = $this->Vagas->newEmptyEntity();
        $this->viewBuilder()->setLayout('menu');
        $this->Authorization->skipAuthorization();
        $vaga = $this->Vagas->get($id, [
            'contain' => ['Gêneros', 'Especiais', 'Escolaridades'],
        ]);

        $this->set(compact('vaga'));
    }

    public function index()
    {
        $vaga = $this->Vagas->newEmptyEntity();
        $this->Authorization->authorize($vaga);
        $this->viewBuilder()->setLayout('menu');
        $this->paginate = [
            'contain' => ['Gêneros', 'Especiais', 'Escolaridades'],
        ];
        $vagas = $this->paginate($this->Vagas->find()
        ->where(['user_id ' => $vaga->user_id = $this->request->getAttribute('identity')->getIdentifier()
        ]));
        $this->set(compact('vagas'));
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('menu');
        $vaga = $this->Vagas->newEmptyEntity();
        $this->Authorization->authorize($vaga);
        if ($this->request->is('post')) {
            $vaga = $this->Vagas->patchEntity($vaga, $this->request->getData());
            // Changed: Set the user_id from the current user.
            $vaga->user_id = $this->request->getAttribute('identity')->getIdentifier();
            if ($this->Vagas->save($vaga)) {
                $this->Flash->success(__('Sua vaga foi salva com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel salvar tente novamente.'));
        }

        $gêneros = $this->Vagas->Gêneros->find('list', ['limit' => 200]);
        $especiais = $this->Vagas->Especiais->find('list', ['limit' => 200]);
        $escolaridades = $this->Vagas->Escolaridades->find('list', ['limit' => 200]);
        $users = $this->Vagas->Users->find('list', ['limit' => 200]);
        $this->set(compact('vaga', 'gêneros', 'especiais', 'escolaridades', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vaga id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('menu');
        $vaga = $this->Vagas->newEmptyEntity();
        $this->Authorization->authorize($vaga);
        $vaga = $this->Vagas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vaga = $this->Vagas->patchEntity($vaga, $this->request->getData());
            if ($this->Vagas->save($vaga)) {
                $this->Flash->success(('Dados salvos com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(('Não foi possivel salvar.'));
        }
        $gêneros = $this->Vagas->Gêneros->find('list', ['limit' => 200]);
        $especiais = $this->Vagas->Especiais->find('list', ['limit' => 200]);
        $escolaridades = $this->Vagas->Escolaridades->find('list', ['limit' => 200]);
        $users = $this->Vagas->Users->find('list', ['limit' => 200]);
        $this->set(compact('vaga', 'gêneros', 'especiais', 'escolaridades', 'users'));
    }
    /**
     * Delete method
     *
     * @param string|null $id Vaga id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {

        $vaga = $this->Vagas->newEmptyEntity();
        $this->Authorization->authorize($vaga);
        $this->request->allowMethod(['post', 'delete']);
        $vaga = $this->Vagas->get($id);
        if ($this->Vagas->delete($vaga)) {
            $this->Flash->success(__('Vaga deletada com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel excluir!'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {
        $action = $this->request->params['action'];

        // As ações add e index são permitidas sempre.
        if (in_array($action, ['add', 'tags'])) {
            return true;
        }
        // Checa se o bookmark pertence ao user atual.
        $id = $this->request->getParam('pass.0');
        $vaga = $this->Vagas->get($id);
        if ($vaga->user_id == $user['id']) {
            return true;
        }
        return parent::isAuthorized($user);
    }
}
