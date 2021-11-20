<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gênero $gênero
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Gênero'), ['action' => 'edit', $gênero->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Gênero'), ['action' => 'delete', $gênero->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gênero->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Gêneros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Gênero'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gêneros view content">
            <h3><?= h($gênero->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Genero') ?></th>
                    <td><?= h($gênero->genero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gênero->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
