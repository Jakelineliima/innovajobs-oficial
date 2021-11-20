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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gênero->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gênero->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Gêneros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gêneros form content">
            <?= $this->Form->create($gênero) ?>
            <fieldset>
                <legend><?= __('Edit Gênero') ?></legend>
                <?php
                    echo $this->Form->control('genero');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
