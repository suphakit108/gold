
<script type="text/javascript">

	function getAVG(){
		var standard = document.getElementById('drop_1').value;
		var val1 = document.getElementById('input_21').value;
		var val2 = document.getElementById('input_22').value;
		var val3 = document.getElementById('input_23').value;
		if(val1.length == 0){
			val1 = 0;
		}
		if(val2.length == 0 ){
			val2 = 0;
		}
		if(val3.length == 0 ){
			val3 = 0;
		}
		var sum = (parseFloat(val1)+parseFloat(val2)+parseFloat(val3))/3;
		document.getElementById('input_24').value = sum.toFixed(3);

		if(standard == 'IEC60296'){
			if(sum >= 30){
				document.getElementById('input_25').value = "ผ่าน";
			}
			if(sum >= 22 && sum <= 29){
				document.getElementById('input_25').value = "ควรทำการกรองน้ำมัน";
			}
			if(sum < 22){
				document.getElementById('input_25').value = "ควรเปลี่ยนน้ำมัน";

			}

		}
		else if (standard == 'ASTMD877'){
			if(sum >= 26){
				document.getElementById('input_25').value = "ผ่าน";
			}
			if(sum >= 22 && sum <= 25){
				document.getElementById('input_25').value = "ควรทำการกรองน้ำมัน";
			}
			if(sum < 22){
				document.getElementById('input_25').value = "ควรเปลี่ยนน้ำมัน";

			}
		}
		console.log('sss');
	}

	function getAVGAfter(){
		var standard = document.getElementById('drop_1').value;
		var val1 = document.getElementById('input_26').value;
		var val2 = document.getElementById('input_27').value;
		var val3 = document.getElementById('input_28').value;
		if(val1.length == 0){
			val1 = 0;
		}
		if(val2.length == 0 ){
			val2 = 0;
		}
		if(val3.length == 0 ){
			val3 = 0;
		}
		var sum = (parseFloat(val1)+parseFloat(val2)+parseFloat(val3))/3;
		document.getElementById('input_29').value = sum.toFixed(3);

		if(standard == 'IEC60296'){
			if(sum >= 30){
				document.getElementById('input_30').value = "ผ่าน";
			}
			if(sum >= 22 && sum <= 29){
				document.getElementById('input_30').value = "ควรทำการกรองน้ำมัน";
			}
			if(sum < 22){
				document.getElementById('input_30').value = "ควรเปลี่ยนน้ำมัน";

			}

		}
		else if (standard == 'ASTMD877'){
			if(sum >= 26){
				document.getElementById('input_30').value = "ผ่าน";
			}
			if(sum >= 22 && sum <= 25){
				document.getElementById('input_30').value = "ควรทำการกรองน้ำมัน";
			}
			if(sum < 22){
				document.getElementById('input_30').value = "ควรเปลี่ยนน้ำมัน";

			}
		}
	}

	function calculateGroundLow(){
		var val1 =  document.getElementById('input_40').value;
		if(val1.length == 0){
			val1 = 0;
		}

		if(val1 <= 5){
			document.getElementById('input_41').value = "ดีมาก";
		}
		if(val1 >= 6 && val1 <= 25){
			document.getElementById('input_41').value = "พอใช้";
		}
		if(val1 >= 26){
			document.getElementById('input_41').value = "ปรับปรุง";
		}
	}
	function calculateGroundHight(){
		var val1 =  document.getElementById('input_37').value;
		if(val1.length == 0){
			val1 = 0;
		}

		if(val1 <= 5){
			document.getElementById('input_38').value = "ดีมาก";
		}
		if(val1 >= 6 && val1 <= 25){
			document.getElementById('input_38').value = "พอใช้";
		}
		if(val1 >= 26){
			document.getElementById('input_38').value = "ปรับปรุง";
		}

	}




	function calculateGroundLowAfter(){
		var val1 =  document.getElementById('input_42').value;
		if(val1.length == 0){
			val1 = 0;
		}

		if(val1 <= 5){
			document.getElementById('input_90').value = "ดีมาก";
		}
		if(val1 >= 6 && val1 <= 25){
			document.getElementById('input_90').value = "พอใช้";
		}
		if(val1 >= 26){
			document.getElementById('input_90').value = "ปรับปรุง";
		}
	}
	function calculateGroundHightAfter(){
		var val1 =  document.getElementById('input_39').value;
		if(val1.length == 0){
			val1 = 0;
		}

		if(val1 <= 5){
			document.getElementById('input_89').value = "ดีมาก";
		}
		if(val1 >= 6 && val1 <= 25){
			document.getElementById('input_89').value = "พอใช้";
		}
		if(val1 >= 26){
			document.getElementById('input_89').value = "ปรับปรุง";
		}

	}


	function test(){
		var text_inp;
		var text;
		for(var i=1;i < 79; i++){

			text = "input_"+i;
			text_inp+= "'\".";
			text_inp += "$data['"+text+"']"+".\"'";
			text_inp += ",\n";
				// text_inp+= '".$data['input_1']."'+",\n" 'input_'+i+',';
				// $data['input_1'] = $_POST['input_1'];
				
			}
			console.log(text_inp);
		}



		function calculateDrop2(){
			var temp = document.getElementById('drop_2').value;
			var val = document.getElementById('input_31').value;

			if(temp == 20){
				if(val>= 1000){
					document.getElementById('input_32').value = "ผ่าน";
				}else{
					document.getElementById('input_32').value = "ไม่ผ่าน";
				}
			}
			if(temp == 30){
				if(val>= 500){
					document.getElementById('input_32').value = "ผ่าน";
				}else{
					document.getElementById('input_32').value = "ไม่ผ่าน";
				}
			}

			if(temp == 40){
				if(val>= 250){
					document.getElementById('input_32').value = "ผ่าน";
				}else{
					document.getElementById('input_32').value = "ไม่ผ่าน";
				}
			}

			if(temp == 50){
				if(val>= 125){
					document.getElementById('input_32').value = "ผ่าน";
				}else{
					document.getElementById('input_32').value = "ไม่ผ่าน";
				}
			}

			if(temp == 60){
				if(val>= 65){
					document.getElementById('input_32').value = "ผ่าน";
				}else{
					document.getElementById('input_32').value = "ไม่ผ่าน";
				}
			}
		}

		function calculateDrop3(){
			var temp = document.getElementById('drop_3').value;
			var val = document.getElementById('input_33').value;

			if(temp == 20){
				if(val>= 1000){
					document.getElementById('input_34').value = "ผ่าน";
				}else{
					document.getElementById('input_34').value = "ไม่ผ่าน";
				}
			}
			if(temp == 30){
				if(val>= 500){
					document.getElementById('input_34').value = "ผ่าน";
				}else{
					document.getElementById('input_34').value = "ไม่ผ่าน";
				}
			}

			if(temp == 40){
				if(val>= 250){
					document.getElementById('input_34').value = "ผ่าน";
				}else{
					document.getElementById('input_34').value = "ไม่ผ่าน";
				}
			}

			if(temp == 50){
				if(val>= 125){
					document.getElementById('input_34').value = "ผ่าน";
				}else{
					document.getElementById('input_34').value = "ไม่ผ่าน";
				}
			}

			if(temp == 60){
				if(val>= 65){
					document.getElementById('input_34').value = "ผ่าน";
				}else{
					document.getElementById('input_34').value = "ไม่ผ่าน";
				}
			}

		}

		function calculateDrop4(){
			var temp = document.getElementById('drop_4').value;
			var val = document.getElementById('input_35').value;

			if(temp == 20){
				if(val>= 1000){
					document.getElementById('input_36').value = "ผ่าน";
				}else{
					document.getElementById('input_36').value = "ไม่ผ่าน";
				}
			}
			if(temp == 30){
				if(val>= 500){
					document.getElementById('input_36').value = "ผ่าน";
				}else{
					document.getElementById('input_36').value = "ไม่ผ่าน";
				}
			}

			if(temp == 40){
				if(val>= 250){
					document.getElementById('input_36').value = "ผ่าน";
				}else{
					document.getElementById('input_36').value = "ไม่ผ่าน";
				}
			}

			if(temp == 50){
				if(val>= 125){
					document.getElementById('input_36').value = "ผ่าน";
				}else{
					document.getElementById('input_36').value = "ไม่ผ่าน";
				}
			}

			if(temp == 60){
				if(val>= 65){
					document.getElementById('input_36').value = "ผ่าน";
				}else{
					document.getElementById('input_36').value = "ไม่ผ่าน";
				}
			}

		}


		function calculateLoad(){
			var kva = document.getElementById('input_5').value;
			var phase_a =  document.getElementById('input_79').value;
			var phase_b =  document.getElementById('input_80').value;
			var phase_c =  document.getElementById('input_81').value;

			var i_a =  document.getElementById('input_82').value;
			var i_b =  document.getElementById('input_83').value;
			var i_c =  document.getElementById('input_84').value;
			kva = kva*1000;
			if(kva != '' && phase_a != '' && phase_b != '' && phase_c != ''){
				var max = Math.max(phase_a,phase_b,phase_c);
				var min = Math.min(phase_a,phase_b,phase_c);
				var balance = ((max-min)/max)*100;
				console.log(max);
				if(balance <=20){
					document.getElementById('input_86').value = 'BALANCE';

				}if(balance > 20){
					document.getElementById('input_86').value = 'UNBALANCE';

				}


			}

			if(kva != '' && phase_a != '' && phase_b != '' && phase_c != ''&& i_a != '' && i_b != '' && i_c != ''){

				var percent = (((phase_a*i_a)+(phase_b*i_b)+(phase_c*i_c))/kva)*100;



				document.getElementById('input_85').value= parseFloat(percent).toFixed(2);

			}
		}

		$( document ).ready(function() {
			calculateGroundHight();
			calculateGroundLow();
			calculateGroundHightAfter();
			calculateGroundLowAfter();
			getAVGAfter();
			getAVG();
		});
	</script>>
	<div id="wrapper">


		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">แก้ไขแบบฟอร์มการบำรุงรักษาหม้อแปลง</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<form action="index.php?app=form&action=rewrite" method="post" >
					<input  type="hidden" name="rewrite_no" value="<?php echo $data['rewrite_no']+1;?>">
					<input  type="hidden" name="old_id" value="<?php echo $_GET['id'];?>">
					<input  type="hidden" name="form_no" value="<?php echo $data['form_no'];?>">
					<!-- /.row -->
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									แก้ไขแบบฟอร์มบำรุงรักษาหม้อแปลง
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-12">
											<form role="form">

												<div class="row">
													<div class="col-lg-3">
														<div class="form-group">
															<label>สถานที่ติดตั้ง</label>
															<input class="form-control" name="location" value="<?php echo $data['location'];?>">
															<p class="help-block"></p>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>กฟฟ</label>
															<input class="form-control" name="input_1" value="<?php echo $data['input_1'];?>">
															<p class="help-block"></p>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>PEA NO</label>
															<input class="form-control" name="input_2" value="<?php echo $data['input_2'];?>">
															<p class="help-block"></p>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>SERIAL NO</label>
															<input class="form-control" name="input_3" value="<?php echo $data['input_3'];?>">
															<p class="help-block"></p>
														</div>
													</div>


												</div>
												<!-- /.row (nested) -->
												<div class="row">
													<div class="col-lg-3">
														<div class="form-group">
															<label>ผลิตภัณฑ์/ยี่ห้อ</label>
															<input class="form-control" name="input_4" value="<?php echo $data['input_4'];?>">
															<p class="help-block"></p>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>ขนาด</label>
															<input class="form-control" name="input_5" value="<?php echo $data['input_5'];?>" id="input_5" onkeyup="calculateLoad()">
															<p class="help-block">KVA</p>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>PHASE,VECTOR GROUP</label>
															<input class="form-control" name="input_6"  value="<?php echo $data['input_6'];?>">
															<p class="help-block"></p>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>ตำแหน่ง TAP</label>
															<input class="form-control" name="input_7" value="<?php echo $data['input_7'];?>">
															<p class="help-block"></p>
														</div>
													</div>


												</div>
												<!-- /.row (nested) -->



												<div class="row">
													<div class="col-lg-3">
														<div class="form-group">
															<label>พิกัดแรงสูง</label>
															<input class="form-control" name="input_8" value="<?php echo $data['input_8'];?>">
															<p class="help-block">VOLT</p>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>กระแส</label>
															<input class="form-control" name="input_9" value="<?php echo $data['input_9'];?>">
															<p class="help-block">AMP</p>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>พิกัดแรงต่ำ</label>
															<input class="form-control" name="input_10" value="<?php echo $data['input_10'];?>">
															<p class="help-block">VOLT</p>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>กระแส</label>
															<input class="form-control" name="input_11" value="<?php echo $data['input_11'];?>">
															<p class="help-block">AMP</p>
														</div>
													</div>         
												</div>
												<!-- /.row (nested) -->

												<div class="row">
													<div class="col-lg-2">
														<div class="form-group">
															<label>ขนาด FUSE แรงสูง เฟส A</label>
															<input class="form-control" name="input_12" value="<?php echo $data['input_12'];?>">
															<p class="help-block">AMP</p>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="form-group">
															<label>ขนาด FUSE แรงสูง เฟส B</label>
															<input class="form-control" name="input_13" value="<?php echo $data['input_13'];?>">
															<p class="help-block">AMP</p>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="form-group">
															<label>ขนาด FUSE แรงสูง เฟส C</label>
															<input class="form-control" name="input_14" value="<?php echo $data['input_14'];?>">
															<p class="help-block">AMP</p>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="form-group">
															<label>ขนาด FUSE แรงต่ำ เฟส A</label>
															<input class="form-control" name="input_15" value="<?php echo $data['input_15'];?>">
															<p class="help-block">AMP</p>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="form-group">
															<label>ขนาด FUSE แรงต่ำ เฟส B</label>
															<input class="form-control" name="input_16" value="<?php echo $data['input_16'];?>">
															<p class="help-block">AMP</p>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="form-group">
															<label>ขนาด FUSE แรงต่ำ เฟส C</label>
															<input class="form-control" name="input_17" value="<?php echo $data['input_17'];?>">
															<p class="help-block">AMP</p>
														</div>
													</div>

												</div>
												<!-- /.row (nested) -->


												<div class="row">
													<div class="col-lg-3">
														<div class="form-group">

															<div class="checkbox">
																<label>
																	<input type="checkbox" value="CONSERVATOR TYPE 3P" name="input_18" <?php if ($data['input_18'] != '') echo "checked"; ?>>CONSERVATOR TYPE 3P
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" value="CONSERVATOR TYPE 1P" name="input_19" <?php if ($data['input_19'] != '') echo "checked"; ?> >CONSERVATOR TYPE 1P
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" value="SEALED TYPE" name="input_20" <?php if ($data['input_20'] != '') echo "checked"; ?> >SEALED TYPE
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-9 col-sm-12 col-xs-12 ">
														<div class="col-lg-12">
															<div class="panel panel-default">
																<div class="panel-heading">
																	ตรวจสอบค่าทางเทคนิค
																</div>
																<!-- /.panel-heading -->
																<div class="panel-body">
																	<div class="table-responsive">
																		<table class="table">
																			<thead>
																				<tr>
																					<th>#</th>
																					<th>รายการ</th>
																					<th>ค่าที่วัดได้</th>
																					<th>หลังแก้ไข</th>
																				</tr>
																			</thead>
																			<tbody>
																				<tr>
																					<td>1</td>
																					<td>ความทันต่อแรงดันไฟฟ้าน้ำมันในหม้อแปลง
																						<div class="form-group">
																							<label>มาตรฐาน </label>
																							<select class="form-control" id="drop_1" name="drop_1" onchange="getAVG();getAVGAfter();">
																								<option <?php if ($data['drop_1'] == 'IEC60156') echo "selected"; ?>  value="IEC60156" >IEC60156</option>
																								<option <?php if ($data['drop_1'] == 'ASTMD877') echo "selected"; ?> value="ASTMD877">ASTMD877</option>
																							</select>
																						</div>
																					</td>
																					<td>      

																						<label>ครั้งที่ 1 </label>
																						<input class="form-control" id="input_21" name="input_21" onkeyup="getAVG();" value="<?php echo $data['input_21'];?>"> 
																						<p class="help-block">KV</p>
																						<label>ครั้งที่ 2 </label>
																						<input class="form-control" id="input_22" name="input_22" onkeyup="getAVG();" value="<?php echo $data['input_22'];?>">  
																						<p class="help-block">KV</p>
																						<label>ครั้งที่ 3 </label>
																						<input class="form-control" id="input_23" name="input_23" onkeyup="getAVG();" value="<?php echo $data['input_23'];?>">
																						<p class="help-block">KV</p>
																						<label>ค่าเฉลี่ย </label>
																						<input class="form-control" readonly="" placeholder="ค่าเฉลี่ย" id="input_24" name="input_24" value="<?php echo $data['input_24'];?>">
																						<p class="help-block">KV</p>
																						<label>ผลการทดสอบ </label>
																						<input class="form-control" readonly="" placeholder="ผ่าน" id="input_25" name="input_25" value="<?php echo $data['input_25'];?>"> 

																					</td>
																					<td>

																						<label>ครั้งที่ 1 </label>
																						<input class="form-control" onkeyup="getAVGAfter();" id="input_26" name="input_26"value="<?php echo $data['input_26'];?>"> 
																						<p class="help-block">KV</p>


																						<label>ครั้งที่ 2 </label>
																						<input class="form-control" onkeyup="getAVGAfter();" id="input_27" name="input_27"value="<?php echo $data['input_27'];?>">
																						<p class="help-block">KV</p>


																						<label>ครั้งที่ 3 </label>
																						<input class="form-control" onkeyup="getAVGAfter();" id="input_28" name="input_28"value="<?php echo $data['input_28'];?>">
																						<p class="help-block">KV</p>


																						<label>ค่าเฉลี่ย </label>
																						<input class="form-control" readonly="" placeholder="ค่าเฉลี่ย" id="input_29" name="input_29" value="<?php echo $data['input_29'];?>">   
																						<p class="help-block">KV</p>


																						<label>ผลการทดสอบ </label>
																						<input class="form-control" id="input_30" readonly="" name="input_30" value="<?php echo $data['input_30'];?>">

																					</td>
																				</tr>
																				<tr>
																					<td>2</td>
																					<td>ค่าฉนวณขดลวด P-G
																						<div class="form-group">
																							<label>อุณหภูมิ </label>
																							<select class="form-control" id="drop_2" name="drop_2" onchange="calculateDrop2();">
																								<option value="20" <?php if ($data['drop_2'] == '20') echo "selected"; ?> >20 C</option>
																								<option value="30" <?php if ($data['drop_2'] == '30') echo "selected"; ?> >30 C</option>
																								<option value="40" <?php if ($data['drop_2'] == '40') echo "selected"; ?> >40 C</option>
																								<option value="50" <?php if ($data['drop_2'] == '50') echo "selected"; ?>>50 C</option>
																								<option value="60" <?php if ($data['drop_2'] == '60') echo "selected"; ?> >60 C</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>ค่าที่วัดได้ </label>
																						<input class="form-control"  placeholder="" id="input_31" name="input_31" value="<?php echo $data['input_31'];?>" onkeyup="calculateDrop2();">    
																						<p class="help-block">เมกกะโอห์ม</p>
																						<label>ผลการทดสอบ </label>
																						<input class="form-control" readonly="" placeholder="ผ่าน" id="input_32" name="input_32" value="<?php echo $data['input_32'];?>"> 
																					</td>


																					<td>-</td>
																				</tr>
																				<tr>
																					<td>3</td>
																					<td>ค่าฉนวณขดลวด P-S

																						<div class="form-group">
																							<label>อุณหภูมิ </label>
																							<select class="form-control" id="drop_3" name="drop_3" onchange="calculateDrop3();">
																								<option value="20" <?php if ($data['drop_3'] == '20') echo "selected"; ?> >20 C</option>
																								<option value="30" <?php if ($data['drop_3'] == '30') echo "selected"; ?> >30 C</option>
																								<option value="40" <?php if ($data['drop_3'] == '40') echo "selected"; ?> >40 C</option>
																								<option value="50" <?php if ($data['drop_3'] == '50') echo "selected"; ?>>50 C</option>
																								<option value="60" <?php if ($data['drop_3'] == '60') echo "selected"; ?> >60 C</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>ค่าที่วัดได้ </label>
																						<input class="form-control"  placeholder="" id="input_33" name="input_33" value="<?php echo $data['input_33'];?>"  onkeyup="calculateDrop3();">    
																						<p class="help-block">เมกกะโอห์ม</p>
																						<label>ผลการทดสอบ </label>
																						<input class="form-control" readonly="" placeholder="ผ่าน" id="input_34" name="input_34" value="<?php echo $data['input_34'];?>">
																					</td>


																					<td>-</td>
																				</tr>

																				<tr>
																					<td>4</td>
																					<td>ค่าฉนวณขดลวด S-G

																						<div class="form-group">
																							<label>อุณหภูมิ </label>
																							<select class="form-control" id="drop_4" name="drop_4" onchange="calculateDrop4();">
																								<option value="20" <?php if ($data['drop_4'] == '20') echo "selected"; ?> >20 C</option>
																								<option value="30" <?php if ($data['drop_4'] == '30') echo "selected"; ?> >30 C</option>
																								<option value="40" <?php if ($data['drop_4'] == '40') echo "selected"; ?> >40 C</option>
																								<option value="50" <?php if ($data['drop_4'] == '50') echo "selected"; ?>>50 C</option>
																								<option value="60" <?php if ($data['drop_4'] == '60') echo "selected"; ?> >60 C</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>ค่าที่วัดได้ </label>
																						<input class="form-control"  placeholder="" id="input_35" name="input_35" onkeyup="calculateDrop4();" value="<?php echo $data['input_35'];?>">    
																						<p class="help-block">เมกกะโอห์ม</p>
																						<label>ผลการทดสอบ </label>
																						<input class="form-control" readonly="" placeholder="ผ่าน" id="input_36" name="input_36" value="<?php echo $data['input_36'];?>"> 
																					</td>


																					<td>-</td>
																				</tr>
																				<tr>
																					<td>5</td>
																					<td>ค่ากราวน์ต้นหม้อแปลงด้านแรงสูง</td>
																					<td>     
																						<label>ค่าที่วัดได้ </label>
																						<input class="form-control" onkeyup="calculateGroundHight();"  placeholder="" id="input_37" name="input_37" value="<?php echo $data['input_37'];?>">   
																						<p class="help-block">โอห์ม</p>
																						<label>ผลการทดสอบ </label>
																						<input class="form-control"  readonly="" placeholder="ผ่าน" id="input_38" name="input_38" value="<?php echo $data['input_38'];?>">
																					</td>
																					<td>        
																						<label>ค่าที่วัดได้ </label>
																						<input class="form-control" onkeyup="calculateGroundHightAfter();" placeholder="ค่าเฉลี่ย" name="input_39" id="input_39" value="<?php echo $data['input_39'];?>">    
																						<p class="help-block">โอห์ม</p>
																						<label>ผลการทดสอบ </label>
																						<input class="form-control" readonly="" placeholder="ผ่าน" id="input_89" name="input_89" value="<?php echo $data['input_89'];?>"> 
																					</td>
																				</tr>                  
																				<tr>
																					<td>6</td>
																					<td>ค่ากราวน์ต้นหม้อแปลงด้านแรงต่ำ</td>
																					<td>     
																						<label>ค่าที่วัดได้ </label>
																						<input class="form-control"  onkeyup="calculateGroundLow();"  placeholder="" id="input_40" name="input_40" value="<?php echo $data['input_40'];?>">   
																						<p class="help-block">โอห์ม</p>
																						<label>ผลการทดสอบ </label>
																						<input class="form-control" readonly="" placeholder="ผ่าน" id="input_41" name="input_41" value="<?php echo $data['input_41'];?>">
																					</td>


																					<td>        
																						<label>ค่าที่วัดได้ </label>
																						<input class="form-control" onkeyup="calculateGroundLowAfter();"  placeholder="ค่าเฉลี่ย" id="input_42" name="input_42" value="<?php echo $data['input_42'];?>">  
																						<p class="help-block">โอห์ม</p>
																						<label>ผลการทดสอบ </label>
																						<input class="form-control" readonly="" placeholder="ผ่าน" id="input_90" name="input_90" value="<?php echo $data['input_90'];?>"> 
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																	<!-- /.table-responsive -->
																</div>
																<!-- /.panel-body -->
															</div>
															<!-- /.panel -->
														</div>
													</div>
												</div>
												<div class="row">

													<div class="col-lg-12 col-sm-12 col-xs-12 ">
														<div class="col-lg-12">
															<div class="panel panel-default">
																<div class="panel-heading">
																	ตรวจสอบค่าทางเทคนิค
																</div>
																<!-- /.panel-heading -->
																<div class="panel-body">
																	<div class="table-responsive">
																		<table class="table">
																			<thead>
																				<tr>
																					<th>#</th>
																					<th>รายการ</th>
																					<th>สถานะ</th>
																					<th>หลังแก้ไข</th>
																				</tr>
																			</thead>
																			<tbody>
																				<tr>
																					<td>1</td>
																					<td>ตัวถังและครีบหม้อแปลง</td>
																					<td style="min-width: 150px;">      

																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_43">
																								<option value="ปกติ" <?php if ($data['input_43'] == 'ปกติ') echo "selected"; ?>>ปกติ</option>
																								<option value="ชำรุด" <?php if ($data['input_43'] == 'ชำรุด') echo "selected"; ?>>ชำรุด</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>การดำเนินการ </label>
																						<input class="form-control"  placeholder="" name="input_44"  value="<?php echo $data['input_44'];?>">    
																						<p class="help-block"></p>

																					</td>

																				</tr>
																				<tr>
																					<td>2</td>
																					<td>BUSHING แรงสูงและขั้วต่อ (CONNECTOR)</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_45">
																								<option value="ปกติ" <?php if ($data['input_45'] == 'ปกติ') echo "selected"; ?>>ปกติ</option>
																								<option value="ชำรุด" <?php if ($data['input_45'] == 'ชำรุด') echo "selected"; ?>>ชำรุด</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>การดำเนินการ </label>
																						<input class="form-control"  placeholder="" name="input_46" value="<?php echo $data['input_46'];?>">    
																						<p class="help-block"></p>
																					</td>
																				</tr>

																				<tr>
																					<td>3</td>
																					<td>BUSHING แรงต่ำและขั้วต่อ (CONNECTOR)</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_47">
																								<option value="ปกติ" <?php if ($data['input_47'] == 'ปกติ') echo "selected"; ?>>ปกติ</option>
																								<option value="ชำรุด" <?php if ($data['input_47'] == 'ชำรุด') echo "selected"; ?>>ชำรุด</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>การดำเนินการ </label>
																						<input class="form-control"  placeholder="" name="input_48" value="<?php echo $data['input_48'];?>">      
																						<p class="help-block"></p>
																					</td>
																				</tr>


																				<tr>
																					<td>4</td>
																					<td>TAP CHANGER</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_49">
																								<option value="ปกติ" <?php if ($data['input_49'] == 'ปกติ') echo "selected"; ?> >ปกติ</option>
																								<option value="ชำรุด" <?php if ($data['input_49'] == 'ชำรุด') echo "selected"; ?>>ชำรุด</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>การดำเนินการ </label>
																						<input class="form-control"  placeholder="" name="input_50" value="<?php echo $data['input_50'];?>"> 
																						<p class="help-block"></p>
																					</td>
																				</tr>

																				<tr>
																					<td>5</td>
																					<td>ARCING HORN</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_51">
																								<option value="ปกติ" <?php if ($data['input_51'] == 'ปกติ') echo "selected"; ?> >ปกติ</option>
																								<option value="ชำรุด" <?php if ($data['input_51'] == 'ชำรุด') echo "selected"; ?>>ชำรุด</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>การดำเนินการ </label>
																						<input class="form-control"  placeholder="" name="input_52" value="<?php echo $data['input_52'];?>">   
																						<p class="help-block"></p>
																					</td>
																				</tr>

																				<tr>
																					<td>6</td>
																					<td>ขั้วต่อสายดิน</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_53">
																								<option value="ปกติ" <?php if ($data['input_53'] == 'ปกติ') echo "selected"; ?>>ปกติ</option>
																								<option value="ชำรุด" <?php if ($data['input_53'] == 'ชำรุด') echo "selected"; ?>>ชำรุด</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>การดำเนินการ </label>
																						<input class="form-control"  placeholder="" name="input_54" value="<?php echo $data['input_54'];?>"> 
																						<p class="help-block"></p>
																					</td>
																				</tr>


																				<tr>
																					<td>7</td>
																					<td>ล่อฟ้าแรงสูง</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_55">
																								<option value="ปกติ" <?php if ($data['input_55'] == 'ปกติ') echo "selected"; ?> >ปกติ</option>
																								<option value="ชำรุด" <?php if ($data['input_55'] == 'ชำรุด') echo "selected"; ?>>ชำรุด</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>การดำเนินการ </label>
																						<input class="form-control"  placeholder="" name="input_56" value="<?php echo $data['input_56'];?>"> 
																						<p class="help-block"></p>
																					</td>
																				</tr>
																				<tr>
																					<td>8</td>
																					<td>ล่อฟ้าแรงต่ำ</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_57">
																								<option value="ปกติ" <?php if ($data['input_57'] == 'ปกติ') echo "selected"; ?> >ปกติ</option>
																								<option value="ชำรุด" <?php if ($data['input_57'] == 'ชำรุด') echo "selected"; ?>>ชำรุด</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>การดำเนินการ </label>
																						<input class="form-control"  placeholder="" name="input_58" value="<?php echo $data['input_58'];?>"> 
																						<p class="help-block"></p>
																					</td>
																				</tr>
																				<tr>
																					<td>9</td>
																					<td>DROP OUT FUSE CUT OUT และจุดต่อสาย</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_59">
																								<option value="ปกติ" <?php if ($data['input_59'] == 'ปกติ') echo "selected"; ?>>ปกติ</option>
																								<option value="ชำรุด" <?php if ($data['input_59'] == 'ชำรุด') echo "selected"; ?>>ชำรุด</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>การดำเนินการ </label>
																						<input class="form-control"  placeholder="" name="input_60" value="<?php echo $data['input_60'];?>"> 
																						<p class="help-block"></p>
																					</td>
																				</tr>

																				<tr>
																					<td>10</td>
																					<td>LT SW และจุดต่อสาย</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_61">
																								<option value="ปกติ" <?php if ($data['input_61'] == 'ปกติ') echo "selected"; ?> >ปกติ</option>
																								<option value="ชำรุด" <?php if ($data['input_61'] == 'ชำรุด') echo "selected"; ?>>ชำรุด</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>การดำเนินการ </label>
																						<input class="form-control"  placeholder="" name="input_62" value="<?php echo $data['input_62'];?>">    
																						<p class="help-block"></p>
																					</td>
																				</tr>

																				<tr>
																					<td>11</td>
																					<td>PG CONNECTOR</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_63">
																								<option value="ปกติ" <?php if ($data['input_63'] == 'ปกติ') echo "selected"; ?> >ปกติ</option>
																								<option value="ชำรุด" <?php if ($data['input_63'] == 'ชำรุด') echo "selected"; ?>>ชำรุด</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>การดำเนินการ </label>
																						<input class="form-control"  placeholder="" name="input_64" value="<?php echo $data['input_64'];?>">     
																						<p class="help-block"></p>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																	<!-- /.table-responsive -->
																</div>
																<!-- /.panel-body -->
															</div>
															<!-- /.panel -->
														</div>
													</div>

													<div class="col-lg-12 col-sm-12 col-xs-12 ">
														<div class="col-lg-12">
															<div class="panel panel-default">
																<div class="panel-heading">
																	ตรวจเปลี่ยนและเติมน้ำมัน
																</div>
																<!-- /.panel-heading -->
																<div class="panel-body">
																	<div class="table-responsive">
																		<table class="table">
																			<thead>
																				<tr>
																					<th>#</th>
																					<th>รายการ</th>
																					<th>สถานะ</th>
																					<th>หลังแก้ไข</th>
																				</tr>
																			</thead>
																			<tbody>
																				<tr>
																					<td>1</td>
																					<td>ระดับน้ำมันหล้อแปลงในถังอะไหล่</td>
																					<td style="min-width: 150px;">      

																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_65">

																								<option value="ปกติ" <?php if ($data['input_65'] == 'ปกติ') echo "selected"; ?>>ปกติ</option>
																								<option value="มากกว่าระดับ" <?php if ($data['input_65'] == 'มากกว่าระดับ') echo "selected"; ?> >มากกว่าระดับ</option>

																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>เติม </label>
																						<input class="form-control"  placeholder="" name="input_66" value="<?php echo $data['input_66'];?>">     
																						<p class="help-block">ลิตร</p>

																					</td>

																				</tr>
																				<tr>
																					<td>2</td>
																					<td>สภาพสารดูดความชื้น</td>
																					<td style="min-width: 150px;">      

																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_67">
																								<option value="ปกติ" <?php if ($data['input_67'] == 'ปกติ') echo "selected"; ?>>ปกติ
																								</option>
																								<option value="เสื่อมสภาพ" <?php if ($data['input_67'] == 'เสื่อมสภาพ') echo "selected"; ?>>เสื่อมสภาพ
																								</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>เปลี่ยนใหม่ </label>
																						<input class="form-control"  placeholder="" name="input_68"  value="<?php echo $data['input_68'];?>">     
																						<p class="help-block">ก.ก</p>

																					</td>

																				</tr>
																				<tr>
																					<td>3</td>
																					<td>สถาพปะเก็นและลูกยางต่างๆ</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_69">
																								<option value="ปกติ" <?php if ($data['input_69'] == 'ปกติ') echo "selected"; ?>>ปกติ
																								</option>
																								<option value="เสื่อมสภาพ" <?php if ($data['input_69'] == 'เสื่อมสภาพ') echo "selected"; ?>>เสื่อมสภาพ
																								</option>
																							</select>
																						</div>
																					</td>
																					<td>     

																						<div class="form-group">
																							<label>รายการเปลี่ยน </label>
																							<div class="checkbox">
																								<label>
																									<input type="checkbox" value="ประเก็น" name="input_70"  <?php if ($data['input_70'] != '') echo "checked"; ?> > ประเก็น
																								</label>
																							</div>
																							<div class="checkbox">
																								<label>
																									<input type="checkbox" value="ซีลยาง" name="input_71"  <?php if ($data['input_71'] != '') echo "checked"; ?> >ซีลยาง
																								</label>
																							</div>
																							<div class="checkbox">
																								<label>
																									<input type="checkbox" value="ยางฝาถัง" name="input_72"  <?php if ($data['input_72'] != '') echo "checked"; ?> >ยางฝาถัง
																								</label>
																							</div>
																						</div>
																					</td>
																				</tr>


																				<tr>
																					<td>4</td>
																					<td>หมายเลข PEA ของหม้อแปลง</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_73">
																								<option value="ชัดเจน" 
																								<?php if ($data['input_73'] == 'ชัดเจน') echo "selected"; ?> 
																								>ชัดเจน</option>
																								<option value="ลบเลือน"  
																								<?php if ($data['input_73'] == 'ลบเลือน') echo "selected"; ?>
																								>ลบเลือน</option>
																								<option value="อื่นๆ"  
																								<?php if ($data['input_73'] == 'อื่นๆ') echo "selected"; ?> 
																								>อื่นๆ</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>อื่นๆ โปรดระบุ </label>
																						<input class="form-control"  placeholder="" name="input_74"  value="<?php echo $data['input_74'];?>">    
																						<p class="help-block"></p>
																					</td>
																				</tr>

																				<tr>
																					<td>5</td>
																					<td>สภาพเสา/คาน ต้นติดตั้งหม้อแปลง</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_75">
																								<option value="ปกติ" 	<?php if ($data['input_75'] == 'ปกติ') echo "selected"; ?> >ปกติ</option>
																								<option value="คานทรุด" 	<?php if ($data['input_75'] == 'คานทรุด') echo "selected"; ?> >คานทรุด</option>
																								<option value="เสาเอน" 	<?php if ($data['input_75'] == 'เสาเอน') echo "selected"; ?> >เสาเอน</option>
																								<option value="อื่นๆ" 	<?php if ($data['input_75'] == 'อื่นๆ') echo "selected"; ?> >อื่นๆ</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>อื่นๆ โปรดระบุ </label>
																						<input class="form-control"  placeholder="" name="input_76"  value="<?php echo $data['input_76'];?>">
																						<p class="help-block"></p>
																					</td>
																				</tr>

																				<tr>
																					<td>6</td>
																					<td>ต้นไม้เถาวัลย์ เสาหม้อแปลงและบริเวณรอบๆ</td>
																					<td style="min-width: 150px;">      
																						<div class="form-group">
																							<label>สถานะ</label>
																							<select class="form-control" name="input_77">
																								<option value="โล่งเตียน" <?php if ($data['input_77'] == 'โล่งเตียน') echo "selected"; ?>>โล่งเตียน</option>
																								<option value="ตัดต้นไม้/เถาวัลย์" <?php if ($data['input_77'] == 'ตัดต้นไม้/เถาวัลย์') echo "selected"; ?>>ตัดต้นไม้/เถาวัลย์</option>
																								<option value="อื่นๆ" <?php if ($data['input_77'] == 'อื่นๆ') echo "selected"; ?>>อื่นๆ</option>
																							</select>
																						</div>
																					</td>
																					<td>     
																						<label>อื่นๆ โปรดระบุ </label>
																						<input class="form-control"  placeholder="" name="input_78"  value="<?php echo $data['input_78'];?>">
																						<p class="help-block"></p>
																					</td>
																				</tr>

																			</tbody>
																		</table>
																	</div>
																	<!-- /.table-responsive -->
																</div>
																<!-- /.panel-body -->
															</div>
															<!-- /.panel -->
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-2">
														<div class="form-group">
															<label>กระแส: เฟส A</label>
															<input class="form-control" name="input_79" value="<?php echo $data['input_79'];?>" id="input_79" onkeyup="calculateLoad()">
															<p class="help-block">AMP</p>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="form-group">
															<label>กระแส: เฟส B</label>
															<input class="form-control" name="input_80" value="<?php echo $data['input_80'];?>" id="input_80" onkeyup="calculateLoad()">
															<p class="help-block">AMP</p>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="form-group">
															<label>กระแส: เฟส C</label>
															<input class="form-control" name="input_81" value="<?php echo $data['input_81'];?>" id="input_81" onkeyup="calculateLoad()">
															<p class="help-block">AMP</p>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="form-group">
															<label>แรงดัน: A-N</label>
															<input class="form-control" name="input_82" value="<?php echo $data['input_82'];?>" id="input_82" onkeyup="calculateLoad();">
															<p class="help-block">VOLT</p>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="form-group">
															<label>แรงดัน: B-N</label>
															<input class="form-control" name="input_83" value="<?php echo $data['input_83'];?>" id="input_83" onkeyup="calculateLoad();">
															<p class="help-block">VOLT</p>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="form-group">
															<label>แรงดัน: C-N</label>
															<input class="form-control" name="input_84" value="<?php echo $data['input_84'];?>" id="input_84" onkeyup="calculateLoad();">
															<p class="help-block">VOLT</p>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-lg-3">
														<div class="form-group">
															<label>สภาพการรับ LOAD</label>
															<input class="form-control" name="input_85" value="<?php echo $data['input_85'];?>" id="input_85">
															<p class="help-block">%</p>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>สถานะ</label>
															<select class="form-control" name="input_86" id="input_86">

																<option value="BALANCE" <?php if ($data['input_86'] == 'BALANCE') echo "selected"; ?>>BALANCE</option>
																<option value="UNBALANCE" <?php if ($data['input_86'] == 'UNBALANCE') echo "selected"; ?>>UNBALANCE</option>
																
															</select>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>ตรวจสอบวันที่</label>
															<input class="form-control datepicker" name="input_87" value="<?php echo $data['input_87'];?>" readonly>
															<p class="help-block"></p>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group">
															<label>เวลา</label>
															<input class="form-control" name="input_88" value="<?php echo $data['input_88'];?>">
															<p class="help-block">น</p>
														</div>
													</div>
												</div>

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
