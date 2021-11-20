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
            <?= $this->Html->link(__('List Hometextos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hometextos form content">
            <?= $this->Form->create($hometexto, ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Add Hometexto') ?></legend>
                <?php
                    echo $this->Form->control('texto');
                    echo $this->Form->control('image_file', ['type' => 'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
