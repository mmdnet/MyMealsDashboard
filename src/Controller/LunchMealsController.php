<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LunchMeals Controller
 *
 * @property \App\Model\Table\LunchMealsTable $LunchMeals
 * @method \App\Model\Entity\LunchMeal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LunchMealsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $lunchMeals = $this->paginate($this->LunchMeals);

        $this->set(compact('lunchMeals'));
    }

    /**
     * View method
     *
     * @param string|null $id Lunch Meal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lunchMeal = $this->LunchMeals->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('lunchMeal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lunchMeal = $this->LunchMeals->newEmptyEntity();
        if ($this->request->is('post')) {
            $lunchMeal = $this->LunchMeals->patchEntity($lunchMeal, $this->request->getData());
            if ($this->LunchMeals->save($lunchMeal)) {
                $this->Flash->success(__('The lunch meal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lunch meal could not be saved. Please, try again.'));
        }
        $this->set(compact('lunchMeal'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lunch Meal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lunchMeal = $this->LunchMeals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lunchMeal = $this->LunchMeals->patchEntity($lunchMeal, $this->request->getData());
            if ($this->LunchMeals->save($lunchMeal)) {
                $this->Flash->success(__('The lunch meal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lunch meal could not be saved. Please, try again.'));
        }
        $this->set(compact('lunchMeal'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lunch Meal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lunchMeal = $this->LunchMeals->get($id);
        if ($this->LunchMeals->delete($lunchMeal)) {
            $this->Flash->success(__('The lunch meal has been deleted.'));
        } else {
            $this->Flash->error(__('The lunch meal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
