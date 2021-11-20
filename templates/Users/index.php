<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<head>
  <?= $this->Html->css(['vermais']) ?>

  <?= $this->fetch('css') ?>
</head>
<div class="container2" style="border: none;">
  <div class="mgver" style="width: 487px;"> <?php foreach ($users as $user) : ?> <h4 class="seusdados"> <strong style="color: #070b4a;">Seus dados</strong></h4>
    <hr class="hr">
    <div class="card-body">
      <h5 class=""><strong style="color: #070b4a; margin-right: 12px;">Nome de usuário: </strong> <?= h($user->nome) ?></h5>
      <h5 class="card-subtitle"><strong style="color: #070b4a; margin-right: 12px;">Email: </strong><?= h($user->email) ?></h5>
    </div>
  
    <hr class="hr">
    <div class="btnuser">
      <button>
        <?= $this->Html->link(__('Editar dados'), ['action' => 'edit', $user->id]) ?>
      </button>
      <!-- <button class="btnexcluir"> <?= $this->Form->postLink(__('Excluir conta'), ['action' => 'delete', $user->id], ['confirm' => __('Deseja excluir sua conta ? ', $user->name)]) ?></button> -->
    </div>
  <?php endforeach; ?>
  </div>
</div>
<style>
  button{
  width: 120px;
  height: 36px;
  border-radius: 20px;
  background: blueviolet;
  font-size: 16px;
  border: transparent;
}
.btnexcluir{
  width: 120px;
  height: 36px;
  border-radius: 20px;
  background: blueviolet;
  font-size: 16px;
  border: transparent;
  background-color: #fd0d3a;
}
</style>