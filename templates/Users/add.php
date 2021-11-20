<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container contadd">
    <div class="container con">
        <?= $this->Flash->render() ?>
        <?= $this->Form->create($user) ?>
        <div class="users form">
            <fieldset class="teste">
                <legend><?= __('Crie sua conta para divulgar suas vagas') ?></legend>
                <?php
                echo $this->Form->control('nome', ['placeholder' => 'Digite seu nome de usuário']);
                echo $this->Form->control('email', ['placeholder' => 'Digite seu email']);
                echo $this->Form->control('senha', ['type' => 'password', 'placeholder' => 'Digite uma senha']);
                ?>
            </fieldset>
            <div class="btnalinha">
                <?= $this->Form->button(__('Cadastrar'), ['class' => 'btnadd']) ?>
                <?= $this->Form->end() ?>
            </div>

            <div class="textadd">
                <p class="text-dark">Já possui conta?  <?= $this->Html->link("Entrar na conta", ['controller' => 'Users', 'action' => 'login']) ?> </p>
            </div>
        </div>
    </div>
</div>