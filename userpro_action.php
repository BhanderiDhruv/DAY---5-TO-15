<?php
print_r($_FILES);

	echo $action=$_REQUEST['action'];

	$id=$_REQUEST['profile_id'];
	$first_name=$_REQUEST['first_name'];
	$last_name=$_REQUEST['last_name'];
	$email=$_REQUEST['email'];
	$gender=$_REQUEST['gender'];
	$phone_no=$_REQUEST['phone_no'];
	$profile=$_FILES['profile']['name'];
	$project=$_REQUEST['project'];

	switch ($action)
	{
		case 'insert':
			//echo "insert";
		move_uploaded_file($temp_name,"images/user/".$profile);
			echo $insert="INSERT INTO `user_profile` (`first_name`,`last_name`,`email`,`gender`,`phone_no`,`profile`,`project`)VALUES('".$first_name."','".$last_name."','".$email."','".$gender."','".$phone_no."','".$profile."','".$project."')";
			
			$qry=mysqli_query($con,$insert);
				if($qry)
				{
					$_SESSION['ins_msg']="data are insert successfully...";
					header('location:index.php?page=userpro_list');
				}else
				{
					echo "not";
				}
			break;
			
			case 'update':
			$update="UPDATE `user_profile` SET `first_name`='".$first_name."',`last_name`='".$last_name."',`email`='".$email."',`gender`='".$gender."',`phone_no`='".$phone_no."',`project`='".$project."' WHERE `profile_id`='".$id."' ";

			$qry=mysqli_query($con,$update);
			if ($profile!='') 
				{
					$up="SELECT * FROM `user_profile` where `profile_id` = '".$id."'";
					$img_sel=mysqli_query($con,$up);
					$rw_img=mysqli_fetch_assoc($img_sel);
					unlink("images/user/".$rw_img['profile']);

					move_uploaded_file($temp_name, "images/user/".$profile);
					$img_update="UPDATE `user_profile` set `profile` = '".$profile."' WHERE `profile_id`='".$id."'";

					$img_qry=mysqli_query($con,$img_update);
				}
				if($qry || $img_qry)
				{
					echo "update";
					$_SESSION['upd_msg']="data are update successfully...";
					header('location:index.php?page=userpro_list');
				}else{
					echo "not";
				}
			/*echo "update";*/
			break;
			
			case 'delete':
					echo $id=$_REQUEST['id'];
					$sel = "SELECT * FROM `user_profile` where `profile_id`='".$id."' ";
					$qry = mysql_query($con,$sel);
					$rw_img = mysqli_fetch_assoc($qry);
					unlink("images/user/".$rw_img['profile']);

			//echo "delete action run";
				$del="DELETE FROM `user_profile` WHERE `profile_id`='".$id."' ";
				$qry=mysqli_query($con,$del);
				if($qry)
					{
						$_SESSION['err_msg']="data are delete successfully...";
						header('location:index.php?page=userpro_list');
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