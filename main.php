<?php

        if (isset($_GET['action']) && $_GET['query']){
            $tmp = $_GET['action'];
            $query = $_GET['query'];
        }else{
                $tmp ='';
                $query ='';
        }
        if ($tmp == 'quanlybaiviet' && $query =='add'){
            include ('add.php');
            include ('show.php');
        }
        elseif ( $tmp=='quanlybaiviet' && $query == 'edit'){
            include "edit.php";
        }
        elseif ( $tmp=='quanlybaiviet' && $query == 'show'){
            include "show.php";
        }
        elseif ( $tmp=='quanlybaiviet' && $query == 'del'){
            include "delete.php";
        }
        elseif ($tmp=='quanlyblog'&& $query=='them'){
            
            include ('modules/quanlyblog/lietke.php');
        }
        elseif ($tmp=='quanlyblog'&& $query=='sua'){
            include ('modules/quanlyblog/sua.php');
        }
       



?>