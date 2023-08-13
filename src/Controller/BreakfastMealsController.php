<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BreakfastMeals Controller
 *
 * @property \App\Model\Table\BreakfastMealsTable $BreakfastMeals
 * @method \App\Model\Entity\BreakfastMeal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BreakfastMealsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $breakfastMeals = $this->paginate($this->BreakfastMeals);

        $this->set(compact('breakfastMeals'));
    }

    /**
     * View method
     *
     * @param string|null $id Breakfast Meal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $breakfastMeal = $this->BreakfastMeals->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('breakfastMeal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $breakfastMeal = $this->BreakfastMeals->newEmptyEntity();
        if ($this->request->is('post')) {
            $breakfastMeal = $this->BreakfastMeals->patchEntity($breakfastMeal, $this->request->getData());
            if ($this->BreakfastMeals->save($breakfastMeal)) {
                $this->Flash->success(__('The breakfast meal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The breakfast meal could not be saved. Please, try again.'));
        }
        $this->set(compact('breakfastMeal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Breakfast Meal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $breakfastMeal = $this->BreakfastMeals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $breakfastMeal = $this->BreakfastMeals->patchEntity($breakfastMeal, $this->request->getData());
            if ($this->BreakfastMeals->save($breakfastMeal)) {
                $this->Flash->success(__('The breakfast meal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The breakfast meal could not be saved. Please, try again.'));
        }
        $this->set(compact('breakfastMeal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Breakfast Meal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $breakfastMeal = $this->BreakfastMeals->get($id);
        if ($this->BreakfastMeals->delete($breakfastMeal)) {
            $this->Flash->success(__('The breakfast meal has been deleted.'));
        } else {
            $this->Flash->error(__('The breakfast meal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
