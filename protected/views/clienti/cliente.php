<?php
/* @var $this SiteController */
/* @var $form CActiveForm */
/* @var $cliente Cliente */
?>

<h1><?php echo ($cliente->isNewRecord ? 'Nuovo' : 'Aggiornamento'); ?> cliente</h1>

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
        <?= $form->labelEx($cliente, 'Email',array('class'=>'MyClass')); ?>
        <?= $form->textField($cliente, 'Email'); ?>      
        <?= $form->error($cliente, 'Email'); ?>
    </div>

    <?=
        
    CHtml::submitButton(($cliente->isNewRecord ? 'Crea nuovo' : 'Aggiorna questo') . ' cliente', array(
        'class' => 'button-submit',
    ));
    ?>

    <?php $this->endWidget(); ?>
</div>