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
        try {
            $listaClienti = Cliente::model()->findAll(array(
                'order' => 'Cognome,Nome DESC',
            ));
        } catch (CDbException $e) {
            throw new Exception('1. Errore ' . get_class($e) . '. Riprovate più tardi please...');
        } catch (Exception $e) {
            throw new Exception('2. Errore ' . get_class($e) . '. Riprovate più tardi please...');
        }
        $this->render('clienti', array(
            'clienti' => $listaClienti,
        ));
    }

    public function actionCliente($clienteid = null) {
        if ((int) $clienteid > 0) :
            $cliente = Cliente::model()->findByPk($clienteid);
            if (!$cliente instanceof Cliente) :
                throw new CHttpException(403, 'Il cliente con ID ' . $clienteid . ' non esiste!');
            endif;
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
