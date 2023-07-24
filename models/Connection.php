<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require_once APPROOT.'/config/config.php';
class Connection {

    public $conn;
    public  function __construct() {
        $this->conn = new mysqli(DBhost,DBUser,DBpassword,DBname) or die('Not Connected');
    }
    
    public function RunQuery($query) {
        $result = $this->conn->query($query);
        if($result==true){
            echo '1 row is inserted ';
           }
        else {
           echo 'data not inserted'.$this->conn->connect_error;
           }
    }

}
//$model = new Connection();

