<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hometexto[]|\Cake\Collection\CollectionInterface $hometextos
 */
?>
<div class="hometextos index content">
    <?= $this->Html->link(__('Novo texto'), ['action' => 'add'], ['class' => 'button float-right']) ?>


    <div class="card" style="width: 18rem;">
        <?php foreach ($hometextos as $hometexto) : ?>
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><?= h($hometexto->texto) ?></h6>
                <h6 class="card-subtitle mb-2 text-muted"><?= $this->Html->image($hometexto->image) ?></h6>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $hometexto->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $hometexto->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $hometexto->id], ['confirm' => __('Deseja deletar esse item ?', $hometexto->id)]) ?>
                </td>
            </div>
        <?php endforeach; ?>
    </div>
    
</div>