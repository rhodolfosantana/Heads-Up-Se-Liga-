<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crime $crime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Crimes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="crimes form large-9 medium-8 columns content">
    <?= $this->Form->create($crime) ?>
    <fieldset>
        <legend><?= __('Reportar Incidente') ?></legend>
        <?php
            echo $this->Form->control('Título');
            echo $this->Form->control('Data', ['empty' => true]);
            echo $this->Form->control('Horário');
            echo $this->Form->control('Tipo de Incidente');
            echo $this->Form->control('Descrição');
            echo $this->Form->control('Objetos Roubados / Furtados');
            echo $this->Form->control('Local do Incidente');
            echo $this->Form->control('Vítima', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Reportar')) ?>
    <?= $this->Form->end() ?>
</div>
