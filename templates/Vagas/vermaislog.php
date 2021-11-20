<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaga $vaga
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
  <?= $this->Html->css(['addlogin', 'addvagas', 'all', 'cake', 'default', 'inicial', 'menu', 'miligram.min', 'normalize.min', 'sobre', 'style', 'user', 'vermais']) ?>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>
<div>
  <h5 class="titulo">Ficou interessado na vaga ?
    <br>
    Envie seu currículo nos meios de contato da empresa ou ligue para saber mais.
    <br>
    Os meios de contato estão aí embaixo, pode verificar.
    <br>
    Boa Sorte <i class="em em-smiley" aria-role="presentation" aria-label="SMILING FACE WITH OPEN MOUTH"></i>
  </h5>

  <div class="container" style="display: flex;
justify-content: center;
">

    <div class="column-responsive column-80">
      <div class="card-body">
        <h5 class="card-title tag"><strong>Cargo : </strong> <?= h($vaga->vaga) ?></h5>
        <h6 class="card-subtitle mb-2 tag"><strong>Empresa : </strong><?= h($vaga->empresa) ?></h6>
        <hr class="hrr">

        <p class="tag"><strong>Horário de entrada : </strong><?= h($vaga->horário) ?></p>

        <hr class="hrr">
        <p class="tag"><strong>Telefone pra contato : </strong><?= h($vaga->telefone) ?></p>
        <p class="tag"><strong>Email : </strong><?= h($vaga->email) ?></p>
        <hr class="hrr">
        <p class=" tag"><strong>Mensagem ao candidato :  </strong><?= h($vaga->mensagem) ?></p>
      </div>
      <div class="voltar">
        <a class="voltarbtn btn  " href="/vagas/vagaexibirlog">Voltar</a>
      </div>
    </div>
  </div>