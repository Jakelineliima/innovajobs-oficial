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
      <?= $this->Html->link(__('List Sobretextos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
    </div>
  </aside>
  <div class="column-responsive column-80">
    <div class="sobretextos form content">
      <?= $this->Form->create($sobretexto, ['type' => 'file']) ?>
      <fieldset>
        <legend><?= __('Add Sobretexto') ?></legend>
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