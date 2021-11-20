<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Escolaridades Controller
 *
 * @property \App\Model\Table\EscolaridadesTable $Escolaridades
 * @method \App\Model\Entity\Escolaridade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EscolaridadesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $escolaridades = $this->paginate($this->Escolaridades);

        $this->set(compact('escolaridades'));
    }

    /**
     * View method
     *
     * @param string|null $id Escolaridade id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $escolaridade = $this->Escolaridades->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('escolaridade'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $escolaridade = $this->Escolaridades->newEmptyEntity();
        if ($this->request->is('post')) {
            $escolaridade = $this->Escolaridades->patchEntity($escolaridade, $this->request->getData());
            if ($this->Escolaridades->save($escolaridade)) {
                $this->Flash->success(__('The escolaridade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The escolaridade could not be saved. Please, try again.'));
        }
        $this->set(compact('escolaridade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Escolaridade id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $escolaridade = $this->Escolaridades->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $escolaridade = $this->Escolaridades->patchEntity($escolaridade, $this->request->getData());
            if ($this->Escolaridades->save($escolaridade)) {
                $this->Flash->success(__('The escolaridade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The escolaridade could not be saved. Please, try again.'));
        }
        $this->set(compact('escolaridade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Escolaridade id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Authorization->skipAuthorization();
        $this->request->allowMethod(['post', 'delete']);
        $escolaridade = $this->Escolaridades->get($id);
        if ($this->Escolaridades->delete($escolaridade)) {
            $this->Flash->success(__('The escolaridade has been deleted.'));
        } else {
            $this->Flash->error(__('The escolaridade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
