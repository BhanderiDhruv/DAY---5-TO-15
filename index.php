<?php include('../includes/config.php');
    include("middlepage/login_check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BID U BUDDY</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap-overrides.css" rel="stylesheet">

    <link href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">

    <link href="css/slate.css" rel="stylesheet">
    <link href="css/slate-responsive.css" rel="stylesheet">

    <link href="css/pages/dashboard.css" rel="stylesheet">
        

    <link href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">
    <link href="js/plugins/datatables/DT_bootstrap.css" rel="stylesheet">
    <link href="js/plugins/responsive-tables/responsive-tables.css" rel="stylesheet">

    

    <!-- Javascript -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/jquery-ui-1.8.21.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="js/Slate.js"></script>
  <script src="js/demos/demo.tables.js"></script>

    <script src="js/plugins/excanvas/excanvas.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.orderBars.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>

    <script src="js/demos/charts/bar.js"></script>
     <script src="js/plugins/datatables/jquery.dataTables.js"></script>
    <script src="js/plugins/datatables/DT_bootstrap.js"></script>
    <script src="js/plugins/responsive-tables/responsive-tables.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>
    <!-- Header Start -->
    <?php include('template/header.php'); ?>
    <!-- /#header -->

    <!--Nav Start  -->
    <?php include('template/nav.php') ?>
    <!-- /#nav -->

    <?php //include('middlepage/home.php'); ?>
    <!-- /#content -->
    <?php

         @$page=$_REQUEST['page'];
     //  echo "<pre>";
       //print_r($_SERVER);
        if($page=='' && basename($_SERVER['PHP_SELF'])=='index.php' )
        {
            $page='home';
        }
        if($page!='' && file_exists('middlepage/'.$page.'.php') )
        {
            include('middlepage/'.$page.'.php');

        }
        else
        {
            include('middlepage/error.php');
        }

     ?>

    <!--Footer Start  -->
    <?php include('template/footer.php'); ?>
    <!-- /#footer -->

</body>
</html>