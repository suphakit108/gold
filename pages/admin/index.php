<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');

if(!isset($_GET['action'])){
	echo "ถึงเเล้ว"ว
	require_once('view.php');


}if(isset($_GET['action'])){

	if($_GET['action'] == 'insert'){


		require_once('insert.php');

	}
	if($_GET['action'] == 'delete'){

		$res = delUserById($conn,$_GET['id']);
		if($res){
			?>

			<script>
				alert('ลบเรียบร้อย');
				window.location = "index.php?app=user"
			</script>
			<?php

		}else{
			?>

			<script>
				alert('เกิดข้อผิดพลาดกรุณาลองใหม่');
				window.location = "index.php?app=user"
			</script>
			<?php
		}
	}

	if($_GET['action'] == 'update'){

		$data = getUserById($conn,$_GET['id']);
	// echo $_GET['id'];
	// print_r($data);
		require_once('update.php');

	}
	if($_GET['action'] == 'add'){

		$data['user_username'] = $_POST['user_username'];
		$data['user_password'] = $_POST['user_password'];
		$data['user_firstname'] = $_POST['user_firstname'];
		$data['user_lastname'] = $_POST['user_lastname'];
		$data['user_phone'] = $_POST['user_phone'];
		$data['user_email'] = $_POST['user_email'];
		$data['user_facebook'] = $_POST['user_facebook'];
		$data['user_line'] = $_POST['user_line'];
		$data['user_address'] = $_POST['user_address'];


		$res =insertUserData($conn,$data);
		if($res){
			?>

			<script>
				alert('เพิ่มเรียบร้อย');
				window.location = "index.php?app=user"
			</script>
			<?php

		}else{
			?>

			<script>
				alert('เกิดข้อผิดพลาดกรุณาลองใหม่');
				window.location = "index.php?app=user"
			</script>
			<?php
		}
	}

	if($_GET['action'] == 'edit'){
		$data['user_username'] = $_POST['user_username'];
		$data['user_password'] = $_POST['user_password'];
		$data['user_firstname'] = $_POST['user_firstname'];
		$data['user_lastname'] = $_POST['user_lastname'];
		$data['user_phone'] = $_POST['user_phone'];
		$data['user_email'] = $_POST['user_email'];
		$data['user_facebook'] = $_POST['user_facebook'];
		$data['user_line'] = $_POST['user_line'];
		$data['user_address'] = $_POST['user_address'];
		$res =	updateUser($conn,$data,$_GET['id']);
		if($res){


			?>

			<script>
				alert('แก้ไขเรียบร้อย');
				window.location = "index.php?app=user"
			</script>
			<?php
			
		}else{
			?>

			<script>
				alert('เกิดข้อผิดพลาดกรุณาลองใหม่');
				window.location = "index.php?app=user"
			</script>
			<?php
		}


	}
}
?>