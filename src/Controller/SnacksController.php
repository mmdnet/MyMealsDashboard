<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Snacks Controller
 *
 * @property \App\Model\Table\SnacksTable $Snacks
 * @method \App\Model\Entity\Snack[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SnacksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $snacks = $this->paginate($this->Snacks);

        $this->set(compact('snacks'));
    }

    /**
     * View method
     *
     * @param string|null $id Snack id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $snack = $this->Snacks->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('snack'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $snack = $this->Snacks->newEmptyEntity();
        if ($this->request->is('post')) {
            $snack = $this->Snacks->patchEntity($snack, $this->request->getData());
            if ($this->Snacks->save($snack)) {
                $this->Flash->success(__('The snack has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The snack could not be saved. Please, try again.'));
        }
        $this->set(compact('snack'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Snack id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $snack = $this->Snacks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $snack = $this->Snacks->patchEntity($snack, $this->request->getData());
            if ($this->Snacks->save($snack)) {
                $this->Flash->success(__('The snack has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The snack could not be saved. Please, try again.'));
        }
        $this->set(compact('snack'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Snack id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $snack = $this->Snacks->get($id);
        if ($this->Snacks->delete($snack)) {
            $this->Flash->success(__('The snack has been deleted.'));
        } else {
            $this->Flash->error(__('The snack could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
