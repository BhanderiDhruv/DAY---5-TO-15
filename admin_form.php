<?php
    @$id=$_REQUEST['id'];
    $sel="SELECT * FROM `admin` WHERE `admin_id`='".$id."'";
    $qry=mysqli_query($con,$sel);
    $row=mysqli_fetch_array($qry);
    if(@$_REQUEST['id']!='')
    {
        $action="update";
    }else{
        $action="insert";
    }  
?>

    <div id="content">

        <div class="container">

            <div id="page-title" class="clearfix">

                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a> <span class="divider">/</span>
                    </li>
                    
                    <li class="active">Form Styles</li>
                </ul>

            </div>
            <!-- /.page-title -->

            <div class="row">

                <div class="span12">

                    <div id="horizontal" class="widget widget-form">

                        <div class="widget-header">
                            <h3>
                                <i class="icon-pencil"></i>
                                Horizontal Layout	      					
                            </h3>
                        </div>
                        <!-- /widget-header -->

                        <div class="widget-content">

                            <form class="form-horizontal" method="post" action="index.php?page=admin_action" enctype="multipart/form-data">

                                <fieldset>
                                    <input type="hidden" name="admin_id" value="<?php echo $row['admin_id']; ?>">
                                    <input type="hidden" name="action" value="<?php echo $action; ?>">
                                    <div class="control-group">

                                        <label class="control-label" for="input01">Name</label>
                                        <div class="controls">
                                            <input type="text" name="name" value="<?php if (isset($_SESSION['name'])){echo($_SESSION['name']); unset($_SESSION['name']);} ?> <?php echo $row['name']; ?>" class="input-large" id="input01">
                                            
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="input01">Email</label>
                                        <div class="controls">
                                            <input type="email" name="email" value="<?php if (isset($_SESSION['email'])){echo($_SESSION['email']); unset($_SESSION['email']);} ?> <?php echo $row['email']; ?>" class="input-large" id="input01">                                           
                                        </div>
                                    </div>
                                   
                                    <!-- <div class="control-group">
                                        <label class="control-label" for="select01">Select list</label>
                                        <div class="controls">
                                            <select id="select01">
                                                <option>something</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="control-group">
                                        <label class="control-label" for="fileInput">Profile</label>
                                        <div class="controls">
                                            <input class="input-file" id="fileInput" name="profile" type="file">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">Gender</label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="gender" id="optionsRadios1" value="male" checked="">male
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="gender" id="optionsRadios2" value="female">female    
                                            </label>
                                        </div>
                                    </div>

                                    <!-- <div class="control-group">
                                        <label class="control-label">Status</label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="status" id="optionsRadios1" value="active" checked="">Active
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="status" id="optionsRadios2" value="inactive">Inactive
                                                
                                            </label>
                                        </div>
                                    </div>-->

                                    <div class="control-group">
                                        <label class="control-label" for="input01">create Password</label>
                                        <div class="controls">
                                            <input type="password" name="password" value="" class="input-large" id="input01">   
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="input01">confirm Password</label>
                                        <div class="controls">
                                            <input type="password" name="cpassword" value="" class="input-large" id="input01">   
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" name="submit" class="btn btn-primary btn-large">Save changes</button>
                                       <button class="btn btn-large"><a href="index.php?page=admin_form">Cancel</button></a>
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                        <!-- /widget-content -->

                    </div>

                </div>
                <!-- /span8 -->

            </div>
            <!-- /row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /#content -->


