<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<head>
    <?= $this->Html->css(['edituser']) ?>

    <?= $this->fetch('css') ?>
</head>
<div class="container contadd">
    <div class="container con">
        <?= $this->Flash->render() ?>
        <?= $this->Form->create($user) ?>
        <div class="users form">
            <fieldset class="teste">
                <h5><strong>Edite seus dados</strong></h5>
                <?php
                echo $this->Form->control('nome', ['placeholder' => 'Digite seu nome de usuário']);
                echo $this->Form->control('email', ['placeholder' => 'Digite seu email']);
                echo $this->Form->control('Senha', ['type' => 'password', 'placeholder' => 'Digite uma senha', 'class' => 'senha']);
                ?>
            </fieldset>
            <div class="btnalinha">
                <?= $this->Form->button(__('Salvar')) ?>
                <?= $this->Form->end() ?>
            </div>

        </div>
    </div>
</div>