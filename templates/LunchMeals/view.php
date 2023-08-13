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
            <?= $this->Html->link(__('Edit Lunch Meal'), ['action' => 'edit', $lunchMeal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Lunch Meal'), ['action' => 'delete', $lunchMeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lunchMeal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Lunch Meals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Lunch Meal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lunchMeals view content">
            <h3><?= h($lunchMeal->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($lunchMeal->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($lunchMeal->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($lunchMeal->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Ingredients') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($lunchMeal->ingredients)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Recipe') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($lunchMeal->recipe)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
