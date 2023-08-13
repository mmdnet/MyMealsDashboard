<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LunchMeal $lunchMeal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lunchMeal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lunchMeal->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Lunch Meals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lunchMeals form content">
            <?= $this->Form->create($lunchMeal) ?>
            <fieldset>
                <legend><?= __('Edit Lunch Meal') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('ingredients');
                    echo $this->Form->control('recipe');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
