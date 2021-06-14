<div id="content">

        <div class="container">

            <div id="page-title" class="clearfix">

                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a> <span class="divider">/</span>
                    </li>
                    
                    <li class="active">Table Styles</li>
                </ul>

            </div>
            <!-- /.page-title -->



            <div class="row">

                <div class="span12">

                    <div class="widget widget-table">
                        <!-- #263849 -->

                        <session style="background-color:green;font-size:20px;margin-left: 500px;font-family:times new roman;color: white;border-radius: 5px;">
                            <?php
                                if(isset($_SESSION['ins_msg'])){
                                    echo $_SESSION['ins_msg'];
                                    unset($_SESSION['ins_msg']);
                                } ?>
                        </session>
                        <session style="background-color:#2f878a;font-size:20px;font-family:times new roman;color: white;border-radius: 5px;">
                            <?php
                                if(isset($_SESSION['upd_msg'])){
                                    echo $_SESSION['upd_msg'];
                                    unset($_SESSION['upd_msg']);
                                } ?>
                        </session>
                        <session style="background-color:red;font-size:20px;font-family:times new roman;color: white;border-radius: 5px;">
                            <?php
                                if(isset($_SESSION['err_msg'])){
                                    echo $_SESSION['err_msg'];
                                    unset($_SESSION['err_msg']);
                                } ?>
                        </session>

                        <div class="widget-header">
                            <h3>
                                <i class="icon-th-list"></i>
                                Data Table Plugin							
                            </h3>

                           <!-- <?php
                                if(isset($_SESSION['err_msg']))
                                {
                                    echo $_SESSION['err_msg'];
                                    unset($_SESSION['err_msg']);
                                }
                            ?> -->

                            <div class="widget-actions">
                                <a href="index.php?page=admin_form" class="btn btn-info">Add New</a>
                            </div>
                            
                        </div>
                        <!-- /widget-header -->

                        <div class="widget-content">

                            <table class="table table-striped table-bordered table-highlight" id="example">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Profile</th>
                                        <th>Gender</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;  
                                        $sel="SELECT * FROM `admin`";
                                        $qry=mysqli_query($con,$sel);
                                        while($row=mysqli_fetch_assoc($qry)){
                                     ?>
                                    <tr class="odd gradeX">

                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <!-- <td><?php echo $row['profile']?></td> -->
                                        <td><img src="<?php echo  'images/admin/'.$row['profile']; ?>" height="80" width="80"></td>
                                        <td><?php echo $row['gender'] ?></td>
                                        
                                        <!-- <td><?php echo $row['status'] ?></td> -->
                                        <td><?php echo $row['password'] ?></td>
                                    
                                        <td>
                                            <a href="index.php?page=admin_form&id=<?php echo $row['admin_id']?>" class="btn btn-info">Edit</a>
                                            ||
                                            <a href="index.php?page=admin_action&action=delete&id=<?php echo $row['admin_id'] ?>" class="btn btn-danger" onClick="return confirm('are you sure you want delete??')";>Delete</a></td>
                                            <!-- <script>
                                                alert("data successfully insert...");
                                            </script> -->
                                    </tr>
                                    <?php $i++; }?>
                                    
                                </tbody>
                            </table>


                        </div>
                        <!-- /widget-content -->

                    </div>
                    <!-- /widget -->

                </div>
                <!-- /span12 -->

            </div>
            <!-- /row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /#content -->



  