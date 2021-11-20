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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $escolaridade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $escolaridade->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Escolaridades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="escolaridades form content">
            <?= $this->Form->create($escolaridade) ?>
            <fieldset>
                <legend><?= __('Edit Escolaridade') ?></legend>
                <?php
                    echo $this->Form->control('escolaridade');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
