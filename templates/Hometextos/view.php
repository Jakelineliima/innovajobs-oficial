<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hometexto $hometexto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Hometexto'), ['action' => 'edit', $hometexto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Hometexto'), ['action' => 'delete', $hometexto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hometexto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Hometextos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hometexto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hometextos view content">
            <h3><?= h($hometexto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Texto') ?></th>
                    <td><?= h($hometexto->texto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= $this->Html->image($hometexto->image, ['style' => 'max-width:50px;height:50px;border-radius:50%;']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($hometexto->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
