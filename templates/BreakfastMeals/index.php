<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BreakfastMeal> $breakfastMeals
 */
?>
<div class="breakfastMeals index content">
    <?= $this->Html->link(__('New Breakfast Meal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Breakfast Meals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($breakfastMeals as $breakfastMeal): ?>
                <tr>
                    <td><?= $this->Number->format($breakfastMeal->id) ?></td>
                    <td><?= h($breakfastMeal->title) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $breakfastMeal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $breakfastMeal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $breakfastMeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $breakfastMeal->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
