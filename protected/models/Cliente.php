<?php

class Cliente extends CActiveRecord {

    public $ClienteID;
    public $Nome;
    public $Cognome;
    public $Email;

    public function tableName() {
        return 'clienti';
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function rules() {
        return array(
            array('Nome, Cognome, Email', 'required'),
            array('Email', 'email'),
        );
    }

}
