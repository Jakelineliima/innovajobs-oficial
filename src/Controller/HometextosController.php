<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Hometextos Controller
 *
 * @property \App\Model\Table\HometextosTable $Hometextos
 * @method \App\Model\Entity\Hometexto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HometextosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $this->viewBuilder()->setLayout('admin');
        $hometextos = $this->paginate($this->Hometextos);

        $this->set(compact('hometextos'));
    }
    public function inicial()
    {
        $this->Authorization->skipAuthorization();
        $this->paginate = [
            'contain' => [],
        ];
        $hometextos = $this->paginate($this->Hometextos);
        $this->set(compact('hometextos'));
    }
    public function home()
    {
        $this->Authorization->skipAuthorization();
        $this->viewBuilder()->setLayout('menu');
        $this->paginate = [
            'contain' => [],
        ];
        $hometextos = $this->paginate($this->Hometextos);
        $this->set(compact('hometextos'));
    }
    /**
     * View method
     *
     * @param string|null $id Hometexto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $hometexto = $this->Hometextos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('hometexto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $this->viewBuilder()->setLayout('admin');
        $hometexto = $this->Hometextos->newEmptyEntity();
        if ($this->request->is('post')) {
            $hometexto = $this->Hometextos->patchEntity($hometexto, $this->request->getData());
            if (!$hometexto->getErrors) {
                $image = $this->request->getData('image_file');
                $name = $image->getClientFilename();
                $targetPath = \WWW_ROOT . 'img' . DS . $name;
                if ($name)
                    $image->moveTo($targetPath);
                $hometexto->image = $name;
            }
            if ($this->Hometextos->save($hometexto)) {
                $this->Flash->success(__('The hometexto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hometexto could not be saved. Please, try again.'));
        }
        $this->set(compact('hometexto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hometexto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $this->viewBuilder()->setLayout('admin');
        $hometexto = $this->Hometextos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hometexto = $this->Hometextos->patchEntity($hometexto, $this->request->getData());
            if ($this->Hometextos->save($hometexto)) {
                $this->Flash->success(__('The hometexto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hometexto could not be saved. Please, try again.'));
        }
        $this->set(compact('hometexto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hometexto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->Authorization->skipAuthorization();
        $this->request->allowMethod(['post', 'delete']);
        $hometexto = $this->Hometextos->get($id);
        if ($this->Hometextos->delete($hometexto)) {
            $this->Flash->success(__('The hometexto has been deleted.'));
        } else {
            $this->Flash->error(__('The hometexto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
