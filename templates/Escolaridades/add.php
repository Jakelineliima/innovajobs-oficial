<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Escolaridade $escolaridade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Escolaridades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="escolaridades form content">
            <?= $this->Form->create($escolaridade) ?>
            <fieldset>
                <legend><?= __('Add Escolaridade') ?></legend>
                <?php
                    echo $this->Form->control('escolaridade');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
