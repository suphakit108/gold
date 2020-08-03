<?php
date_default_timezone_set("Asia/Bangkok");
session_start();
require_once('php/config.php');
require_once('php/function.php');
if($_POST['code'] != ""){
    print_r($_POST);
    $data['code'] = $_POST['code'];
    $data['name'] = $_POST['name'];
    $data['lasname'] = $_POST['lasname'];
    $data['phone'] = $_POST['phone'];
    $data['local'] = $_POST['local'];
    $data['email'] = $_POST['email'];
    $data['password'] = $_POST['password'];
    $res = insertUserData($conn,$data);
    session_start();
    // $_SESSION['user'] = $res; 
    print_r($_SESSION);
    if($res){
        ?>
        <script>
            window.location = "index.php";
        </script>
        <?php
    }else{
        ?> <script>
            alert('เกิดข้อผิดพลาดกรุณาลองใหม่');
        </script>
        <?php   
    }
}
else
{
    if(isset($_POST['username']) && isset($_POST['password'])){
        if($_POST['username'] != '' && $_POST['password'] != ''){

            $login_user = getLogin($conn,$_POST['username'],$_POST['password']);

            if($login_user['user_code'] > 0){
                $_SESSION['administrator_user'] = $login_user;
                header("Location: pages/index.php?app=admin");
            }else{

                echo "<script type='text/javascript'>alert('รหัสผ่านไม่ถูกต้อง'); window.location = 'view.php';</script>";
            }
        }else{
            header("Location index.php");
        }
    }else{
        header("Location index.php");
    }
}
?>