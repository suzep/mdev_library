<?php
class Connection {
    public $host;
    public $user;
    public $password;
    public $db;

    static public $conxn;

    public $sql;
    public $result;
    public $numRows;
    public $affRows;
    public $data = array();

    public function __construct()
    {

    }

    public function ConnectDB(){

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}
?>