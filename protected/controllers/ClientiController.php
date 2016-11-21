<?php

class ClientiController extends Controller {

    public function actionClienti() {
        if (count($_POST) > 0) :
            Cliente::model()->findByPk($_POST['ClienteID'])->delete();
            Yii::app()->user->setFlash(
                    'eliminazione', 'Il cliente è stato eliminato correttamente'
            );
            $this->refresh();
        endif;
        $listaClienti = Cliente::model()->findAll(array(
            'order' => 'Cognome,Nome DESC',
        ));
        $this->render('clienti', array(
            'clienti' => $listaClienti,
        ));
    }

    public function actionCliente($clienteid = null) {
        if ((int) $clienteid > 0) :
            $cliente = Cliente::model()->findByPk($clienteid);
        else :
            $cliente = new Cliente;
        endif;
        if (count($_POST) > 0) :
            $cliente->setAttributes($_POST['Cliente']);
            if ($cliente->save()) :
                Yii::app()->user->setFlash('eliminazione', 'Il cliente è stato creato!');
                $this->redirect(array('/clienti'));
            endif;
        endif;
        $this->render('cliente', array(
            'cliente' => $cliente,
        ));
    }

}
