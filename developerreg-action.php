<?php
print_r($_FILES);

	echo $action=$_REQUEST['action'];
	@$id=$_REQUEST['developer_id'];
	$first_name=$_REQUEST['first_name'];
	$last_name=$_REQUEST['last_name'];
	$email=$_REQUEST['email'];
	$phone_no=$_REQUEST['phone_no'];
	
	$city=$_REQUEST['city'];
	$state=$_REQUEST['state'];

	$developing_language=$_REQUEST['developing_language'];
	$developing_experience=$_REQUEST['developing_experience'];
	
	$password=$_REQUEST['password'];
	$cpassword=$_REQUEST['cpassword'];

	$profile=$_FILES['profile']['name'];
	$temp_name=$_FILES['profile']['tmp_name'];
	/*print_r($_FILES);*/
	/*	
	$status=$_REQUEST['status'];
	*/
if ($password == $cpassword) 
	{
	switch ($action)
	{
		case 'insert':
			//echo "insert";
		move_uploaded_file($temp_name,"admin_theme/images/developer/".$profile);

			echo $insert="INSERT INTO `developer_registration` (`first_Name`,`last_Name`,`email`,`phone_no`,`city`,`state`,`developing_language`,`developing_experience`,`profile`,`password`,`cpassword`)VALUES('".$first_name."','".$last_name."','".$email."','".$phone_no."','".$city."','".$state."','".$developing_language."','".$developing_experience."','".$profile."','".$password."','".$cpassword."')";
		
			$qry=mysqli_query($con,$insert);
				if($qry)
				{
					header('location:index.php?page=login');
				}else
				{
					echo "not";
				}
			break;	
    }
}
    else
		{
		 	header('location:index.php?page=developer-registration');
		}

 ?>