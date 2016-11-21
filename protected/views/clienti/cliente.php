<?php
/* @var $this SiteController */
/* @var $form CActiveForm */
?>

<h1>Creazione/Modifica cliente</h1>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'form-cliente',
    ));
    ?>

    <p>
        <?= $form->errorSummary($cliente); ?>
    </p>

    <div class = "row">
        <?= $form->labelEx($cliente, 'Nome'); ?>
        <?= $form->textField($cliente, 'Nome'); ?>
        <?= $form->error($cliente, 'Nome'); ?>
    </div>
    <div class="row">
        <?= $form->labelEx($cliente, 'Cognome'); ?>
        <?= $form->textField($cliente, 'Cognome'); ?>
        <?= $form->error($cliente, 'Cognome'); ?>
    </div>
    <div class="row">
        <?= $form->labelEx($cliente, 'Email'); ?>
        <?= $form->textField($cliente, 'Email'); ?>      
        <?= $form->error($cliente, 'Email'); ?>
    </div>

    <?=
    CHtml::submitButton('Crea/modifica cliente', array(
        'class' => 'button-submit',
    ));
    ?>

    <?php $this->endWidget(); ?>
</div>