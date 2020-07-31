<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.7/chartjs-plugin-annotation.js"></script>
<div id="page-wrapper">


	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					<?php 

					$form_name = $data['form_no'];
					if($data['rewrite_no'] != 0){
						$form_name = $data['form_no'].'-RE-'.$data['rewrite_no'];
					}
					?>
					รายการบำรุงรักษา <?php echo $form_name ?> PEA NO. : <?php echo $data['input_2']; ?>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12">
				

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
								ความทันต่อแรงดันไฟฟ้าน้ำมันในหม้อแปลง
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





	function RenderChart(id){
		var bgColor = [
		'rgba(255, 99, 132, 0.2)',
		'rgba(54, 162, 235, 0.2)',
		'rgba(255, 206, 86, 0.2)',
		'rgba(75, 192, 192, 0.2)',
		'rgba(153, 102, 255, 0.2)',
		'rgba(255, 159, 64, 0.2)',
		'rgba(39 64 139, 0.2)',
		'rgba(152 245 255, 0.2)',
		'rgba(144 238 144, 0.2)',
		'rgba(105 139 34, 0.2)',
		'rgba(238 180 34, 0.2)',
		'rgba(205 104 57, 0.2)',
		'rgba(205 102 29, 0.2)',
		'rgba(238 18 137, 0.2)',
		'rgba(205 50 120, 0.2)',
		'rgba(238 122 233, 0.2)',
		'rgba(205 150 205, 0.2)',
		'rgba(137 104 205,0.2)',
		'rgba(236 171 83,0.2)',
		];
		var borderColor = [
		'rgba(255,99,132,1)',
		'rgba(54, 162, 235, 1)',
		'rgba(255, 206, 86, 1)',
		'rgba(75, 192, 192, 1)',
		'rgba(153, 102, 255, 1)',
		'rgba(255, 159, 64, 1)',
		'rgba(39 64 139, 1)',
		'rgba(152 245 255, 1)',
		'rgba(144 238 144, 1)',
		'rgba(105 139 34, 1)',
		'rgba(238 180 34, 1)',
		'rgba(205 104 57,1)',
		'rgba(205 102 29, 1)',
		'rgba(238 18 137, 1)',
		'rgba(205 50 120, 1)',
		'rgba(238 122 233, 1)',
		'rgba(205 150 205, 1)',
		'rgba(137 104 205, 1)',
		'rgba(236 171 83, 1)',
		];
		$('#myChart').replaceWith('<canvas id="myChart" style="max-height: 693px;"></canvas>');
		$('#myChart1').replaceWith('<canvas id="myChart1" style="max-height: 693px;"></canvas>');
		$('#myChart2').replaceWith('<canvas id="myChart2" style="max-height: 693px;"></canvas>');
		var ctx = document.getElementById("myChart");
		var ctx1 = document.getElementById("myChart1");
		var ctx2 = document.getElementById("myChart2");
		$.post( "../ajax/getChartById.php",{

			id:id 
		}, function( data ) {

			var pass = 0;
			if(data.drop_2 == 20){
				pass = 1000;

			}
			if(data.drop_2 == 30){
				pass = 500;

			}

			if(data.drop_2 == 40){
				pass = 250

			}

			if(data.drop_2 == 50){
				pass = 125
			}

			if(data.drop_2 == 60){
				pass = 65

			}

			console.log(data);
			var arr = [];
			var label_show = [];
			var arr1 = [];
			var label_show1 = [];
			var arr2 = [];
			var label_show2 = [];
			arr.push(
				data.input_24,
				data.input_29
				)
			label_show.push(
				"ก่อน"+"("+data.input_87+")",
				"หลัง"+"("+data.input_87+")"
				)


			arr1.push(
				data.input_31,
				data.input_33,
				data.input_35,

				)
			label_show1.push(
				"ค่าฉนวณขดลวด P-G"+"("+data.input_87+")",
				"ค่าฉนวณขดลวด P-S"+"("+data.input_87+")",
				"ค่าฉนวณขดลวด S-G"+"("+data.input_87+")",


				)

			arr2.push(
				data.input_37,
				data.input_39,
				data.input_40,
				data.input_42,
				)
			label_show2.push(
				"ค่ากราวน์ต้นหม้อแปลงด้านแรงสูง ก่อน"+"("+data.input_37+")",
				"ค่ากราวน์ต้นหม้อแปลงด้านแรงสูง หลัง"+"("+data.input_39+")",

				"ค่ากราวน์ต้นหม้อแปลงด้านแรงต่ำ ก่อน"+"("+data.input_40+")",
				"ค่ากราวน์ต้นหม้อแปลงด้านแรงต่ำ หลัง"+"("+data.input_42+")",
				)

			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: label_show,
					datasets: [{
						label: 'ค่าเฉลี่ย',
						data: arr,
						backgroundColor: bgColor,
						borderColor: borderColor,
						borderWidth: 1
					}]
				},
				options: {
					legend: {
						display: false
					}, 	
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
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
							borderWidth: 2,
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
							borderWidth: 2,
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
							borderWidth: 2,
							label: {
								enabled: true,
								content: 'Poor'
							}
						}]
					}
				}
			});


			var myChart1 = new Chart(ctx1, {
				type: 'bar',
				data: {
					labels: label_show1,
					datasets: [{
						label: 'ค่าเฉลี่ย',
						data: arr1,
						backgroundColor: bgColor,
						borderColor: borderColor,
						borderWidth: 1
					}]
				},
				options: {
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					},

					annotation: {
						annotations: [{
							type: 'line',
							mode: 'horizontal',
							scaleID: 'y-axis-0',
							value: pass,
							borderColor: 'green',
							borderWidth: 2,
							label: {
								enabled: true,
								content: 'Pass'
							}
						}]
					}

				}
			});

			var myChart2 = new Chart(ctx2, {
				type: 'bar',
				data: {
					labels: label_show2,
					datasets: [{
						label: 'ค่าเฉลี่ย',
						data: arr2,
						backgroundColor: bgColor,
						borderColor: borderColor,
						borderWidth: 1
					}]
				},
				options: {
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					},

					annotation: {
						annotations: [{
							type: 'line',
							mode: 'horizontal',
							scaleID: 'y-axis-0',
							value: 25,
							borderColor: 'red',
							borderWidth: 2,
							label: {
								enabled: true,
								content: 'poor'
							}
						},
						{
							type: 'line',
							mode: 'horizontal',
							scaleID: 'y-axis-0',
							value: 5,
							borderColor: 'yellow',
							borderWidth: 2,
							label: {
								enabled: true,
								content: 'Recondition'
							}
						}]
					}

				}
			});

			myChart.update();
			myChart1.update();
			myChart2.update();
		});
}

$( document ).ready(function() {
	RenderChart(<?php echo $_GET['id'];?>);
});
</script>    