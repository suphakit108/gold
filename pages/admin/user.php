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
								<select name="cars" id="cars">
									<option>เลือกสาขา</option>
									<?php 
									for($j=0; $j < count($branch); $j++){
										?>
										<option value="<?php echo $branch[$j]['local']; ?>"><?php echo $branch[$j]['branch_name']; ?></option>
									<?php }?>
								</select>
								<select name="cars" id="cars">
									<option>ตั้งสิทธิ์การเข้าถึง</option>
									<option value="Admin">Admin</option>
									<option value="Employees">Employees</option>
								</select>
								<a href="#">อนุมัติ </a>

							</td>
							<td style="text-align: center;"  > <a href="index.php?app=admin&action=edituser&id=<?php echo $user[$i]['user_code']; ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> จัดการ</a> <a href="index.php?app=admin&action=deluser&id=<?php echo $company[$i]['company_code']; ?>"> <i class="fa fa-trash-o" aria-hidden="true"></i> ลบ </a> </td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
