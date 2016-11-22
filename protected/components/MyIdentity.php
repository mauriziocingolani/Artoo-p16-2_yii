<?php

class MyIdentity implements IUserIdentity {

    private $_autenticato;
    private $_username;
    private $_password;

    public function __construct($username, $password) {
        $this->_username = $username;
        $this->_password = $password;
    }

    public function authenticate() {
        $utenti = array(
            'admin' => 'admin',
            'pippo' => 'password',
        );
        if (array_key_exists($this->_username, $utenti)) :
            $this->_autenticato = ($utenti[$this->_username] == $this->_password);
        else :
            $this->_autenticato = false;
        endif;
        return $this->_autenticato;
    }

    public function getId() {
        return 1;
    }

    public function getIsAuthenticated() {
        return $this->_autenticato;
    }

    public function getName() {
        return $this->_username;
    }


    public function getPersistentStates() {
        
    }

}
