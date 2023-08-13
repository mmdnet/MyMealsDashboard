<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DinnerMeal $dinnerMeal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dinner Meal'), ['action' => 'edit', $dinnerMeal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dinner Meal'), ['action' => 'delete', $dinnerMeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dinnerMeal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dinner Meals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dinner Meal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dinnerMeals view content">
            <h3><?= h($dinnerMeal->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($dinnerMeal->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dinnerMeal->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($dinnerMeal->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Ingredients') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($dinnerMeal->ingredients)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Recipe') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($dinnerMeal->recipe)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
