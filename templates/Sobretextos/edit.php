<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sobretexto $sobretexto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sobretexto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sobretexto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sobretextos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sobretextos form content">
            <?= $this->Form->create($sobretexto) ?>
            <fieldset>
                <legend><?= __('Edit Sobretexto') ?></legend>
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
