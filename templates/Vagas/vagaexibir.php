<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaga[]|\Cake\Collection\CollectionInterface $vagas
 */
?>

<head>
    <?= $this->Html->css(['vagas']) ?>

    <?= $this->fetch('css') ?>
</head>
<div class="container2">
    <?php foreach ($vagas as $vaga) : ?>
        <div class="card">
            <div class="box">
                <div class="content2">

                    <h3> <strong>
                            <?= h($vaga->vaga) ?> </strong></h3>
                    <h6> Nome da empresa:
                        <strong> <?= h($vaga->empresa) ?> </strong>
                    </h6>
                    <h6> Horário:
                        <strong> <?= h($vaga->horário) ?> </strong>
                    </h6>
                    <h6> Gênero:
                        <strong> <?= h($vaga->gênero->genero) ?> </strong>
                    </h6>

                    <h6> Especial:
                        <strong> <?= h($vaga->especiai->especial) ?> </strong>
                    </h6>
                    <?= $this->Html->link(__('Ver mais'), ['action' => 'vermais', $vaga->id,]) ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>