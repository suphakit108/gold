
<div id="page-wrapper">


	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">รายการบำรุงรักษา</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						รายการบำรุงรักษา
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="dataTables-example"  class="dataTables-example">
								<thead>
									<tr >
										<th>#</th>
										<th>No</th>
										<th>PEA NO.</th>
										<th>SERIAL NO.</th>
										<th>สถานที่</th>
										<th>วันที่เพิ่ม</th>
										<th>จัดการ</th>

									</tr>
								</thead>
								<tbody>
									<?php 
									for($i=0; $i < count($data); $i++){
										?>
										<tr class="odd gradeX">

											<?php
											$form_name = $data[$i]['form_no'];
											if($data[$i]['rewrite_no'] != 0){
												$form_name = $data[$i]['form_no'].'-RE-'.$data[$i]['rewrite_no'];
											}
											?>
											<td><?php echo $i+1; ?></td>
											<td><?php echo $form_name; ?></td>
											<td><?php echo $data[$i]['input_2']; ?></td>
											<td><?php echo $data[$i]['input_3']; ?></td>
											<td><?php echo $data[$i]['location']; ?></td>
											<td><?php echo $data[$i]['date_add']; ?></td>
											<td align="center">    
												<a style="font-size: 20px;" href="?app=form&action=update&id=<?php echo $data[$i]['id'];?>">
													<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
												</a> 
												<a target="_blank" style="font-size: 20px;" href="?app=form&action=view_chart&id=<?php echo $data[$i]['id'];?>">
													<i class="fa fa-bar-chart" aria-hidden="true"></i>
												</a> 
												<a target="_blank"  href="../prints/form_print.php?id=<?php echo $data[$i]['id'];?>&type=PDF"  style=" font-size: 20px;">
													<i class="fa fa-search" aria-hidden="true"></i>
												</a>
												<a target="_blank"  href="../prints/form_print.php?id=<?php echo $data[$i]['id'];?>&type=DOWNLOAD"  style=" font-size: 20px;">
													<i class="fa fa-download" aria-hidden="true"></i>
												</a>
												<a style="font-size: 20px;" href="?app=form&action=view_rewrite&id=<?php echo $data[$i]['form_no'];?>">
													<i class="fa fa-list-ol" aria-hidden="true"></i>
												</a> 
												<a  href="?app=form&action=delete&id=<?php echo $data[$i]['id'];?>" onclick="return confirm('You want to delete form : <?php echo $data[$i]['form_no']; ?>');" style="color:red; font-size: 20px;">
													<i class="fa fa-times" aria-hidden="true"></i>
												</a>
											</td>

										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<!-- /.table-responsive -->

					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

