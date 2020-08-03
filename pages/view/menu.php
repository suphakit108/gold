<body>


	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">WebSiteName</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php?app=admin">หน้าเเรก</a></li>
				<?php if($_SESSION['administrator_user']['layer']=="admin"){?>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">จัดกการสมาชิก<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">แอดมิน</a></li>
							<li><a href="#">พนักงาน</a></li>
							<li><a href="index.php?app=admin&action=user">ขอสิทธ์การเข้าถึง</a></li>
						</ul>
					</li>
				<?php }?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li style="float:right" ><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i>ออกจากระบบ</a></li>
			</ul>
		</div>
	</nav>

</body>