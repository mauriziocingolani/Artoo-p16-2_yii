<?php
/* @var $cli Cliente */
?>

<h1>Lista clienti</h1>

<p>
    <?php echo CHtml::link('Crea nuovo cliente', array('/cliente/nuovo')); ?>
</p>

<?php if (is_array($clienti) && count($clienti) > 0) { ?>
    <!-- clienti presenti -->

    <table>
        <?php foreach ($clienti as $cli) : ?>
            <tr>
                <td><?= $cli->Nome; ?></td>
                <td><?php echo $cli->Cognome; ?></td>
                <td><?php echo $cli->Email; ?></td>
                <td><?= CHtml::link('<i class="fa fa-pencil"></i> Modifica', array('/cliente/' . $cli->ClienteID)); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php } else { ?>
    <!-- tabella clienti vuota -->

    <em>Non ci sono clienti nel database :-(</em>

<?php } ?>
