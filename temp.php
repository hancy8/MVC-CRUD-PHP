<?php
require_once 'config/config.php';

     $conn = new mysqli(DBhost,DBUser,DBpassword,DBname);
    
        $query = "INSERT INTO tablename(id,name, lname) VALUES (NULL,'Hancy','Khalid')";

        $result = $conn->query($query);
        if($result===true){
            echo '1 row is inserted ';
           }
        else {
           echo 'data not inserted'.$conn->connect_error;
           }
    
