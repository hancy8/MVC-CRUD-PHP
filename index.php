<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

define("APPROOT", dirname(__FILE__));
define("APPBASEURL", "http://localhost/NeatBeans/projects/MVC_crud");

if(empty($_REQUEST['module'])){
    die("<h1>Module is not found</h1>");
}
if(empty($_REQUEST['action']))
{
    die("Action is not Specified");
}
$module = $_REQUEST['module'];
$action = $_REQUEST['action'];
$controller = $module."Controller";
//echo $controller;
if(file_exists("Controllers/$controller.php")){
    include("Controllers/$controller.php");
    $ActiveController = new $controller();
    if(method_exists($ActiveController, $action)){
        $ActiveController->$action($_REQUEST);
    }
 else {
                die("<h1>Specified Action $action of this module $module is not found</h1>");

    }
}
 else {
    die("<h1>Specified Module $module is not found</h1>");
}
//echo 'Helo world';