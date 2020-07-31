<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.7/chartjs-plugin-annotation.js"></script>
<div id="page-wrapper">


	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">กราฟแสดง</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				
				<div class="panel panel-default">

					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="row">
			<!-- 				<div class="col-lg-3">
								<div class="form-group">
									<label>วันที่เริ่มต้น</label>
									<input class="form-control datepicker" name="date_start" id="date_start"  readonly value="<?php echo date("d-m-Y") ?>" onchange="RenderChart()">
									<p class="help-block"></p>
								</div>
							</div> -->
		<!-- 					<div class="col-lg-3">
								<div class="form-group">
									<label>วันที่สิ้นสุด</label>
									<input class="form-control datepicker" name="date_end" id="date_end"  readonly value="<?php echo date("d-m-Y") ?>" onchange="RenderChart()">
									<p class="help-block"></p>
								</div>
							</div> -->
							<div class="col-lg-3">
								<div class="form-group">
									<label>PEA NO</label>
									<input class="form-control" name="peano" id="peano" onchange="RenderChart()" value="">
									<p class="help-block"></p>
								</div>
							</div>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->


				<div class="panel panel-default">
					<div class="panel-heading">

						<div class="row">
							<div class="col-md-8">
								ความทันต่อแรงดันไฟฟ้าน้ำมันในหม้อแปลง
							</div>

						</div>

					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<canvas id="myChart"  style="max-height: 693px;"></canvas>
							</div>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->


				<div class="panel panel-default">
					<div class="panel-heading">

						<div class="row">
							<div class="col-md-8">
								ค่าฉนวน
							</div>

						</div>

					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<canvas id="myChart1"  style="max-height: 693px;"></canvas>
							</div>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->



				<div class="panel panel-default">
					<div class="panel-heading">

						<div class="row">
							<div class="col-md-8">
								ค่ากราวน์ต้นหม้อแปลง
							</div>

						</div>

					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<canvas id="myChart2"  style="max-height: 693px;"></canvas>
							</div>
						</div>
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

