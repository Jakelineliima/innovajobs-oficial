<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Admins Controller
 *
 * @property \App\Model\Table\AdminsTable $Admins
 * @method \App\Model\Entity\Admin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminsController extends AppController
{
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $admins = $this->paginate($this->Admins);
        $this->viewBuilder()->setLayout('admin');
        $this->set(compact('admins'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('admin');
        $admin = $this->Admins->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('admin'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('admin');
        $this->Authorization->skipAuthorization();
        $admin = $this->Admins->newEmptyEntity();
        if ($this->request->is('post')) {
            $admin = $this->Admins->patchEntity($admin, $this->request->getData());
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $this->set(compact('admin'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin');
        $admin = $this->Admins->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admins->patchEntity($admin, $this->request->getData());
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $this->set(compact('admin'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->viewBuilder()->setLayout('admin');
        $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admins->get($id);
        if ($this->Admins->delete($admin)) {
            $this->Flash->success(__('The admin has been deleted.'));
        } else {
            $this->Flash->error(__('The admin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    // Login e autenticação

    // public function beforeFilter(\Cake\Event\EventInterface $event)
    // {
    //     parent::beforeFilter($event);
    //     // Configure the login action to not require authentication, preventing
    //     // the infinite redirect loop issue
    //     $this->Authentication->addUnauthenticatedActions(['login', 'add']);
    // }

    // public function login()
    // {
    //     $this->Authorization->skipAuthorization();
    //     $this->request->allowMethod(['get', 'post']);
    //     $result = $this->Authentication->getResult();
    //     // regardless of POST or GET, redirect if user is logged in
    //     if ($result->isValid()) {
    //         // redirect to /articles after login success
    //         $redirect = $this->request->getQuery('redirect', [
    //             'controller' => 'Admins',
    //             'action' => 'add',
    //         ]);

    //         return $this->redirect($redirect);
    //     }
    //     // display error if user submitted and authentication failed
    //     if ($this->request->is('post') && !$result->isValid()) {
    //         $this->Flash->error(__('Email ou senha incorreta'));
    //     }
    // }


    // public function logout()
    // {
    //     $this->Authorization->skipAuthorization();
    //     $result = $this->Authentication->getResult();
    //     // regardless of POST or GET, redirect if user is logged in
    //     if ($result->isValid()) {
    //         $this->Authentication->logout();
    //         return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    //     }
    // }
}
