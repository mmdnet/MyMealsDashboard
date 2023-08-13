<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WeeklyPlan $weeklyPlan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Weekly Plan'), ['action' => 'edit', $weeklyPlan->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Weekly Plan'), ['action' => 'delete', $weeklyPlan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weeklyPlan->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Weekly Plans'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Weekly Plan'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="weeklyPlans view content">
            <h3><?= h($weeklyPlan->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $weeklyPlan->has('user') ? $this->Html->link($weeklyPlan->user->id, ['controller' => 'Users', 'action' => 'view', $weeklyPlan->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Breakfast Meal') ?></th>
                    <td><?= $weeklyPlan->has('breakfast_meal') ? $this->Html->link($weeklyPlan->breakfast_meal->title, ['controller' => 'BreakfastMeals', 'action' => 'view', $weeklyPlan->breakfast_meal->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Lunch Meal') ?></th>
                    <td><?= $weeklyPlan->has('lunch_meal') ? $this->Html->link($weeklyPlan->lunch_meal->title, ['controller' => 'LunchMeals', 'action' => 'view', $weeklyPlan->lunch_meal->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dinner Meal') ?></th>
                    <td><?= $weeklyPlan->has('dinner_meal') ? $this->Html->link($weeklyPlan->dinner_meal->title, ['controller' => 'DinnerMeals', 'action' => 'view', $weeklyPlan->dinner_meal->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Snack') ?></th>
                    <td><?= $weeklyPlan->has('snack') ? $this->Html->link($weeklyPlan->snack->title, ['controller' => 'Snacks', 'action' => 'view', $weeklyPlan->snack->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($weeklyPlan->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Plan Date') ?></th>
                    <td><?= h($weeklyPlan->plan_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
