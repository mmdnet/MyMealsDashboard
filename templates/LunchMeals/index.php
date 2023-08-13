<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\LunchMeal> $lunchMeals
 */
?>
<div class="lunchMeals index content">
    <?= $this->Html->link(__('New Lunch Meal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lunch Meals') ?></h3>
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
                <?php foreach ($lunchMeals as $lunchMeal): ?>
                <tr>
                    <td><?= $this->Number->format($lunchMeal->id) ?></td>
                    <td><?= h($lunchMeal->title) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lunchMeal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lunchMeal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lunchMeal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lunchMeal->id)]) ?>
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
