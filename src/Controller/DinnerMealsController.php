<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DinnerMeals Controller
 *
 * @property \App\Model\Table\DinnerMealsTable $DinnerMeals
 * @method \App\Model\Entity\DinnerMeal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DinnerMealsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $dinnerMeals = $this->paginate($this->DinnerMeals);

        $this->set(compact('dinnerMeals'));
    }

    /**
     * View method
     *
     * @param string|null $id Dinner Meal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dinnerMeal = $this->DinnerMeals->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('dinnerMeal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dinnerMeal = $this->DinnerMeals->newEmptyEntity();
        if ($this->request->is('post')) {
            $dinnerMeal = $this->DinnerMeals->patchEntity($dinnerMeal, $this->request->getData());
            if ($this->DinnerMeals->save($dinnerMeal)) {
                $this->Flash->success(__('The dinner meal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dinner meal could not be saved. Please, try again.'));
        }
        $this->set(compact('dinnerMeal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dinner Meal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dinnerMeal = $this->DinnerMeals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dinnerMeal = $this->DinnerMeals->patchEntity($dinnerMeal, $this->request->getData());
            if ($this->DinnerMeals->save($dinnerMeal)) {
                $this->Flash->success(__('The dinner meal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dinner meal could not be saved. Please, try again.'));
        }
        $this->set(compact('dinnerMeal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dinner Meal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dinnerMeal = $this->DinnerMeals->get($id);
        if ($this->DinnerMeals->delete($dinnerMeal)) {
            $this->Flash->success(__('The dinner meal has been deleted.'));
        } else {
            $this->Flash->error(__('The dinner meal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
