<div class="users form">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>
    <fieldset class="teste">
        <legend><?= __('Login administrativo') ?></legend>
        <?= $this->Form->control('email', ['required' => true, 'placeholder' => 'Digite seu email']) ?>
        <?= $this->Form->control('senha', ['required' => true, 'type' => 'password','placeholder' => 'Digite sua senha']); ?>
    </fieldset>
    <?= $this->Form->submit(__('Entrar')); ?>
    <?= $this->Form->end() ?>
    <div class="textadd">
        <p class="text-dark">Não possui conta? <?= $this->Html->link("Criar conta", ['action' => 'add']) ?> </p>
        <strong>Conta destinada apenas para quem deseja divulgar vagas </strong>
    </div>
</div>