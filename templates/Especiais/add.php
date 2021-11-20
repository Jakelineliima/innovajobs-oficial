<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especiai $especiai
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Especiais'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="especiais form content">
            <?= $this->Form->create($especiai) ?>
            <fieldset>
                <legend><?= __('Add Especiai') ?></legend>
                <?php
                    echo $this->Form->control('especial');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
