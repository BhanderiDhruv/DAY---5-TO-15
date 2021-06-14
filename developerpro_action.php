<?php
print_r($_FILES);

	echo $action=$_REQUEST['action'];

	$id=$_REQUEST['profile_id'];
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$email=$_REQUEST['email'];
	$gender=$_REQUEST['gender'];
	$phone_no=$_REQUEST['phone_no'];
	$developing_language=$_REQUEST['developing_language'];
	$project=$_REQUEST['project'];

	switch ($action)
	{
		case 'insert':
			//echo "insert";
		/*move_uploaded_file($temp_name,"images/developer/".$profile);*/
			echo $insert="INSERT INTO `developer_profile` (`first_name`,`last_name`,`email`,`gender`,`phone_no`,`developing_language`,`complite_project`)VALUES('".$fname."','".$lname."','".$email."','".$gender."','".$phone_no."','".$developing_language."','".$project."')";
			
			$qry=mysqli_query($con,$insert);
				if($qry)
				{
					$_SESSION['ins_msg']="data are insert succesfully...";
					header('location:index.php?page=developerpro_list');
				}else
				{
					echo "not";
				}
			break;
			
			case 'update':
			$update="UPDATE `developer_profile` SET `first_name`='".$fname."',`last_name`='".$lname."',`email`='".$email."',`gender`='".$gender."',`phone_no`='".$phone_no."',`developing_language`='".$developing_language."',`complite_project`='".$project."' WHERE `profile_id`='".$id."' ";

			$qry=mysqli_query($con,$update);
			if($qry)
				{
					echo "update";
					$_SESSION['upd_msg']="data are update succesfully...";
					header('location:index.php?page=developerpro_list');
				}else{
					echo "not";
				}
			echo "update";
			break;
			
			case 'delete':
					echo $id=$_REQUEST['id'];
			//echo "delete action run";
				$del="DELETE FROM `developer_profile` WHERE `profile_id`='".$id."' ";
				$qry=mysqli_query($con,$del);
				if($qry)
					{
						$_SESSION['err_msg']="data are delete succesfully...";
						header('location:index.php?page=developerpro_list');
					}
				else{
						echo "Delete Not";
					}
			break;
		
		default:
			echo "Error ";
			break;
    }
?>