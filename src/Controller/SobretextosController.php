<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sobretextos Controller
 *
 * @property \App\Model\Table\SobretextosTable $Sobretextos
 * @method \App\Model\Entity\Sobretexto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SobretextosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $sobretextos = $this->paginate($this->Sobretextos);

        $this->set(compact('sobretextos'));
    }
    public function sobre()
    {
        $this->Authorization->skipAuthorization();
        $sobretextos = $this->paginate($this->Sobretextos);
        $this->set(compact('sobretextos'));
    }
    public function sobrelog()
    {
        $this->Authorization->skipAuthorization();
        $this->viewBuilder()->setLayout('menu');
        $sobretextos = $this->paginate($this->Sobretextos);

        $this->set(compact('sobretextos'));
    }

    /**
     * View method
     *
     * @param string|null $id Sobretexto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {  
        $this->Authorization->skipAuthorization();
        $sobretexto = $this->Sobretextos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('sobretexto'));
    }
    

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $sobretexto = $this->Sobretextos->newEmptyEntity();
        if ($this->request->is('post')) {
            $sobretexto = $this->Sobretextos->patchEntity($sobretexto, $this->request->getData());

            if(!$sobretexto->getErrors){
                $image = $this->request->getData('image_file');
            $name = $image->getClientFilename();
            $targetPath = \WWW_ROOT . 'img' . DS . $name;
            if ($name) 
            $image->moveTo($targetPath);
            $sobretexto->image = $name;
            }
            


            if ($this->Sobretextos->save($sobretexto)) {
                $this->Flash->success(__('The sobretexto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sobretexto could not be saved. Please, try again.'));
        }
        $this->set(compact('sobretexto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sobretexto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Authorization->skipAuthorization();
        $sobretexto = $this->Sobretextos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sobretexto = $this->Sobretextos->patchEntity($sobretexto, $this->request->getData());
            if ($this->Sobretextos->save($sobretexto)) {
                $this->Flash->success(__('The sobretexto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sobretexto could not be saved. Please, try again.'));
        }
        $this->set(compact('sobretexto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sobretexto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sobretexto = $this->Sobretextos->get($id);
        if ($this->Sobretextos->delete($sobretexto)) {
            $this->Flash->success(__('The sobretexto has been deleted.'));
        } else {
            $this->Flash->error(__('The sobretexto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
