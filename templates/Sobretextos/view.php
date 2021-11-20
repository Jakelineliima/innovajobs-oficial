<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sobretexto $sobretexto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sobretexto'), ['action' => 'edit', $sobretexto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sobretexto'), ['action' => 'delete', $sobretexto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sobretexto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sobretextos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sobretexto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sobretextos view content">
            <h3><?= h($sobretexto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Texto') ?></th>
                    <td><?= h($sobretexto->texto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($sobretexto->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sobretexto->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
