<?php
    session_start();

    include "connect.php";

    if(isset($_SESSION['mySession'])){
        header('location:index.php');
    }
    

    if(isset($_POST['dangnhap'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM thanhvien WHERE user = '$username' AND pass ='$password'";

        $result = mysqLi_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){
            $_SESSION['mySession'] = $username;
            header("location:index.php");

        }
        else{
            echo "Tài khoản hoặc mật khẩu sai";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="http://localhost/weblogin/css/login.css">
</head>
<body>
    <div>
        <h1>Đăng Nhập</h1>
        <form action="login.php" method="post">
            <label >username </label>
            <input type="text" name="username">
            <label >password</label>
            <input type="password" name="password" >
            <button type="submit" name="dangnhap"> Login</button>
            <button type="submit" name="dangky"> <a href="signup.php">Sign Up</a></button>
        </form>
    </div>
</body>
</html>


    