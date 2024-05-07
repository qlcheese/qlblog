<?php
    if(isset($_GET['action'])){
        $tmp = $_GET['action'];
    }else {
        $tmp = '';
    }
    if($tmp=='quanlyblog'){
       include ("modules/quanlyblog/them.php");
    }
    
    ?>