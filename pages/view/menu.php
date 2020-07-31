	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php?app=form">แบบฟอร์มการบำรุงรักษาหม้อแปลง</a>
		</div>

		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

	<!-- 	<ul class="nav navbar-nav navbar-left navbar-top-links">
			<li><a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a></li>
		</ul> -->

		<ul class="nav navbar-right navbar-top-links">

			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['administrator_user']['user_firstname'];?> <b class="caret"></b>
				</a>
				<ul class="dropdown-menu dropdown-user">
			<!-- 		<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
					</li>
					<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
					</li>
					<li class="divider"></li> -->
					<li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
					</li>
				</ul>
			</li>
		</ul>
		<!-- /.navbar-top-links -->

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<!-- <li class="sidebar-search"> -->
			<!-- 			<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div> -->
						<!-- /input-group -->
						<!-- </li> -->

						<li>
							<a href="index.php?app=form"><i class="fa fa-table fa-fw"></i> รายการบำรุงรักษา</a>
						</li>
						<li>
							<a href="index.php?app=form&action=insert"><i class="fa fa-edit fa-fw"></i> เพิ่มแบบฟอร์ม</a>
						</li>
						<li>
							<a href="index.php?app=user"><i class="fa fa-user-circle"></i> จัดการผู้ใช้</a>
						</li>
						<li>
							<a href="index.php?app=chart"><i class="fa fa-bar-chart"></i> กราฟรายงาน</a>
						</li>
					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>