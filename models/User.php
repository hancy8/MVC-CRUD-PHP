<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require_once 'Connection.php';
class User extends Connection{
    
    public $id;
    public $name;
    public $lname;
   
    
    public function InsertData(){
        $query = "INSERT INTO tablename(id,name, lname) VALUES (NULL,'Hancy','Khalid')";          
        $this->RunQuery($query);
    }
}