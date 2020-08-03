<?php
date_default_timezone_set("Asia/Bangkok");
// insertData($conn);

function getLogin(mysqli $conn,$user_name,$password){

	$user_name = mysqli_real_escape_string($conn,$user_name);
	$password = mysqli_real_escape_string($conn, $password);

	$sql = "SELECT * FROM user 
	WHERE code = '$user_name' 
	AND password = '$password' ";
	echo "$sql";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data;
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data = $row;
		}
		$result->close();
		return $data;
	}
}

function insertUserData(mysqli $conn,$data=[]){
	$sql = "INSERT INTO user ( 
	name,
	lasname,
	email,
	password,
	phone,
	local,
	code,
	dateadd
)
VALUES ('".
$data['name']."','".
$data['lasname']."','".
$data['email']."','".
$data['password']."','".
$data['phone']."','".
$data['local']."','".
$data['code']."',
NOW() 
)";
if ( mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}

mysqli_close($conn);
}
function getuser(mysqli $conn){
	$sql = "SELECT * FROM user WhERE layer = 'user'";
	// echo($sql);
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data=[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getemployees(mysqli $conn){
	$sql = "SELECT * FROM user WhERE layer = 'Employees'";
	echo($sql);
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data=[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getbranch(mysqli $conn){
	$sql = "SELECT * FROM branch WhERE 1";
	// echo($sql);
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data=[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getuserByid(mysqli $conn,$id){
	$sql = "SELECT * FROM user WhERE user_code = '$id'";
	// echo($sql);
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data=[];
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function updateuser(mysqli $conn,$id,$branch,$layer){
	$sql = "UPDATE user SET branch = '$branch',layer = '$layer' WhERE user_code = '$id'";
	// echo($sql);
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
}
?>