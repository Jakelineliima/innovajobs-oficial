<div class="container login">
    <div class="container con">
        <div class="users form">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create() ?>
            <fieldset class="teste">
                <legend><?= __('Entre com seu email e sua senha') ?></legend>
                <?= $this->Form->control('email', ['required' => true, 'placeholder' => 'Digite seu email']) ?>
                <?= $this->Form->control('senha', ['required' => true, 'type' => 'password', 'placeholder' => 'Digite sua senha']); ?>
            </fieldset>
            <?= $this->Form->submit(__('Entrar')); ?>
            <?= $this->Form->end() ?>
            <div class="textadd">
                <p class="text-dark">Não possui conta? <a href="/useradd" class="alogin">Criar conta</a> </p>
                <strong>Conta destinada apenas para quem deseja divulgar vagas </strong>
            </div>
        </div>
    </div>
</div>