
<div class="container wall">
	<div align="center"  style="padding-top: 10% ">
		<h1>สมัครสมาชิก</h1>
		<form action="check_login.php" method="post">
			<input required name="code" id="code" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="รหัสพนักงาน" autofocus style="    width: 40%;">
			<input required name="name" id="name" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="ชื่อ" autofocus style="margin-top:10px;    width: 40%;">
			<input required name="lasname" id="lasname" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="นามสกุล" autofocus style="margin-top:10px;    width: 40%;">
			<input required name="phone" id="phone" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="เบอร์โทรศัพท์" autofocus style="margin-top:10px;    width: 40%;">
			<input required name="local" id="local" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="ที่อยู่" autofocus style="margin-top:10px;    width: 40%;">
			<input required name="email" id="email" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="e-mail" autofocus style="margin-top:10px;    width: 40%;">
			<input required name="password" id="password" type="text" style="margin-top:10px; width: 40%;" class="form-control form-control-sm" autocomplete="false" placeholder="Password" >
			<div style="padding-top:15px;     text-align: center;" align="right" >
				<button type="submit" class="myButton" style="cursor: pointer;" >บันทึก</button>
				<button class="myButton" style="cursor: pointer;"  onclick="backpage()">กลับ</button>
			</div>

		</form>
		<script type="text/javascript">
			function backpage(argument) {
				window.location ="index.php";
			}
		</script>
	</div>
</div>