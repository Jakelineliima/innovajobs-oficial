<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Especiais Controller
 *
 * @property \App\Model\Table\EspeciaisTable $Especiais
 * @method \App\Model\Entity\Especiai[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EspeciaisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $especiais = $this->paginate($this->Especiais);

        $this->set(compact('especiais'));
    }

    /**
     * View method
     *
     * @param string|null $id Especiai id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $especiai = $this->Especiais->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('especiai'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $especiai = $this->Especiais->newEmptyEntity();
        if ($this->request->is('post')) {
            $especiai = $this->Especiais->patchEntity($especiai, $this->request->getData());
            if ($this->Especiais->save($especiai)) {
                $this->Flash->success(__('The especiai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The especiai could not be saved. Please, try again.'));
        }
        $this->set(compact('especiai'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Especiai id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $especiai = $this->Especiais->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $especiai = $this->Especiais->patchEntity($especiai, $this->request->getData());
            if ($this->Especiais->save($especiai)) {
                $this->Flash->success(__('The especiai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The especiai could not be saved. Please, try again.'));
        }
        $this->set(compact('especiai'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Especiai id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Authorization->skipAuthorization();
        $this->request->allowMethod(['post', 'delete']);
        $especiai = $this->Especiais->get($id);
        if ($this->Especiais->delete($especiai)) {
            $this->Flash->success(__('The especiai has been deleted.'));
        } else {
            $this->Flash->error(__('The especiai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
