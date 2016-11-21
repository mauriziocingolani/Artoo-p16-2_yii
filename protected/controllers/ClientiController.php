<?php

class ClientiController extends Controller {

    public function actionClienti() {
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
            if ($cliente->save())
                $this->redirect(array('/clienti'));
        endif;
        $this->render('cliente', array(
            'cliente' => $cliente,
        ));
    }

}
