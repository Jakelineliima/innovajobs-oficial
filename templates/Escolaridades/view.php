<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Escolaridade $escolaridade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Escolaridade'), ['action' => 'edit', $escolaridade->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Escolaridade'), ['action' => 'delete', $escolaridade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $escolaridade->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Escolaridades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Escolaridade'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="escolaridades view content">
            <h3><?= h($escolaridade->escolaridades) ?></h3>
            <table>
                <tr>
                    <th><?= __('Escolaridade') ?></th>
                    <td><?= h($escolaridade->escolaridade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($escolaridade->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
