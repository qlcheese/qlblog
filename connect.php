<?php
    $server ='localhost';
    $user = 'root';
    $password ='';
    $database ='lasttime';

    $conn = new mysqLi($server,$user,$password,$database);

    if($conn){
        mysqLi_query($conn,"SET NAMES 'utf8' ");
       
       
    }
    else {
        echo 'Disconnected';
    }