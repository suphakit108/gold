
<div id="page-wrapper">


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">จัดการผู้ใช้</h1>
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
                              รายการผู้ใช้
                          </div>
                          <div class="col-md-4">
                              <a class="btn btn-success " style="float:right;" href="?app=user&action=insert"><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
                          </div>
                      </div>

                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example"  class="dataTables-example">
                            <thead>
                                <tr >
                                    <th>#</th>
                                    <th>username</th>
                                    <th>ชื่อ นามสกุล</th>
                                    <th>เบอร์โทรศัพท์</th>
                                    <th>line</th>
                                    <th>วันที่เพิ่ม</th>
                                    <th>จัดการ</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                for($i=0; $i < count($data); $i++){
                                    ?>
                                    <tr class="odd gradeX">


                                        <td><?php echo $i+1; ?></td>
                                        <td><?php echo $data[$i]['user_name']; ?></td>
                                        <td><?php echo $data[$i]['user_firstname'].'  '.$data[$i]['user_lastname']; ?></td>
                                        <td><?php echo $data[$i]['user_tel']; ?></td>
                                        <td><?php echo $data[$i]['user_line']; ?></td>
                                        <td><?php echo $data[$i]['date_add']; ?></td>
                                        <td align="center">    
                                            <a style="font-size: 20px;" href="?app=user&action=update&id=<?php echo $data[$i]['user_id'];?>">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a> 

                                            <a  href="?app=user&action=delete&id=<?php echo $data[$i]['user_id'];?>" onclick="return confirm('You want to delete form : <?php echo $data[$i]['form_no']; ?>');" style="color:red; font-size: 20px;">
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

