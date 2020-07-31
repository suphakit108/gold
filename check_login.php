<?php
date_default_timezone_set("Asia/Bangkok");
session_start();
require_once('php/config.php');
require_once('php/function.php');

if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] != '' && $_POST['password'] != ''){

        $login_user = getLogin($conn,$_POST['username'],$_POST['password']);
        
        if($login_user['user_code'] > 0){
            $_SESSION['administrator_user'] = $login_user;
            header("Location: pages/index.php");
        }else{
            $message = "wrong answer";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("Location: index.php?app=admin");
        }
    }else{
        header("Location index.php");
    }
}else{
    header("Location index.php");
}
?>