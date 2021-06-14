<?php
    @$id=$_REQUEST['id'];
    $sel="SELECT * FROM `project` WHERE `project_id`='".$id."'";
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

                        <form class="form-horizontal" method="post" action="index.php?page=developerproject_action" enctype="multipart/form-data">

                    <fieldset>
                         <input type="hidden" name="project_id" value="<?php echo $row['project_id']; ?>">
                        <input type="hidden" name="action" value="<?php echo $action; ?>">

                        <div class="control-group">
                            <label class="control-label" for="input01">first Name</label>
                            <div class="controls">
                                <input type="text" name="first_name" value="<?php if (isset($_SESSION['first_name'])){echo($_SESSION['first_name']); unset($_SESSION['first_name']);} ?> <?php echo $row['first_name']; ?>" class="input-large" id="input01">                                           
                            </div>
                        </div> 

                        <div class="control-group">
                            <label class="control-label" for="input01">last Name</label>
                            <div class="controls">
                                <input type="text" name="last_name" value="<?php if (isset($_SESSION['last_name'])){echo($_SESSION['last_name']); unset($_SESSION['last_name']);} ?> <?php echo $row['last_name']; ?>" class="input-large" id="input01">                                           
                            </div>
                        </div> 

                        <div class="control-group">
                            <label class="control-label" for="input01">Email</label>
                            <div class="controls">
                                <input type="email" name="email" value="<?php if (isset($_SESSION['email'])){echo($_SESSION['email']); unset($_SESSION['email']);} ?> <?php echo $row['email']; ?>" class="input-large" id="input01">                                           
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">photos</label>
                                <div class="controls">
                                    <input class="input-file" name="photos[]" multiple="" value="<?php echo
                                    $row['photos'];?>" id="fileInput" type="file">
                                </div>
                        </div>

                        <div class="control-group">
                                <label class="control-label" for="input01">project discreption</label>
                                    <div class="controls">
                                        <textarea cols="20" rows="3" name="project_description" id="input01" class="text_area"></textarea>
                                    </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="input01">language</label>
                                <div class="controls">
                                    <input type="text" name="language" value="<?php if (isset($_SESSION['language'])){echo($_SESSION['language']); unset($_SESSION['language']);} ?> <?php echo $row['language']; ?>" class="input-large" id="input01">                                           
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input01">budget</label>
                                <div class="controls">
                                    <input type="text" name="budget" value="<?php if (isset($_SESSION['budget'])){echo($_SESSION['budget']); unset($_SESSION['budget']);} ?> <?php echo $row['budget']; ?>" class="input-large" id="input01">   
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" name="submit" class="btn btn-primary btn-large">Save changes</button>
                                <button class="btn btn-large"><a href="index.php?page=request_project">Cancel</button></a>
                            </div>
                     </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
