<?php
/* @var $cli Cliente */
$messaggio = Yii::app()->user->getFlash('eliminazione');
?>

<h1>Lista clienti</h1>

<p>
    <?php echo CHtml::link('<i class="fa fa-plus"></i> Crea nuovo cliente', array('/cliente/nuovo')); ?>
</p>

<?php if ($messaggio) : ?>
    <div class="flash-success">
        <?= $messaggio; ?>
    </div>
<?php endif; ?>

<?php if (is_array($clienti) && count($clienti) > 0) { ?>
    <!-- clienti presenti -->

    <table>
        <?php foreach ($clienti as $cli) : ?>
            <tr>
                <td><?= $cli->Nome; ?></td>
                <td><?php echo $cli->Cognome; ?></td>
                <td><?php echo $cli->Email; ?></td>
                <td>
                    <?= CHtml::link('<i class="fa fa-pencil"></i> Modifica', array('/cliente/' . $cli->ClienteID)); ?>
                </td>
                <td>
                    <form method="post" onsubmit="return confirm('Sei sicuro di voler eliminare questo cliente?');">
                        <input type="hidden" name="ClienteID" value="<?= $cli->ClienteID; ?>" />
                        <button type="submit">Elimina cliente</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php } else { ?>
    <!-- tabella clienti vuota -->

    <em>Non ci sono clienti nel database :-(</em>

<?php } ?>
