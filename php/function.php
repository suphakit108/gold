<?php
date_default_timezone_set("Asia/Bangkok");
// insertData($conn);

function getLogin(mysqli $conn,$user_name,$password){

	$user_name = mysqli_real_escape_string($conn,$user_name);
	$password = mysqli_real_escape_string($conn, $password);

	$sql = "SELECT * FROM user 
	WHERE name = '$user_name' 
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

function getUserById(mysqli $conn,$id){
	$sql = "SELECT * FROM tb_user WhERE user_id = '$id' AND del = 0";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data;
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data = $row;
		}
		$result->close();
		return $data;
	}
}
function getUser(mysqli $conn){
	$sql = "SELECT * FROM tb_user WHERE 1 AND del = 0";

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function delUserById(mysqli $conn,$id){

	$sql ="UPDATE tb_user SET del = '1' WHERE user_id = '$id'" 
	;

  // echo $sql;
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

}

function insertUserData(mysqli $conn,$data=[]){
	$sql = "INSERT INTO tb_user ( 
	user_name,
	user_password,
	user_firstname,
	user_lastname,
	user_tel,
	user_email,
	user_facebook,
	user_line,
	user_address,
	date_add

)
VALUES ('".
$data['user_username']."','".
$data['user_password']."','".
$data['user_firstname']."','".
$data['user_lastname']."','".
$data['user_phone']."','".
$data['user_email']."','".
$data['user_facebook']."','".
$data['user_line']."','".
$data['user_address']."',
NOW()
)";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}

mysqli_close($conn);
}

function updateUser(mysqli $conn,$data=[],$id){
	$sql = "UPDATE tb_user SET 
	user_name = '".$data['user_username']."',
	user_password ='".$data['user_password']."',
	user_firstname = '".$data['user_firstname']."',
	user_lastname = '".$data['user_lastname']."',
	user_tel = '".$data['user_phone']."',
	user_email = '".$data['user_email']."',
	user_facebook = '".$data['user_facebook']."',
	user_line = '".$data['user_line']."',
	user_address = '".$data['user_address']."',
	last_update = NOW() 
	WHERE user_id = '$id' ";

	echo "$sql";
	if (mysqli_query($conn, $sql)) {
		echo "New record update successfully";
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
function insertData(mysqli $conn,$data=[]){
	$sql = "INSERT INTO tb_form (location,
	drop_1,
	drop_2,
	drop_3,
	drop_4,
	input_1,
	input_2,
	input_3,
	input_4,
	input_5,
	input_6,
	input_7,
	input_8,
	input_9,
	input_10,
	input_11,
	input_12,
	input_13,
	input_14,
	input_15,
	input_16,
	input_17,
	input_18,
	input_19,
	input_20,
	input_21,
	input_22,
	input_23,
	input_24,
	input_25,
	input_26,
	input_27,
	input_28,
	input_29,
	input_30,
	input_31,
	input_32,
	input_33,
	input_34,
	input_35,
	input_36,
	input_37,
	input_38,
	input_39,
	input_40,
	input_41,
	input_42,
	input_43,
	input_44,
	input_45,
	input_46,
	input_47,
	input_48,
	input_49,
	input_50,
	input_51,
	input_52,
	input_53,
	input_54,
	input_55,
	input_56,
	input_57,
	input_58,
	input_59,
	input_60,
	input_61,
	input_62,
	input_63,
	input_64,
	input_65,
	input_66,
	input_67,
	input_68,
	input_69,
	input_70,
	input_71,
	input_72,
	input_73,
	input_74,
	input_75,
	input_76,
	input_77,
	input_78,
	input_79,
	input_80,
	input_81,
	input_82,
	input_83,
	input_84,
	input_85,
	input_86,
	input_87,
	input_88,
	input_89,
	input_90,
	date_add,
	form_no
)
VALUES ('".$data['location']."',
'".$data['drop_1']."',
'".$data['drop_2']."',
'".$data['drop_3']."',
'".$data['drop_4']."',
'".$data['input_1']."',
'".$data['input_2']."',
'".$data['input_3']."',
'".$data['input_4']."',
'".$data['input_5']."',
'".$data['input_6']."',
'".$data['input_7']."',
'".$data['input_8']."',
'".$data['input_9']."',
'".$data['input_10']."',
'".$data['input_11']."',
'".$data['input_12']."',
'".$data['input_13']."',
'".$data['input_14']."',
'".$data['input_15']."',
'".$data['input_16']."',
'".$data['input_17']."',
'".$data['input_18']."',
'".$data['input_19']."',
'".$data['input_20']."',
'".$data['input_21']."',
'".$data['input_22']."',
'".$data['input_23']."',
'".$data['input_24']."',
'".$data['input_25']."',
'".$data['input_26']."',
'".$data['input_27']."',
'".$data['input_28']."',
'".$data['input_29']."',
'".$data['input_30']."',
'".$data['input_31']."',
'".$data['input_32']."',
'".$data['input_33']."',
'".$data['input_34']."',
'".$data['input_35']."',
'".$data['input_36']."',
'".$data['input_37']."',
'".$data['input_38']."',
'".$data['input_39']."',
'".$data['input_40']."',
'".$data['input_41']."',
'".$data['input_42']."',
'".$data['input_43']."',
'".$data['input_44']."',
'".$data['input_45']."',
'".$data['input_46']."',
'".$data['input_47']."',
'".$data['input_48']."',
'".$data['input_49']."',
'".$data['input_50']."',
'".$data['input_51']."',
'".$data['input_52']."',
'".$data['input_53']."',
'".$data['input_54']."',
'".$data['input_55']."',
'".$data['input_56']."',
'".$data['input_57']."',
'".$data['input_58']."',
'".$data['input_59']."',
'".$data['input_60']."',
'".$data['input_61']."',
'".$data['input_62']."',
'".$data['input_63']."',
'".$data['input_64']."',
'".$data['input_65']."',
'".$data['input_66']."',
'".$data['input_67']."',
'".$data['input_68']."',
'".$data['input_69']."',
'".$data['input_70']."',
'".$data['input_71']."',
'".$data['input_72']."',
'".$data['input_73']."',
'".$data['input_74']."',
'".$data['input_75']."',
'".$data['input_76']."',
'".$data['input_77']."',
'".$data['input_78']."',
'".$data['input_79']."',
'".$data['input_80']."',
'".$data['input_81']."',
'".$data['input_82']."',
'".$data['input_83']."',
'".$data['input_84']."',
'".$data['input_85']."',
'".$data['input_86']."',
'".$data['input_87']."',
'".$data['input_88']."',
'".$data['input_89']."',
'".$data['input_90']."',
NOW(),'".$data['form_no']."'
)";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}

mysqli_close($conn);
}

function getFormById(mysqli $conn,$id){
	$sql = "SELECT * FROM tb_form WhERE id = '$id'";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data;
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$data = $row;
		}
		$result->close();
		return $data;
	}
}

