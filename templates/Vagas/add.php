<?php

use Authentication\Authenticator\FormAuthenticator;

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaga $vaga
 * @var \Cake\Collection\CollectionInterface|string[] $gêneros
 * @var \Cake\Collection\CollectionInterface|string[] $especiais
 * @var \Cake\Collection\CollectionInterface|string[] $escolaridades
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $cakeDescription ?>:
    <?= $this->fetch('title') ?>
  </title>
  <?= $this->Html->meta('icon') ?>

  <!-- CSS e FONTES -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'login', 'addlogin', 'default', 'menu', 'addvagas', 'inicial']) ?>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>

<section>
  <div class="container contvagas">
    <?= $this->Form->create($vaga) ?>
    <h2>Cadastro de Vagas</h2>
    <div class="row100">
      <div class="col">
        <div class="">
          <?php
          echo $this->Form->control('empresa', ['class' => 'inputBox']);
          ?>
          <span class="line"></span>
        </div>
      </div>
      <div class="col">
        <div class="">
          <?php
          echo $this->Form->control('vaga', ['class' => 'inputBox']);
          ?>
        </div>
      </div>
    </div>

    <div class="row100">
      <div class="col">
        <div class="">
          <?php
          echo $this->Form->control('gêneros_id', ['class' => 'inputBox', 'options' => $gêneros]);
          ?>
        </div>
      </div>
      <div class="col">
        <div class="">
          <?php
          echo $this->Form->control('especiais_id', ['class' => 'inputBox', 'options' => $especiais]);
          ?>
        </div>
      </div>
    </div>

    <div class="row100">
      <div class="col">
        <div class="">
          <?php
          echo $this->Form->control('escolaridades_id', ['class' => 'inputBox', 'options' => $escolaridades]);
          ?>
        </div>
      </div>
      <div class="col">
        <div class="">
          <?php
          echo $this->Form->control('horário', ['type' => 'time', 'class' => 'hora', 'class' => 'inputBox', 'min' => '05:00', 'max' => '20:00']);
          ?>
        </div>
      </div>
    </div>

    <!-- contato -->
    <div class="row100">
      <div class="col">
        <div class="">
          <?php
          echo $this->Form->control('telefone', ['class' => 'inputBox', 'type' => 'text', 'id' => 'telefone']);
          ?>
        </div>
      </div>
      <div class="col email">
        <div class="">
          <?php
          echo $this->Form->control('email', ['class' => 'inputBox']);
          ?>
        </div>
      </div>
    </div>

    <div class="row100">

      <div class="col">
        <div class="">
          <?php
          echo $this->Form->control('mensagem', [ 'type' => 'textarea', 'style' => 'background-color: #fff']);
          ?>
        </div>
      </div>
    </div>

    <div class="botao">
      <input class="btn reset" type="reset" value="Limpar">
      <?= $this->Form->button(__('Cadastrar'), ['class' => 'btn btnvagas', 'style' => 'width: 216px;']) ?>
      <?= $this->Form->end() ?>
    </div>


  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
<script>
  $(function(){
    $("#telefone").inputmask({
      mask: "(99)99999-9999"
    })
  });
</script>