<?php
error_reporting(0);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');

if(!isset($_GET['action'])){
	$data = getForm($conn);


	require_once('view.php');


}if(isset($_GET['action'])){
	if($_GET['action'] == 'view_rewrite'){

		$data = getFormByNo($conn,$_GET['id']);
		require_once('view_rewrite.php');

	}
	if($_GET['action'] == 'insert'){


		require_once('insert.php');

	}
	if($_GET['action'] == 'delete'){

		$res = delFormById($conn,$_GET['id']);
		if($res){
			?>

			<script>
				alert('ลบเรียบร้อย');
				window.location = "index.php?app=form"
			</script>
			<?php

		}else{
			?>

			<script>
				alert('เกิดข้อผิดพลาดกรุณาลองใหม่');
				window.location = "index.php?app=form"
			</script>
			<?php
		}
	}

	if($_GET['action'] == 'update'){

		$data = getFormById($conn,$_GET['id']);
	// echo $_GET['id'];
		// print_r($data);
		require_once('update.php');

	}

	if($_GET['action'] == 'view_chart'){
		$data = getFormById($conn,$_GET['id']);

		require_once('view_chart.php');
	}
	if($_GET['action'] == 'add'){
		$data['drop_1'] = $_POST['drop_1'];
		$data['drop_2'] = $_POST['drop_2'];
		$data['drop_3'] = $_POST['drop_3'];
		$data['drop_4'] = $_POST['drop_4'];
		$data['location'] = $_POST['location'];
		$data['input_1'] = $_POST['input_1'];
		$data['input_2'] = $_POST['input_2'];
		$data['input_3'] = $_POST['input_3'];
		$data['input_4'] = $_POST['input_4'];
		$data['input_5'] = $_POST['input_5'];
		$data['input_6'] = $_POST['input_6'];
		$data['input_7'] = $_POST['input_7'];
		$data['input_8'] = $_POST['input_8'];
		$data['input_9'] = $_POST['input_9'];
		$data['input_10'] = $_POST['input_10'];
		$data['input_11'] = $_POST['input_11'];
		$data['input_12'] = $_POST['input_12'];
		$data['input_13'] = $_POST['input_13'];
		$data['input_14'] = $_POST['input_14'];
		$data['input_15'] = $_POST['input_15'];
		$data['input_16'] = $_POST['input_16'];
		$data['input_17'] = $_POST['input_17'];
		$data['input_18'] = $_POST['input_18'];
		$data['input_19'] = $_POST['input_19'];
		$data['input_20'] = $_POST['input_20'];
		$data['input_21'] = $_POST['input_21'];
		$data['input_22'] = $_POST['input_22'];
		$data['input_23'] = $_POST['input_23'];
		$data['input_24'] = $_POST['input_24'];
		$data['input_25'] = $_POST['input_25'];
		$data['input_26'] = $_POST['input_26'];
		$data['input_27'] = $_POST['input_27'];
		$data['input_28'] = $_POST['input_28'];
		$data['input_29'] = $_POST['input_29'];
		$data['input_30'] = $_POST['input_30'];
		$data['input_31'] = $_POST['input_31'];
		$data['input_32'] = $_POST['input_32'];
		$data['input_33'] = $_POST['input_33'];
		$data['input_34'] = $_POST['input_34'];
		$data['input_35'] = $_POST['input_35'];
		$data['input_36'] = $_POST['input_36'];
		$data['input_37'] = $_POST['input_37'];
		$data['input_38'] = $_POST['input_38'];
		$data['input_39'] = $_POST['input_39'];
		$data['input_40'] = $_POST['input_40'];
		$data['input_41'] = $_POST['input_41'];
		$data['input_42'] = $_POST['input_42'];
		$data['input_43'] = $_POST['input_43'];
		$data['input_44'] = $_POST['input_44'];
		$data['input_45'] = $_POST['input_45'];
		$data['input_46'] = $_POST['input_46'];
		$data['input_47'] = $_POST['input_47'];
		$data['input_48'] = $_POST['input_48'];
		$data['input_49'] = $_POST['input_49'];
		$data['input_50'] = $_POST['input_50'];
		$data['input_51'] = $_POST['input_51'];
		$data['input_52'] = $_POST['input_52'];
		$data['input_53'] = $_POST['input_53'];
		$data['input_54'] = $_POST['input_54'];
		$data['input_55'] = $_POST['input_55'];
		$data['input_56'] = $_POST['input_56'];
		$data['input_57'] = $_POST['input_57'];
		$data['input_58'] = $_POST['input_58'];
		$data['input_59'] = $_POST['input_59'];
		$data['input_60'] = $_POST['input_60'];
		$data['input_61'] = $_POST['input_61'];
		$data['input_62'] = $_POST['input_62'];
		$data['input_63'] = $_POST['input_63'];
		$data['input_64'] = $_POST['input_64'];
		$data['input_65'] = $_POST['input_65'];
		$data['input_66'] = $_POST['input_66'];
		$data['input_67'] = $_POST['input_67'];
		$data['input_68'] = $_POST['input_68'];
		$data['input_69'] = $_POST['input_69'];
		$data['input_70'] = $_POST['input_70'];
		$data['input_71'] = $_POST['input_71'];
		$data['input_72'] = $_POST['input_72'];
		$data['input_73'] = $_POST['input_73'];
		$data['input_74'] = $_POST['input_74'];
		$data['input_75'] = $_POST['input_75'];
		$data['input_76'] = $_POST['input_76'];
		$data['input_77'] = $_POST['input_77'];
		$data['input_78'] = $_POST['input_78'];
		$data['input_79'] = $_POST['input_79'];
		$data['input_80'] = $_POST['input_80'];
		$data['input_81'] = $_POST['input_81'];
		$data['input_82'] = $_POST['input_82'];
		$data['input_83'] = $_POST['input_83'];
		$data['input_84'] = $_POST['input_84'];
		$data['input_85'] = $_POST['input_85'];
		$data['input_86'] = $_POST['input_86'];
		$data['input_87'] = $_POST['input_87'];
		$data['input_88'] = $_POST['input_88'];
		$data['input_89'] = $_POST['input_89'];
		$data['input_90'] = $_POST['input_90'];
		$data['form_no'] = countNo($conn);

		$res =insertData($conn,$data);
		if($res){
			?>

			<script>
				alert('เพิ่มรียบร้อย');
				window.location = "index.php?app=form"
			</script>
			<?php

		}else{
			?>

			<script>
				alert('เกิดข้อผิดพลาดกรุณาลองใหม่');
				window.location = "index.php?app=form"
			</script>
			<?php
		}
	}

	if($_GET['action'] == 'rewrite'){

		$data['rewrite_no'] = $_POST['rewrite_no'];
		$data['drop_1'] = $_POST['drop_1'];
		$data['drop_2'] = $_POST['drop_2'];
		$data['drop_3'] = $_POST['drop_3'];
		$data['drop_4'] = $_POST['drop_4'];
		$data['location'] = $_POST['location'];
		$data['input_1'] = $_POST['input_1'];
		$data['input_2'] = $_POST['input_2'];
		$data['input_3'] = $_POST['input_3'];
		$data['input_4'] = $_POST['input_4'];
		$data['input_5'] = $_POST['input_5'];
		$data['input_6'] = $_POST['input_6'];
		$data['input_7'] = $_POST['input_7'];
		$data['input_8'] = $_POST['input_8'];
		$data['input_9'] = $_POST['input_9'];
		$data['input_10'] = $_POST['input_10'];
		$data['input_11'] = $_POST['input_11'];
		$data['input_12'] = $_POST['input_12'];
		$data['input_13'] = $_POST['input_13'];
		$data['input_14'] = $_POST['input_14'];
		$data['input_15'] = $_POST['input_15'];
		$data['input_16'] = $_POST['input_16'];
		$data['input_17'] = $_POST['input_17'];
		$data['input_18'] = $_POST['input_18'];
		$data['input_19'] = $_POST['input_19'];
		$data['input_20'] = $_POST['input_20'];
		$data['input_21'] = $_POST['input_21'];
		$data['input_22'] = $_POST['input_22'];
		$data['input_23'] = $_POST['input_23'];
		$data['input_24'] = $_POST['input_24'];
		$data['input_25'] = $_POST['input_25'];
		$data['input_26'] = $_POST['input_26'];
		$data['input_27'] = $_POST['input_27'];
		$data['input_28'] = $_POST['input_28'];
		$data['input_29'] = $_POST['input_29'];
		$data['input_30'] = $_POST['input_30'];
		$data['input_31'] = $_POST['input_31'];
		$data['input_32'] = $_POST['input_32'];
		$data['input_33'] = $_POST['input_33'];
		$data['input_34'] = $_POST['input_34'];
		$data['input_35'] = $_POST['input_35'];
		$data['input_36'] = $_POST['input_36'];
		$data['input_37'] = $_POST['input_37'];
		$data['input_38'] = $_POST['input_38'];
		$data['input_39'] = $_POST['input_39'];
		$data['input_40'] = $_POST['input_40'];
		$data['input_41'] = $_POST['input_41'];
		$data['input_42'] = $_POST['input_42'];
		$data['input_43'] = $_POST['input_43'];
		$data['input_44'] = $_POST['input_44'];
		$data['input_45'] = $_POST['input_45'];
		$data['input_46'] = $_POST['input_46'];
		$data['input_47'] = $_POST['input_47'];
		$data['input_48'] = $_POST['input_48'];
		$data['input_49'] = $_POST['input_49'];
		$data['input_50'] = $_POST['input_50'];
		$data['input_51'] = $_POST['input_51'];
		$data['input_52'] = $_POST['input_52'];
		$data['input_53'] = $_POST['input_53'];
		$data['input_54'] = $_POST['input_54'];
		$data['input_55'] = $_POST['input_55'];
		$data['input_56'] = $_POST['input_56'];
		$data['input_57'] = $_POST['input_57'];
		$data['input_58'] = $_POST['input_58'];
		$data['input_59'] = $_POST['input_59'];
		$data['input_60'] = $_POST['input_60'];
		$data['input_61'] = $_POST['input_61'];
		$data['input_62'] = $_POST['input_62'];
		$data['input_63'] = $_POST['input_63'];
		$data['input_64'] = $_POST['input_64'];
		$data['input_65'] = $_POST['input_65'];
		$data['input_66'] = $_POST['input_66'];
		$data['input_67'] = $_POST['input_67'];
		$data['input_68'] = $_POST['input_68'];
		$data['input_69'] = $_POST['input_69'];
		$data['input_70'] = $_POST['input_70'];
		$data['input_71'] = $_POST['input_71'];
		$data['input_72'] = $_POST['input_72'];
		$data['input_73'] = $_POST['input_73'];
		$data['input_74'] = $_POST['input_74'];
		$data['input_75'] = $_POST['input_75'];
		$data['input_76'] = $_POST['input_76'];
		$data['input_77'] = $_POST['input_77'];
		$data['input_78'] = $_POST['input_78'];
		$data['input_79'] = $_POST['input_79'];
		$data['input_80'] = $_POST['input_80'];
		$data['input_81'] = $_POST['input_81'];
		$data['input_82'] = $_POST['input_82'];
		$data['input_83'] = $_POST['input_83'];
		$data['input_84'] = $_POST['input_84'];
		$data['input_85'] = $_POST['input_85'];
		$data['input_86'] = $_POST['input_86'];
		$data['input_87'] = $_POST['input_87'];
		$data['input_88'] = $_POST['input_88'];
		$data['input_89'] = $_POST['input_89'];
		$data['input_90'] = $_POST['input_90'];
		$data['form_no'] = $_POST['form_no'];

		$res = insertDataRewrite($conn,$data);
		if($res){
			$res =	updateRewrite($conn,$_POST['old_id']);
			if($res){
				?>

				<script>
					alert('แก้ไขเรียบร้อย');
					window.location = "index.php?app=form"
				</script>
				<?php
			}
		}else{
			?>

			<script>
				alert('เกิดข้อผิดพลาดกรุณาลองใหม่');
				window.location = "index.php?app=form"
			</script>
			<?php
		}


	}
}
?>