<?php
    include_once 'dbConnection.php';
    session_start();
    if(!(isset($_SESSION['email']))){
        // header("location:index.php");
        header("location:$ref?w=Sai tài khoản hoặc mật khẩu");
    }
    else
    {

        $name = $_SESSION['name'];
        $email=$_SESSION['email'];


        echo '<span class="pull-right top title1" ><span class="log1">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Xin chào,</span> 
            <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;
            <a href="logout.php?q=index.php" class="log">
            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Đăng xuất</button></a></span>';
    }
?>