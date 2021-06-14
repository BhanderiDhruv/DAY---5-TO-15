<?php
print_r($_REQUEST);

	echo $action=$_REQUEST['action'];

	
	@$id=$_REQUEST['user_id'];
	$fname=$_REQUEST['first_name'];
	$lname=$_REQUEST['last_name'];
	$email=$_REQUEST['email'];
	$phone_no=$_REQUEST['phone_no'];
	$address=$_REQUEST['address'];
	$city=$_REQUEST['city'];
	$state=$_REQUEST['state'];
	@$profile=$_FILES['profile']['name'];
	$password=$_REQUEST['password'];
	$cpassword=$_REQUEST['cpassword'];
	@$temp_name=$_FILES['profile']['tmp_name'];
	
if ($password == $cpassword) 
	{

	switch ($action)
	{
		case 'insert':
			//echo "insert";
		move_uploaded_file($temp_name,"admin_theme/images/user/".$profile);

			echo $insert="INSERT INTO `user_registration` (`first_Name`,`last_Name`,`email`,`phone_no`,`gender`,`address`,`city`,`state`,`profile`,`password`,`cpassword`)VALUES('".$fname."','".$lname."','".$email."','".$phone_no."','".$gender."','".$address."','".$city."','".$state."','".$profile."','".$password."','".$cpassword."')"; 
		
			$qry=mysqli_query($con,$insert);
				if($qry)
				{
					header('location:index.php?page=login');
				}else
				{
					echo "not";
				}
			break;
		
		default:
			echo "Error Action Not Found ";
			break;
    }
}
  else
		{
		 	header('location:index.php?page=user-registration');
		}
  
 ?>