function getFormByNo(mysqli $conn,$form_no){
	$sql = "SELECT * FROM tb_form WHERE 1 AND form_no = '$form_no' AND del = 0";

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function getForm(mysqli $conn){
	$sql = "SELECT * FROM tb_form WHERE 1 AND rewrite = 0 AND del = 0";

	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function getFormChart(mysqli $conn,$pea_no){
	$sql = "SELECT * FROM tb_form as tb1
	WHERE 1 AND rewrite = 0 AND del = 0
	AND tb1.input_2 = '$pea_no' 
	";
	// AND STR_TO_DATE(tb1.input_87,'%d-%m-%Y') >= STR_TO_DATE( '$date_start','%d-%m-%Y') 
	// AND STR_TO_DATE(tb1.input_87,'%d-%m-%Y') <= STR_TO_DATE( '$date_end','%d-%m-%Y') 
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result)){
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}

function countNo(mysqli $conn){

	$sql ="SELECT LPAD(IFNULL(count(id),0) +1,5,'0') as num_cus 
	FROM `tb_form` "
	;

  // echo $sql;
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$result->close();
		return date("Y")."-".$row['num_cus'];
	}

}
function delFormById(mysqli $conn,$id){

	$sql ="UPDATE tb_form SET del = '1' WHERE id = '$id'" 
	;

  // echo $sql;
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

}

