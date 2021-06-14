<?php
    @$id=$_REQUEST['id'];
    $sel="SELECT * FROM `developer_registration` WHERE `developer_id`='".$id."'";
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

                        <form class="form-horizontal" method="post" action="index.php?page=developer_action" enctype="multipart/form-data">

                    <fieldset>
                        <input type="hidden" name="developer_id" value="<?php echo $row['developer_id']; ?>">
                        <input type="hidden" name="action" value="<?php echo $action; ?>">

                        <div class="control-group">
                            <label class="control-label" for="input01">first Name</label>
                            <div class="controls">
                                <input type="text" name="first_name" value="<?php if (isset($_SESSION['
                                first_name'])){echo($_SESSION['first_name']); unset($_SESSION['first_name']
                                );} ?> <?php echo $row['first_name']; ?>" id="username2">  
                            </div>
                        </div> 

                        <div class="control-group">
                            <label class="control-label" for="input01">last Name</label>
                            <div class="controls">
                                <input type="text" name="last_name" value="<?php if (isset($_SESSION['last'])){echo($_SESSION['last_name']); unset($_SESSION['last_name']);} ?> <?php echo $row['last_name']; ?>" class="input-large" id="input01">                                           
                            </div>
                        </div> 

                        <div class="control-group">
                            <label class="control-label" for="input01">Email</label>
                            <div class="controls">
                                <input type="email" name="email" value="<?php if (isset($_SESSION['email'])){echo($_SESSION['email']); unset($_SESSION['email']);} ?> <?php echo $row['email']; ?>" class="input-large" id="input01">                                           
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">phone no</label>
                            <div class="controls">
                                <input type="text" name="phone_no" maxlength="10" value="<?php if (isset($_SESSION['phone_no'])){echo($_SESSION['phone_no']); unset($_SESSION['phone_no']);} ?> <?php echo $row['phone_no']; ?>" class="input-large" id="input01">                                           
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

                           <!--  <div class="control-group">
                                <label class="control-label" for="input01">address</label>
                                    <div class="controls">
                                        <textarea cols="20" rows="3" name="address" id="input01" class="text_area"></textarea>
                                    </div>
                            </div> -->

                            <div class="control-group">
                                <label class="control-label" for="input01">city</label>
                                <div class="controls">
                                    <input type="text" name="city" value="<?php if (isset($_SESSION['city'])){echo($_SESSION['city']); unset($_SESSION['city']);} ?> <?php echo $row['city']; ?>" class="input-large" id="input01">                                           
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input01">state</label>
                                <div class="controls">
                                    <input type="text" name="state" value="<?php if (isset($_SESSION['state'])){echo($_SESSION['state']); unset($_SESSION['state']);} ?> <?php echo $row['state']; ?>" class="input-large" id="input01">                                           
                                </div>
                            </div>
                                 
                            <div class="control-group">
                                <label class="control-label" for="input01">developing language</label>
                                <div class="controls">
                                <input type="text" name="developing_language" value="<?php if (isset($_SESSION['developing_language'])){echo($_SESSION['
                                developing_language']); unset($_SESSION['developing_language']);} ?> <?php
                                echo $row['developing_language']; ?>" class="input-large" id="input01">                                           
                                </div>
                            </div>

                            <div class="control-group">
                               <label class="control-label" for="input01">developing exprience</label>
                                <div class="controls">
                                    <input type="text" name="developing_experience" value="<?php if (isset($_SESSION['developing_experience'])){echo($_SESSION['developing_experience']); unset($_SESSION['developing_experience']);} ?> <?php echo $row['developing_experience']; ?>" class="input-large" id="input01">                                           
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="fileInput">profile
                                </label>
                                <div class="controls">
                                    <input class="input-file" id="fileInput" name="profile" type="file">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input01">Password</label>
                                <div class="controls">
                                    <input type="password" name="password" value="" class="input-large" id="input01">   
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input01">Password</label>
                                <div class="controls">
                                    <input type="password" name="cpassword" value="" class="input-large" id="input01">   
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" name="submit" class="btn btn-primary btn-large">Save changes</button>
                               <button class="btn btn-large"><a href="index.php?page=developer_registration">Cancel</button></a>
                            </div>
                     </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
