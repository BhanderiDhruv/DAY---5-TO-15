<?php
	
	
	 $email=$_REQUEST['username'];
	 $password=$_REQUEST['password'];

	/*$login="SELECT * FROM `admin`";*/
	
	$login="SELECT * FROM `admin` where `email` = '".$email."' AND `password`='".$password."' ";
	$qry=mysqli_query($con,$login);
	$count=mysqli_num_rows($qry);
	//print_r($qry);
		if($count > 0)
	{
		$row=mysqli_fetch_assoc($qry);
		 $_SESSION['admin_id']=$row['admin_id'];
		header("location:index.php");

		echo "login succesfully...";
		//header('location:index.php?page=admin_list');
	}else{
			header("location:login.php");
			echo "login not succesfully...";
		}
?>