<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');

if(!isset($_GET['action'])){
	$data = getUser($conn);


	require_once('view.php');


}if(isset($_GET['action'])){


}
?>