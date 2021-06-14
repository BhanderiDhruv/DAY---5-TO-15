<?php if(!isset($_SESSION['admin_id']) && $_SESSION['admin_id']=='' )
    {
        header("location:login.php");
    }
    ?>