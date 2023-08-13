<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\WeeklyPlans;
use App\Model\Entity\BreakfastMeals;
use App\Model\Entity\LunchMeals;
use App\Model\Entity\DinnerMeals;
use App\Model\Entity\Snacks;
use Cake\ORM\Table;
use Cake\ORM\Locator\LocatorInterface;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;
/**
 * WeeklyPlans Controller
 *
 * @property \App\Model\Table\WeeklyPlansTable $WeeklyPlans
 * @method \App\Model\Entity\WeeklyPlan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */


class WeeklyPlansController extends AppController
{

      // Declare the model as a property
      protected $weeklyPlans;
      protected $breakfastMeals;
      protected $lunchMeals;
      protected $dinnerMeals;
      protected $snacks;

      public function beforeFilter(\Cake\Event\EventInterface $event)
      {
          parent::beforeFilter($event);
          $weeklyPlans = TableRegistry::getTableLocator()->get('WeeklyPlans')->find('all');
          $breakfastMeals = TableRegistry::getTableLocator()->get('BreakfastMeals')->find('all');
          $lunchMeals = TableRegistry::getTableLocator()->get('LunchMeals')->find('all');
          $dinnerMeals = TableRegistry::getTableLocator()->get('DinnerMeals')->find('all');
          $snacks = TableRegistry::getTableLocator()->get('Snacks')->find('all');

      }


    public function displayWeeklyMeals($user_id, $start_date)
    {
       
        // Generate a list of seven consecutive dates starting from the provided start_date
        $dates = [];
        for ($i = 0; $i < 7; $i++) {
            $dates[] = date('Y-m-d', strtotime($start_date . " +$i days"));
        }

        // Fetch the meal plans for all dates in the list
        $weeklyPlans = [];
        foreach ($dates as $date) {
            $weeklyPlan = $this->WeeklyPlans->find('first', [
                'conditions' => [
                    'WeeklyPlans.user_id' => $user_id,
                    'WeeklyPlans.plan_date' => $date
                ]
            ]);

            // If a meal plan is found, add it to the weeklyMealPlans array
            if ($weeklyPlan) {
                $weeklyPlans[$date] = $weeklyPlan;
            } else {
                // If no meal plan is found for a date, create an empty placeholder
                $weeklyPlans[$date] = null;
            }
        }

        // Pass the meal plans data to the view
        $this->set('weeklyPlans', $weeklyPlans);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $weeklyPlans = TableRegistry::getTableLocator()->get('WeeklyPlans')->find('all');
        $breakfastMeals = TableRegistry::getTableLocator()->get('BreakfastMeals')->find('all');
        $lunchMeals = TableRegistry::getTableLocator()->get('LunchMeals')->find('all');
        $dinnerMeals = TableRegistry::getTableLocator()->get('DinnerMeals')->find('all');
        $snacks = TableRegistry::getTableLocator()->get('Snacks')->find('all');
        
        $this->set('weeklyPlans', $weeklyPlans);
        $this->set('breakfastMeals', $breakfastMeals);
        $this->set('lunchMeals', $lunchMeals);
        $this->set('dinnerMeals', $dinnerMeals);
        $this->set('snacks', $snacks);

        $this->viewBuilder()
            ->setLayout('WeeklyPlanner') // Set the layout for this action
            ->setTemplate('index');
            
        

       
        

    }

    /**
     * View method
     *
     * @param string|null $id Weekly Plan id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $weeklyPlan = $this->WeeklyPlans->get($id, [
            'contain' => ['Users', 'BreakfastMeals', 'LunchMeals', 'DinnerMeals', 'Snacks'],
        ]);

        $this->set(compact('weeklyPlan'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $weeklyPlan = $this->WeeklyPlans->newEmptyEntity();
        if ($this->request->is('post')) {
            $weeklyPlan = $this->WeeklyPlans->patchEntity($weeklyPlan, $this->request->getData());
            if ($this->WeeklyPlans->save($weeklyPlan)) {
                $this->Flash->success(__('The weekly plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The weekly plan could not be saved. Please, try again.'));
        }
        $users = $this->WeeklyPlans->Users->find('list', ['limit' => 200])->all();
        $breakfastMeals = $this->WeeklyPlans->BreakfastMeals->find('list', ['limit' => 200])->all();
        $lunchMeals = $this->WeeklyPlans->LunchMeals->find('list', ['limit' => 200])->all();
        $dinnerMeals = $this->WeeklyPlans->DinnerMeals->find('list', ['limit' => 200])->all();
        $snacks = $this->WeeklyPlans->Snacks->find('list', ['limit' => 200])->all();
        $this->set(compact('weeklyPlan', 'users', 'breakfastMeals', 'lunchMeals', 'dinnerMeals', 'snacks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Weekly Plan id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $weeklyPlan = $this->WeeklyPlans->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $weeklyPlan = $this->WeeklyPlans->patchEntity($weeklyPlan, $this->request->getData());
            if ($this->WeeklyPlans->save($weeklyPlan)) {
                $this->Flash->success(__('The weekly plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The weekly plan could not be saved. Please, try again.'));
        }
        $users = $this->WeeklyPlans->Users->find('list', ['limit' => 200])->all();
        $breakfastMeals = $this->WeeklyPlans->BreakfastMeals->find('list', ['limit' => 200])->all();
        $lunchMeals = $this->WeeklyPlans->LunchMeals->find('list', ['limit' => 200])->all();
        $dinnerMeals = $this->WeeklyPlans->DinnerMeals->find('list', ['limit' => 200])->all();
        $snacks = $this->WeeklyPlans->Snacks->find('list', ['limit' => 200])->all();
        $this->set(compact('weeklyPlan', 'users', 'breakfastMeals', 'lunchMeals', 'dinnerMeals', 'snacks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Weekly Plan id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $weeklyPlan = $this->WeeklyPlans->get($id);
        if ($this->WeeklyPlans->delete($weeklyPlan)) {
            $this->Flash->success(__('The weekly plan has been deleted.'));
        } else {
            $this->Flash->error(__('The weekly plan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function fetchBreakfastMeals()
{
    $this->loadModel('BreakfastMeals');
    $breakfastMeals = $this->BreakfastMeals->find('list', ['limit' => 200]);
    $this->set('breakfastMeals', $breakfastMeals);
}

// Function to fetch lunch meals
public function fetchLunchMeals()
{
    $this->loadModel('LunchMeals');
    $lunchMeals = $this->LunchMeals->find('list', ['limit' => 200]);
    $this->set('lunchMeals', $lunchMeals);
}

// Function to fetch dinner meals
public function fetchDinnerMeals()
{
    $this->loadModel('DinnerMeals');
    $dinnerMeals = $this->DinnerMeals->find('list', ['limit' => 200]);
    $this->set('dinnerMeals', $dinnerMeals);
}

// Function to fetch snack meals
    public function fetchSnacks()
    {
        $this->loadModel('Snacks');
        $snacks = $this->Snacks->find('list', ['limit' => 200]);
        $this->set('snackMeals', $snackMeals);
    }
}
