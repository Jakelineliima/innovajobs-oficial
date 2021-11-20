<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaga $vaga
 */
?>

<head>
    <?= $this->Html->css(['vermais']) ?>

    <?= $this->fetch('css') ?>
</head>
<div class="container2">
    <div class="card" style="border: none; width: 536px;">
        <div class="mgver">
            <h3 class="strong" style="text-align: center;"> <strong>
                    <?= h($vaga->vaga) ?> </strong></h3>

            <h6 class="h6v"> Nome da empresa:
                <strong class="strong"> <?= h($vaga->empresa) ?> </strong>
            </h6>

            <h6 class="h6v"> Horário de entrada:
                <strong class="strong"><?= h($vaga->horário) ?></strong>
            </h6>
            <h6 class="h6v"> Gênero:
                <strong class="strong"> <?= h($vaga->gênero->genero) ?></strong>
            </h6>

            <h6 class="h6v"> Especial:
                <strong class="strong"> <?= h($vaga->especiai->especial) ?></strong>
            </h6>

            <h6 class="h6v"> Escolaridade:
                <strong class="strong"><?= h($vaga->escolaridade->escolaridade) ?></strong>
            </h6>
            
            <hr>

            <h3 class="strong" style="text-align: center;"> <strong>Meios de contato </strong></h3>

            <h6 class="h6v"> Telefone:
                <strong class="strong"> <?= h($vaga->telefone) ?></strong>
            </h6>

            <h6 class="h6v"> Email:
                <strong class="strong"> <?= h($vaga->email) ?></strong>
            </h6>

            <hr>

            <h6 class="h6v"> Mensagem ao candidato:
                <strong class="strong"> <?= h($vaga->mensagem) ?></strong>
            </h6>
            <div class="btnuser">
                <button class="btnver">
                    <?= $this->Html->link(__('Editar vaga'), ['action' => 'edit', $vaga->id]) ?> </button>
                <button class=" btnver btnexcluir"> <?= $this->Form->postLink(__('Excluir vaga'), ['action' => 'delete', $vaga->id], ['confirm' => __('Deseja excluir sua conta ? ', $vaga->name)]) ?></button>
            </div>

        </div>
    </div>
</div>