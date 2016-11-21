<?php ?>

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
            </tr>
        <?php endforeach; ?>
    </table>

<?php } else { ?>
    <!-- tabella clienti vuota -->

    <em>Non ci sono clienti nel database :-(</em>

<?php } ?>
