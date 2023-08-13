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
            <?= $this->Html->link(__('Edit Breakfast Meal'), ['action' => 'edit', $breakfastMeal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Breakfast Meal'), ['action' => 'delete', $breakfastMeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $breakfastMeal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Breakfast Meals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Breakfast Meal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="breakfastMeals view content">
            <h3><?= h($breakfastMeal->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($breakfastMeal->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($breakfastMeal->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($breakfastMeal->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Ingredients') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($breakfastMeal->ingredients)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Recipe') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($breakfastMeal->recipe)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
