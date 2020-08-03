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
if($_GET['action']=="employees"){
	$employees=getemployees($conn);
	$branch=getbranch($conn);
	?><pre><?php print_r($employees); ?></pre>
	<?php
	require_once('employees.php');
}

if($_GET['action']=="edituser"){
	$user=getuserByid($conn,$_GET['id']);
	require_once('edituser.php');
}
if($_GET['action']=="approve"){
	print_r($_GET);
	$res=updateuser($conn,$_GET['id'],$_GET['branch'],$_GET['layer']);
	if($res){
		?>
		<script> 
			window.location = "index.php?app=admin&action=user";
		</script>
		<?php
	}else{
		?> 
		<script>
			window.location = "index.php?app=admin&action=user";
		</script>
		<?php
	}
}
?>