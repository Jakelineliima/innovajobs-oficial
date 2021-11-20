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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hometexto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hometexto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Hometextos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hometextos form content">
            <?= $this->Form->create($hometexto) ?>
            <fieldset>
                <legend><?= __('Edit Hometexto') ?></legend>
                <?php
                    echo $this->Form->control('texto');
                    echo $this->Form->control('image');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
