<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require_once APPROOT.'/models/User.php';
class userController {
    public $model;
    public function __construct() {
        $this->model=new User();
    }
    public function insert() {
       $this->model->InsertData();
       
      
    }
}

