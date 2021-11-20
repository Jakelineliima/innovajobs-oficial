<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gênero[]|\Cake\Collection\CollectionInterface $gêneros
 */
?>
<div class="gêneros index content">
    <?= $this->Html->link(__('New Gênero'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Gêneros') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('genero') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gêneros as $gênero): ?>
                <tr>
                    <td><?= $this->Number->format($gênero->id) ?></td>
                    <td><?= h($gênero->genero) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gênero->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gênero->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gênero->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gênero->id)]) ?>
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
