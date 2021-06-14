<?php
if(isset($_REQUEST['submit']))
{
	//print_r($_REQUEST);
	$email=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	@$type=$_REQUEST['type'];
	$_SESSION['developer_id'];
//exit;
	if ($type=='user') 
	{
		echo "User Login";
		$login="SELECT * FROM `user_registration` where `email` = '".$email."' AND `password`='".$password."' ";
		$qry=mysqli_query($con,$login);
		$count=mysqli_num_rows($qry);
		//print_r($qry);
			if($count > 0)
			{
				$row=mysqli_fetch_assoc($qry);
				
		 		$_SESSION['user_id']=$row['user_id'];
				header("location:index.php");
			}else{
				header("location:index.php?page=login");
				echo "login not succesfully...";
			}
	}

	 if($type=='devloper')
	{
		echo "devlopr Login";
		$login="SELECT * FROM `developer_registration` where `email` = '".$email."' AND `password`='".$password."' ";
		$qry=mysqli_query($con,$login);
		$count=mysqli_num_rows($qry);
		//print_r($qry);
			if($count > 0)
			{
				$row=mysqli_fetch_assoc($qry);
				echo $_SESSION['developer_id']=$row['developer_id'];
			   header("location:index.php");
			}else{
				header("location:index.php?page=login");
				echo "login not succesfully...";
			}
	}
	}else
	{
		echo "errroro";
	}	
?>