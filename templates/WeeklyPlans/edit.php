<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WeeklyPlan $weeklyPlan
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $breakfastMeals
 * @var string[]|\Cake\Collection\CollectionInterface $lunchMeals
 * @var string[]|\Cake\Collection\CollectionInterface $dinnerMeals
 * @var string[]|\Cake\Collection\CollectionInterface $snacks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $weeklyPlan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $weeklyPlan->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Weekly Plans'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="weeklyPlans form content">
            <?= $this->Form->create($weeklyPlan) ?>
            <fieldset>
                <legend><?= __('Edit Weekly Plan') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('plan_date');
                    echo $this->Form->control('breakfast_id', ['options' => $breakfastMeals]);
                    echo $this->Form->control('lunch_id', ['options' => $lunchMeals]);
                    echo $this->Form->control('dinner_id', ['options' => $dinnerMeals]);
                    echo $this->Form->control('snack_id', ['options' => $snacks]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
