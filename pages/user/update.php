<!DOCTYPE html>
<html lang="en">

<body>
	<script type="text/javascript">



		$( document ).ready(function() {

		});
	</script>>
	<div id="wrapper">


		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">จัดการผู้ใช้งาน</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<form action="index.php?app=user&action=edit&id=<? echo $_GET['id']?>" method="post" >
					<!-- /.row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									เพิ่มผู้ใช้งาน
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-12">

											<div class="row">
												<div class="col-lg-12">
													<div class="row">
														<div class="col-lg-2">
															<div class="form-group">
																<label>username <font color="#F00"><b>*</b></font></label>
																<input id="user_username" name="user_username" class="form-control" autocomplete="off" required value="<?php echo $data['user_name']?>">
															</div>
														</div>
														<div class="col-lg-2">
															<div class="form-group">
																<label>password <font color="#F00"><b>*</b></font></label>
																<input type="password" id="user_password" name="user_password" class="form-control" autocomplete="off" required value="<?php echo $data['user_password']?>">
															</div>
														</div>

														<div class="col-lg-2">
															<div class="form-group">
																<label>ชื่อ <font color="#F00"><b>*</b></font></label>
																<input id="user_firstname" name="user_firstname" class="form-control" autocomplete="off" required value="<?php echo $data['user_firstname']?>">
															</div>
														</div>
														<div class="col-lg-2">
															<div class="form-group">
																<label>นามสกุล <font color="#F00"><b>*</b></font></label>
																<input id="user_lastname" name="user_lastname" class="form-control" autocomplete="off" required value="<?php echo $data['user_lastname']?>">
															</div>
														</div>
														<div class="col-lg-4">
															<div class="form-group">
																<label>เบอร์โทรศัพท์  <font color="#F00"><b>*</b></font></label>
																<input id="user_phone" name="user_phone"  type="tel" required    class="form-control" autocomplete="off" required value="<?php echo $data['user_tel']?>">
															</div>
														</div>
														<div class="col-lg-4">
															<div class="form-group">
																<label>ที่อยู่อีเมล</label>
																<input id="user_email" name="user_email" class="form-control" autocomplete="off" value="<?php echo $data['user_email']?>">
															</div>
														</div>
														<div class="col-lg-4">
															<div class="form-group">
																<label>FACEBOOK URL </label>
																<input id="user_facebook" name="user_facebook" class="form-control" autocomplete="off" value="<?php echo $data['user_facebook']?>">
															</div>
														</div>
														<div class="col-lg-4">
															<div class="form-group">
																<label>LINE ID </label>
																<input id="user_line" name="user_line" class="form-control" autocomplete="off" value="<?php echo $data['user_line']?>">
															</div>
														</div>
													</div>
												</div>
												<!-- /.col-lg-9 (nested) -->


												<div class="col-lg-12">
													<div class="form-group">
														<label>ที่อยู่ <font color="#F00"><b>*</b></font> </label>
														<textarea type="text" id="user_address" name="user_address" class="form-control"><?php echo $data['user_address']?></textarea>
														<p class="help-block">Example : 271/55.</p>
													</div>
												</div>

											</div>
											<!-- /.row (nested) -->




											<div align="right">
												<button type="submit" class="btn btn-success btn-lg">บันทึก</button>
												<button type="reset" class="btn btn-default btn-lg">รีเซ็ต</button>
											</div>
										</form>
									</div>
									<!-- /.col-lg-12 (nested) -->
								</div>
								<!-- /.row (nested) -->
							</div>
							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
			</form>
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
