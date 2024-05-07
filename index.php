<?php 
include "connect.php";

//    taodatabase
        //     $sql = " CREATE DATABASE lasttime ";

        //     if(mysqLi_query( $conn, $sql )){
        //         echo " Tạo database thành công";
        //     }
        //      else{
        //         echo "Tạo thất bại";
        //    }
//  tao bang
        // $sql = "CREATE TABLE thanhvien (
        //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     user VARCHAR(30) NOT NULL,
        //     pass VARCHAR(30) NOT NULL,
        //     level INT(3) DEFAULT 1  -- Tùy chọn, thêm mức độ mặc định nếu cần
        //   )";
        // $sql = "CREATE TABLE posts (
        //     id INT PRIMARY KEY AUTO_INCREMENT,
        //     title VARCHAR(255) NOT NULL,
        //     content TEXT NOT NULL,
        //     created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        // )";
        //   if ($conn->query($sql) == TRUE) {
        //                 echo "Tạo bảng thành công";
        //               } else {
        //                 echo "Lỗi tạo bảng: " . $conn->error;
        //               }
        session_start();

        if(!isset($_SESSION['mySession'])){
                header('location:login.php');
        }
?>
<html lang="en">
         <head>
             <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <link rel="stylesheet" href="style.css">
             <title>QLCheese</title>
          
            
         </head>
         <body>
         <h3 style="color: blue; text-align: center;">Welcome to my home</h3>
            

                        <ul class="a-main">
                        <li>
                                <a href="index.php?action=quanlybaiviet&query=them"> Quản Lý Bài Viết </a>
                        </li>
                        
                        <li>
                                <a href="index.php?action=quanlyblog&query=them"> Quản Lý Blogs </a>
                        </li>
                  
                   <?php
                   
                    include 'main.php';
                    include 'quanly.php';  
                
                   ?>
         <div class="logout-btn-container">
                <a href="logout.php">
                <button type="button" name="dangxuat" >Log Out</button>
                </a>
        </div>
                    
                   
        </body>
        </html>