<div class="container">

	<br>
	<div class="row">
		<div class="col-sm-12">
			<h2 style="color: #1473e6">ขอสิทธ์การเข้าถึง</h2>
			<table id="myTable">
				<thead>
					<tr>
						<th style="text-align: center;" >ชื่อ</th>
						<th style="text-align: center;" >นามสกุล</th>
						<th style="text-align: center;">e-mail</th>
						<th style="text-align: center;">เบอร์โทร</th>
						<th style="text-align: center;">ที่อยู่</th>
						<th style="text-align: center;">การอนุมัติ</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					for($i=0; $i < count($user); $i++){
						?>
						<tr>
							<td style="text-align: center;" ><?php echo $user[$i]['name']; ?></td>
							<td style="text-align: center;" ><?php echo $user[$i]['lasname']; ?></td>
							<td style="text-align: center;" ><?php echo $user[$i]['email']; ?></td>
							<td style="text-align: center;" ><?php echo $user[$i]['phone']; ?></td>
							<td style="text-align: center;" ><?php echo $user[$i]['local']; ?></td>
							<td> 
								<select name="<?php echo ('branch'.($i+1)); ?>" id="<?php echo ('branch'.($i+1)); ?>" onchange="Setup()">
									<option >เลือกสาขา</option>
									<?php 
									for($j=0; $j < count($branch); $j++){
										?>
										<option value="<?php echo $branch[$j]['branch_name']; ?>"><?php echo $branch[$j]['branch_name']; ?></option>
									<?php }?>
								</select>
								<select name="<?php echo ('layer'.($i+1)); ?>" id="<?php echo ('layer'.($i+1)); ?>"  onchange="Setup()">
									<option >ตั้งสิทธิ์การเข้าถึง</option>
									<option value="admin">Admin</option>
									<option value="Employees">Employees</option>
								</select>
								<a href="#" id = "<?php echo ('approve'.($i+1)); ?>" onclick = "Send()">อนุมัติ </a>

							</td>
							<td style="text-align: center;"  > <a href="index.php?app=admin&action=edituser&id=<?php echo $user[$i]['user_code']; ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> จัดการ</a> <a href="index.php?app=admin&action=deluser&id=<?php echo $company[$i]['company_code']; ?>"> <i class="fa fa-trash-o" aria-hidden="true"></i> ลบ </a> </td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		Setup();
	});
	function Setup() {
		<?php for ($i=0; $i < count($user); $i++) {?> 
			var  value=document.getElementById("<?php echo ('branch'.($i+1)); ?>").value;
			var  value1=document.getElementById("<?php echo ('layer'.($i+1)); ?>").value;
			console.log(value);
			if( value != "เลือกสาขา" && value1 != "ตั้งสิทธิ์การเข้าถึง"){
				$("#<?php echo ('approve'.($i+1)); ?>").show();
			}else{
				$("#<?php echo ('approve'.($i+1)); ?>").hide();
			}

		<?php	} ?>		
	}
	function Send(){
		<?php for ($i=0; $i < count($user); $i++) {?> 
			var  value=document.getElementById("<?php echo ('branch'.($i+1)); ?>").value;
			var  value1=document.getElementById("<?php echo ('layer'.($i+1)); ?>").value;
			if( value != "เลือกสาขา" && value1 != "ตั้งสิทธิ์การเข้าถึง"){
				location.replace("index.php?app=admin&action=approve&id=<?php echo $user[$i]['user_code'];?>&branch="+value+"&layer="+value1);
			}
		<?php	} ?>	
	}
</script>