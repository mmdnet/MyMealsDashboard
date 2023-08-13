<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WeeklyPlan $weeklyPlan
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $breakfastMeals
 * @var \Cake\Collection\CollectionInterface|string[] $lunchMeals
 * @var \Cake\Collection\CollectionInterface|string[] $dinnerMeals
 * @var \Cake\Collection\CollectionInterface|string[] $snacks
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Weekly Plans'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="weeklyPlans form content">
            <?= $this->Form->create($weeklyPlan) ?>
            <fieldset>
                <legend><?= __('Add Weekly Plan') ?></legend>
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
