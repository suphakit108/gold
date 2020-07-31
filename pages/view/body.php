<?php
if($_GET['app']==""){
	?><PRE><?php print_r($_SESSION); ?></PRE> <?php
}
if($_GET['app'] == 'form'){
	require_once("form/index.php");
}
if($_GET['app'] == 'user'){
	require_once("user/index.php");
}
if($_GET['app'] == 'chart'){
	require_once("chart/index.php");
}
if($_GET['app'] == 'admin'){
	require_once("admin/index.php");
}

?>
