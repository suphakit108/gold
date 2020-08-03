<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');

if(!isset($_GET['action'])){
	require_once('view.php');
}
if($_GET['action']=="user"){
	$user=getuser($conn);
	$branch=getbranch($conn);
	require_once('user.php');
}

if($_GET['action']=="edituser"){
	$user=getuserByid($conn,$_GET['id']);
	require_once('edituser.php');
}
?>