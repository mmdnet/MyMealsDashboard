<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Snack $snack
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Snack'), ['action' => 'edit', $snack->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Snack'), ['action' => 'delete', $snack->id], ['confirm' => __('Are you sure you want to delete # {0}?', $snack->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Snacks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Snack'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="snacks view content">
            <h3><?= h($snack->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($snack->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($snack->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($snack->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Ingredients') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($snack->ingredients)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Recipe') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($snack->recipe)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
