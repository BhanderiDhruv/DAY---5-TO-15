<?php
    @$id=$_REQUEST['id'];
    $sel="SELECT * FROM `auction` WHERE `auction_id`='".$id."'";
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

                        <form class="form-horizontal" method="post" action="index.php?page=auction_action" enctype="multipart/form-data">

                    <fieldset>
                        <input type="hidden" name="auction_id" value="<?php echo $row['auction_id']; ?>">
                        <input type="hidden" name="action" value="<?php echo $action; ?>">

                         <div class="control-group">
                                <label class="control-label" for="input01">massage</label>
                                    <div class="controls">
                                        <textarea cols="20" rows="3" name="massage" id="input01" class="text_area"></textarea>
                                    </div>
                            </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">new budget</label>
                            <div class="controls">
                                <input type="text" name="budget" value="<?php if (isset($_SESSION['new_budget'])){echo($_SESSION['new_budget']); unset($_SESSION['new_budget']);} ?> <?php echo $row['new_budget']; ?>" class="input-large" id="input01">                                           
                            </div>
                        </div> 

                        <div class="control-group">
                            <label class="control-label" for="input01">suggestion</label>
                            <div class="controls">
                                <input type="text" name="suggestion" value="<?php if (isset($_SESSION['suggestion'])){echo($_SESSION['suggestion']); unset($_SESSION['suggestion']);} ?> <?php echo $row['suggestion']; ?>" class="input-large" id="input01">                                           
                            </div>
                        </div>

                         <div class="form-actions">
                                <button type="submit" name="submit" class="btn btn-primary btn-large">Save changes</button>
                                <button class="btn btn-large"><a href="index.php?page=auction">Cancel</button></a>
                            </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>