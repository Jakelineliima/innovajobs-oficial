<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Escolaridade[]|\Cake\Collection\CollectionInterface $escolaridades
 */
?>
<div class="escolaridades index content">
    <?= $this->Html->link(__('New Escolaridade'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Escolaridades') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('escolaridade') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($escolaridades as $escolaridade): ?>
                <tr>
                    <td><?= $this->Number->format($escolaridade->id) ?></td>
                    <td><?= h($escolaridade->escolaridade) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $escolaridade->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $escolaridade->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $escolaridade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $escolaridade->id)]) ?>
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