function updateRewrite(mysqli $conn,$id){

	$sql ="UPDATE tb_form SET rewrite = '1' WHERE id = '$id'" 
	;

  // echo $sql;
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

function insertDataRewrite(mysqli $conn,$data=[]){
	$sql = "INSERT INTO tb_form (rewrite_no,location,
	drop_1,
	drop_2,
	drop_3,
	drop_4,
	input_1,
	input_2,
	input_3,
	input_4,
	input_5,
	input_6,
	input_7,
	input_8,
	input_9,
	input_10,
	input_11,
	input_12,
	input_13,
	input_14,
	input_15,
	input_16,
	input_17,
	input_18,
	input_19,
	input_20,
	input_21,
	input_22,
	input_23,
	input_24,
	input_25,
	input_26,
	input_27,
	input_28,
	input_29,
	input_30,
	input_31,
	input_32,
	input_33,
	input_34,
	input_35,
	input_36,
	input_37,
	input_38,
	input_39,
	input_40,
	input_41,
	input_42,
	input_43,
	input_44,
	input_45,
	input_46,
	input_47,
	input_48,
	input_49,
	input_50,
	input_51,
	input_52,
	input_53,
	input_54,
	input_55,
	input_56,
	input_57,
	input_58,
	input_59,
	input_60,
	input_61,
	input_62,
	input_63,
	input_64,
	input_65,
	input_66,
	input_67,
	input_68,
	input_69,
	input_70,
	input_71,
	input_72,
	input_73,
	input_74,
	input_75,
	input_76,
	input_77,
	input_78,
	input_79,
	input_80,
	input_81,
	input_82,
	input_83,
	input_84,
	input_85,
	input_86,
	input_87,
	input_88,
	input_89,
	input_90,
	date_add,
	form_no
)
VALUES ('".$data['rewrite_no']."',
'".$data['location']."',
'".$data['drop_1']."',
'".$data['drop_2']."',
'".$data['drop_3']."',
'".$data['drop_4']."',
'".$data['input_1']."',
'".$data['input_2']."',
'".$data['input_3']."',
'".$data['input_4']."',
'".$data['input_5']."',
'".$data['input_6']."',
'".$data['input_7']."',
'".$data['input_8']."',
'".$data['input_9']."',
'".$data['input_10']."',
'".$data['input_11']."',
'".$data['input_12']."',
'".$data['input_13']."',
'".$data['input_14']."',
'".$data['input_15']."',
'".$data['input_16']."',
'".$data['input_17']."',
'".$data['input_18']."',
'".$data['input_19']."',
'".$data['input_20']."',
'".$data['input_21']."',
'".$data['input_22']."',
'".$data['input_23']."',
'".$data['input_24']."',
'".$data['input_25']."',
'".$data['input_26']."',
'".$data['input_27']."',
'".$data['input_28']."',
'".$data['input_29']."',
'".$data['input_30']."',
'".$data['input_31']."',
'".$data['input_32']."',
'".$data['input_33']."',
'".$data['input_34']."',
'".$data['input_35']."',
'".$data['input_36']."',
'".$data['input_37']."',
'".$data['input_38']."',
'".$data['input_39']."',
'".$data['input_40']."',
'".$data['input_41']."',
'".$data['input_42']."',
'".$data['input_43']."',
'".$data['input_44']."',
'".$data['input_45']."',
'".$data['input_46']."',
'".$data['input_47']."',
'".$data['input_48']."',
'".$data['input_49']."',
'".$data['input_50']."',
'".$data['input_51']."',
'".$data['input_52']."',
'".$data['input_53']."',
'".$data['input_54']."',
'".$data['input_55']."',
'".$data['input_56']."',
'".$data['input_57']."',
'".$data['input_58']."',
'".$data['input_59']."',
'".$data['input_60']."',
'".$data['input_61']."',
'".$data['input_62']."',
'".$data['input_63']."',
'".$data['input_64']."',
'".$data['input_65']."',
'".$data['input_66']."',
'".$data['input_67']."',
'".$data['input_68']."',
'".$data['input_69']."',
'".$data['input_70']."',
'".$data['input_71']."',
'".$data['input_72']."',
'".$data['input_73']."',
'".$data['input_74']."',
'".$data['input_75']."',
'".$data['input_76']."',
'".$data['input_77']."',
'".$data['input_78']."',
'".$data['input_79']."',
'".$data['input_80']."',
'".$data['input_81']."',
'".$data['input_82']."',
'".$data['input_83']."',
'".$data['input_84']."',
'".$data['input_85']."',
'".$data['input_86']."',
'".$data['input_87']."',
'".$data['input_88']."',
'".$data['input_89']."',
'".$data['input_90']."',
NOW(),'".$data['form_no']."'
)";

// echo "$sql";
if (mysqli_query($conn, $sql)) {
	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}

mysqli_close($conn);
}

?>