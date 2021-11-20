<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especiai[]|\Cake\Collection\CollectionInterface $especiais
 */
?>
<div class="especiais index content">
    <?= $this->Html->link(__('New Especiai'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Especiais') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('especial') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($especiais as $especiai): ?>
                <tr>
                    <td><?= $this->Number->format($especiai->id) ?></td>
                    <td><?= h($especiai->especial) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $especiai->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $especiai->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $especiai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $especiai->id)]) ?>
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
