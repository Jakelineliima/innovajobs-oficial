<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Gêneros Controller
 *
 * @property \App\Model\Table\GênerosTable $Gêneros
 * @method \App\Model\Entity\Gênero[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GênerosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $gêneros = $this->paginate($this->Gêneros);

        $this->set(compact('gêneros'));
    }

    /**
     * View method
     *
     * @param string|null $id Gênero id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $gênero = $this->Gêneros->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('gênero'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $gênero = $this->Gêneros->newEmptyEntity();
        if ($this->request->is('post')) {
            $gênero = $this->Gêneros->patchEntity($gênero, $this->request->getData());
            if ($this->Gêneros->save($gênero)) {
                $this->Flash->success(__('The gênero has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gênero could not be saved. Please, try again.'));
        }
        $this->set(compact('gênero'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gênero id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $gênero = $this->Gêneros->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gênero = $this->Gêneros->patchEntity($gênero, $this->request->getData());
            if ($this->Gêneros->save($gênero)) {
                $this->Flash->success(__('The gênero has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gênero could not be saved. Please, try again.'));
        }
        $this->set(compact('gênero'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gênero id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Authorization->skipAuthorization();
        $this->request->allowMethod(['post', 'delete']);
        $gênero = $this->Gêneros->get($id);
        if ($this->Gêneros->delete($gênero)) {
            $this->Flash->success(__('The gênero has been deleted.'));
        } else {
            $this->Flash->error(__('The gênero could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
