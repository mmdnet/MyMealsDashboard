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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $snack->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $snack->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Snacks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="snacks form content">
            <?= $this->Form->create($snack) ?>
            <fieldset>
                <legend><?= __('Edit Snack') ?></legend>
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
