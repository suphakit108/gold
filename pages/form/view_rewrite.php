<!DOCTYPE html>
<html lang="en">
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">แบบฟอร์มการบำรุงรักษาหม้อแปลง</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
        </ul>

        <ul class="nav navbar-right navbar-top-links">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>

                    <li>
                        <a href="index.php"><i class="fa fa-table fa-fw <?php if(!isset($_GET['action']))  echo 'active'; ?>"></i> รายการบำรุงรักษา</a>
                    </li>
                    <li>
                        <a href="index.php?action=insert"><i class="fa fa-edit fa-fw <?php if($_GET['action'] == 'insert')  echo 'active'; ?>"></i> เพิ่มแบบฟอร์ม</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ประวัติการแก้ไขรายการบำรุงรักษา</h1>
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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr >
                                            <th>#</th>
                                            <th>No</th>
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
                                                <td><?php echo $data[$i]['location']; ?></td>
                                                <td><?php echo $data[$i]['date_add']; ?></td>
                                                <td align="center">    
                                                   <!--      <a style="font-size: 20px;" href="?action=update&id=<?php echo $data[$i]['id'];?>">
                                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        </a>  -->

                                                        <a target="_blank"  href="../prints/form_print.php?id=<?php echo $data[$i]['id'];?>&type=PDF"  style=" font-size: 20px;">
                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                        </a>
                                         <!--                
                                                        <a  href="?action=delete&id=<?php echo $data[$i]['id'];?>" onclick="return confirm('You want to delete form : <?php echo $data[$i]['form_no']; ?>');" style="color:red; font-size: 20px;">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                        </a> -->
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