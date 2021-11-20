<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especiai $especiai
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Especiai'), ['action' => 'edit', $especiai->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Especiai'), ['action' => 'delete', $especiai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $especiai->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Especiais'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Especiai'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="especiais view content">
            <h3><?= h($especiai->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Especial') ?></th>
                    <td><?= h($especiai->especial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($especiai->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
