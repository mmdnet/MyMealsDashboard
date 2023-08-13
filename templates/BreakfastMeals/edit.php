<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BreakfastMeal $breakfastMeal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $breakfastMeal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $breakfastMeal->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Breakfast Meals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="breakfastMeals form content">
            <?= $this->Form->create($breakfastMeal) ?>
            <fieldset>
                <legend><?= __('Edit Breakfast Meal') ?></legend>
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
