<!DOCTYPE html>
<html>
<head>
	<title>create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Damion|Muli:400,600');
		body{
			font-family: 'Muli', sans-serif;
		}
		


		/* necessary to give position: relative to parent. */
		input[type="text"]{font: 15px/24px 'Muli', sans-serif; color: #333; width: 100%; box-sizing: border-box; letter-spacing: 1px;}

		input[type="text"]{font: 15px/24px "Lato", Arial, sans-serif; color: #333; width: 100%; box-sizing: border-box; letter-spacing: 1px;}


		.effect-20 ~ .focus-border:before,
		.effect-20 ~ .focus-border:after{content: ""; position: absolute; top: 0; left: 0; width: 0; height: 2px; background-color: #333; transition: 0.3s;}
		.effect-20 ~ .focus-border:after{top: auto; bottom: 0; left: auto; right: 0;}
		.effect-20 ~ .focus-border i:before,
		.effect-20 ~ .focus-border i:after{content: ""; position: absolute; top: 0; left: 0; width: 2px; height: 0; background-color: #333; transition: 0.4s;}
		.effect-20 ~ .focus-border i:after{left: auto; right: 0; top: auto; bottom: 0;}
		.effect-20:focus ~ .focus-border:before,
		.effect-20:focus ~ .focus-border:after,
		.has-content.effect-20 ~ .focus-border:before,
		.has-content.effect-20 ~ .focus-border:after{width: 100%; transition: 0.3s;}
		.effect-20:focus ~ .focus-border i:before,
		.effect-20:focus ~ .focus-border i:after,
		.has-content.effect-20 ~ .focus-border i:before,
		.has-content.effect-20 ~ .focus-border i:after{height: 100%; transition: 0.4s;}
		.effect-20 ~ label{position: absolute; left: 14px; width: 100%; top: 10px; color: #333; transition: 0.3s; z-index: -1; letter-spacing: 0.5px;}
		.effect-20:focus ~ label, .has-content.effect-20 ~ label{top: -18px; left: 0; font-size: 12px; color: #333; transition: 0.3s;}

		
		.myButton {
			background-color:#f9791e;
			border-radius:28px;
			border:1px solid #f9791e;
			display:inline-block;
			cursor:pointer;
			color:#ffffff;
			font-size:17px;
			padding:2px 31px;
			text-decoration:none;
		}
		.myButton:hover {
			background-color:#f9791e;
		}
		.myButton:active {
			position:relative;
			top:1px;
		}

	</style>
</head>
<body>
	<div class="container wall" style="    padding-top: 150px;">

		<form id="myForm" action="creates.php?app=createusre" method="post" accept-charset="utf-8">
			<div class="row" style=" justify-content: center;">
				<div class="col-3" style=" justify-content: center;">
					<h1 >สมัครสมาชิก</h1>
				</div>
			</div>
			<div class="row" style=" justify-content: center;">
				<div class="col-4 input-effect" style="padding-right: 0px; padding-left: 0px;">
					<input class="effect-20" type="text" placeholder="สาขา" style="width: 100% " id="branch">
					<label>สาขา</label>
					<span class="focus-border">
						<i></i>
					</span>
				</div>
			</div>
			<div class="row" style=" justify-content: center;">
				<div class="col-4 input-effect" style="padding-right: 0px; padding-left: 0px; margin-top: 20px;">
					<input class="effect-20" type="text" placeholder="ชื่อผู้ใช้" style="width: 100% ">
					<label>ชื่อผู้ใช้</label>
					<span class="focus-border">
						<i></i>
					</span>
				</div>
			</div>
			<div class="row" style=" justify-content: center;">
				<div class="col-4 input-effect" style="padding-right: 0px; padding-left: 0px; margin-top: 20px;">
					<input class="effect-20" type="text" placeholder="อีเมล" style="width: 100% ">
					<label>อีเมล</label>
					<span class="focus-border">
						<i></i>
					</span>
				</div>
			</div>
			<div class="row" style=" justify-content: center;">
				<div class="col-4 input-effect" style="padding-right: 0px; padding-left: 0px; margin-top: 20px;">
					<input class="effect-20" type="password" placeholder="รหัสผ่าน" style="width: 100% ">
					<label>รหัสผ่าน</label>
					<span class="focus-border">
						<i></i>
					</span>
				</div>
			</div>
			<div class="row" style=" justify-content: center;">
				<div class="col-4 input-effect" style="padding-right: 0px; padding-left: 0px; margin-top: 20px;">
					<input class="effect-20" type="password" placeholder="ยืนยันรหัสผ่าน" style="width: 100% ">
					<label>ยืนยันรหัสผ่าน</label>
					<span class="focus-border">
						<i></i>
					</span>
				</div>
			</div>
			<div class="row" style=" justify-content: center;">
				<div class="col-4" style="padding-right: 0px; padding-left: 0px; margin-top: 20px;     text-align: center;">
					<button type="submit" class="myButton" style="cursor: pointer;" >สมัคร</button>
				</div>
			</div>
		</div>
	</form>
</body>
</html>