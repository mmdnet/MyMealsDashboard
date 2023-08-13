<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Weekly Plans') ?></h4>
                <?php if (!empty($user->weekly_plans)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Plan Date') ?></th>
                            <th><?= __('Breakfast Id') ?></th>
                            <th><?= __('Lunch Id') ?></th>
                            <th><?= __('Dinner Id') ?></th>
                            <th><?= __('Snack Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->weekly_plans as $weeklyPlans) : ?>
                        <tr>
                            <td><?= h($weeklyPlans->id) ?></td>
                            <td><?= h($weeklyPlans->user_id) ?></td>
                            <td><?= h($weeklyPlans->plan_date) ?></td>
                            <td><?= h($weeklyPlans->breakfast_id) ?></td>
                            <td><?= h($weeklyPlans->lunch_id) ?></td>
                            <td><?= h($weeklyPlans->dinner_id) ?></td>
                            <td><?= h($weeklyPlans->snack_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'WeeklyPlans', 'action' => 'view', $weeklyPlans->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'WeeklyPlans', 'action' => 'edit', $weeklyPlans->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'WeeklyPlans', 'action' => 'delete', $weeklyPlans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weeklyPlans->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
