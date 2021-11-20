<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sobretexto[]|\Cake\Collection\CollectionInterface $sobretextos
 */
?>
<div class="sobretextos index content">
    <?= $this->Html->link(__('New Sobretexto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sobretextos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('texto') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sobretextos as $sobretexto): ?>
                <tr>
                    <td><?= $this->Number->format($sobretexto->id) ?></td>
                    <td><?= h($sobretexto->texto) ?></td>
                    <td><?= @$this->Html->image($sobretexto->image) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sobretexto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sobretexto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sobretexto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sobretexto->id)]) ?>
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