<script>





	function RenderChart(){
		var bgColor = [
		'rgba(255, 99, 132, 0.2)',
		'rgba(54, 162, 235, 0.2)',
		'rgba(255, 206, 86, 0.2)',
		'rgba(75, 192, 192, 0.2)',
		'rgba(153, 102, 255, 0.2)',
		'rgba(255, 159, 64, 0.2)',
		'rgba(39 64 139, 0.2)',
		'rgba(152, 245, 255, 0.2)',
		'rgba(144 ,238, 144, 0.2)',
		'rgba(105 ,139, 34, 0.2)',
		'rgba(238, 180, 34, 0.2)',
		'rgba(205, 104, 57, 0.2)',
		'rgba(205, 102, 29, 0.2)',
		'rgba(238 ,18, 137, 0.2)',
		'rgba(205, 50, 120, 0.2)',
		'rgba(238, 122, 233, 0.2)',
		'rgba(205, 150, 205, 0.2)',
		'rgba(137, 104, 205,0.2)',
		'rgba(236, 171 ,83,0.2)',
		];
		var borderColor = [
		'rgba(255,99,132,1)',
		'rgba(54, 162, 235, 1)',
		'rgba(255, 206, 86, 1)',
		'rgba(75, 192, 192, 1)',
		'rgba(153, 102, 255, 1)',
		'rgba(255, 159, 64, 1)',
		'rgba(39 ,64 ,139, 1)',
		'rgba(152 ,245, 255, 1)',
		'rgba(144 ,238, 144, 1)',
		'rgba(105, 139, 34, 1)',
		'rgba(238 ,180, 34, 1)',
		'rgba(205, 104, 57,1)',
		'rgba(205 ,102 ,29, 1)',
		'rgba(238 ,18 ,137, 1)',
		'rgba(205, 50, 120, 1)',
		'rgba(238, 122, 233, 1)',
		'rgba(205, 150, 205, 1)',
		'rgba(137, 104, 205, 1)',
		'rgba(236, 171 ,83, 1)',
		];
		$('#myChart').replaceWith('<canvas id="myChart" style="max-height: 693px;"></canvas>');
		$('#myChart1').replaceWith('<canvas id="myChart1" style="max-height: 693px;"></canvas>');
		$('#myChart2').replaceWith('<canvas id="myChart2" style="max-height: 693px;"></canvas>');
		var ctx = document.getElementById("myChart").getContext('2d');
		var ctx1 = document.getElementById("myChart1").getContext('2d');
		var ctx2 = document.getElementById("myChart2").getContext('2d');
		var peano = document.getElementById("peano").value;
		$.post( "../ajax/getChart.php",{

			pea_no:peano 
		}, function( data ) {



			var label_show = [];
			var label_show1 = [];
			var label_show2 = [];

			var before = [];
			var after = [];

			var P_G = [];
			var P_S = [];
			var S_G = [];



			var before_g_hight = [];
			var after_g_hight = [];
			var before_g_low = [];
			var after_g_low = [];
			for(var i= 0;i<data.length;i++){
				before.push(
					data[i].input_24,
					)
				after.push(

					data[i].input_29
					)
				label_show.push(
					data[i].input_87
					)


				P_G.push(
					data[i].input_31,
					)

				P_S.push(
					data[i].input_33,
					)
				S_G.push(
					data[i].input_35,
					)
				label_show1.push(
					data[i].input_87,
					)


				
				before_g_hight.push(
					data[i].input_37,
					)
				after_g_hight.push(
					data[i].input_39,
					)
				before_g_low.push(
					data[i].input_40,
					)
				after_g_low.push(
					data[i].input_42,
					)

				label_show2.push(
					data[i].input_87,
					)
			}
			for(var i= 0;i<data.length;i++){

			}
			window.myChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: label_show,
					datasets: [{
						label: 'ก่อน',
						backgroundColor: 'rgba(255, 206, 86, 1)',
						borderColor: 'rgba(255, 206, 86, 1)',
						data: before,
						fill: false,
					}, {
						label: 'หลัง',
						backgroundColor: 'rgba(137, 104, 125, 1)',
						borderColor: 'rgba(137, 104, 125, 1)',
						data: after,
						fill: false,
					},
					]
				},
				options: {
					responsive: true,

					tooltips: {
						mode: 'index',
						intersect: false,
					},
					hover: {
						mode: 'nearest',
						intersect: true
					},
					scales: {
						xAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Month'
							}
						}],
						yAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'ความทันต่อแรงดันไฟฟ้าน้ำมันในหม้อแปลง'
							}
						}]
					},
					annotation: {
						annotations: [{
							type: 'line',
							mode: 'horizontal',
							scaleID: 'y-axis-0',
							value: 22,
							borderColor: 'yellow',
							borderWidth: 1,
							label: {
								enabled: true,
								content: 'Recondition'
							}
						},{
							type: 'line',
							mode: 'horizontal',
							scaleID: 'y-axis-0',
							value: 30,
							borderColor: 'green',
							borderWidth: 1,
							label: {
								enabled: true,
								content: 'Good'
							}
						},
						{
							type: 'line',
							mode: 'horizontal',
							scaleID: 'y-axis-0',
							value: 20,
							borderColor: 'red',
							borderWidth: 1,
							label: {
								enabled: true,
								content: 'Poor'
							}
						}]
					}
				}
			});


			window.myChart1 = new Chart(ctx1, {
				type: 'line',
				data: {
					labels: label_show1,
					datasets: 
					[{
						label: 'ค่าฉนวณขดลวด P-G',
						backgroundColor: 'rgba(255, 206, 86, 1)',
						borderColor: 'rgba(255, 206, 86, 1)',
						data: P_G,
						fill: false,
					}, {
						label: 'ค่าฉนวณขดลวด P-S',
						backgroundColor: 'rgba(54, 162, 235, 1)',
						borderColor: 'rgba(54, 162, 235, 1)',
						data: P_S,
						fill: false,
					},
					{
						label: 'ค่าฉนวณขดลวด S-G',
						backgroundColor: 'rgba(205 ,150, 205, 1)',
						borderColor: 'rgba(205, 150, 205, 1)',
						data: S_G,
						fill: false,
					}]
				},
				options: {
					responsive: true,

					tooltips: {
						mode: 'index',
						intersect: false,
					},
					hover: {
						mode: 'nearest',
						intersect: true
					},
					scales: {
						xAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Month'
							}
						}],
						yAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'ค่าฉนวน'
							}
						}]
					}
				}
			});

			window.myChart2 = new Chart(ctx2, {
				type: 'line',
				data: {
					labels: label_show2,
					datasets: [{
						label: 'ค่ากราวน์ต้นหม้อแปลงด้านแรงสูง ก่อน',
						backgroundColor: 'rgba(255, 206, 86, 1)',
						borderColor: 'rgba(255, 206, 86, 1)',
						data: before_g_hight,
						fill: false,
					}, {
						label: 'ค่ากราวน์ต้นหม้อแปลงด้านแรงสูง หลัง',
						backgroundColor: 'rgba(54, 162, 235, 1)',
						borderColor: 'rgba(54, 162, 235, 1)',
						data: after_g_hight,
						fill: false,
					},
					{
						label: 'ค่ากราวน์ต้นหม้อแปลงด้านแรงต่ำ ก่อน',
						backgroundColor: 'rgba(153, 102, 255, 1)',
						borderColor: 'rgba(153, 102, 255, 1)',
						data: before_g_low,
						fill: false,
					},
					{
						label: 'ค่ากราวน์ต้นหม้อแปลงด้านแรงต่ำ หลัง',
						backgroundColor: 'rgba(255,99,132,1)',
						borderColor: 'rgba(255,99,132,1)',
						data: after_g_low,
						fill: false,
					}]
				},
				options: {
					responsive: true,

					tooltips: {
						mode: 'index',
						intersect: false,
					},
					hover: {
						mode: 'nearest',
						intersect: true
					},
					scales: {
						xAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Month'
							}
						}],
						yAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'ค่ากราวน์ต้นหม้อแปลง'
							}
						}]
					}
				}
			});
			window.myChart.update();
			window.myChart1.update();
			window.myChart2.update();
		});
}

$( document ).ready(function() {
	RenderChart();
});
</script>    