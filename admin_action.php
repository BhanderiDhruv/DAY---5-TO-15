<?php
print_r($_FILES);

	echo $action=$_REQUEST['action'];

	$id=$_REQUEST['admin_id'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$cpassword=$_REQUEST['cpassword'];
	$gender=$_REQUEST['gender'];
	/*$status=$_REQUEST['status'];*/
	$profile=$_FILES['profile']['name'];
	$temp_name=$_FILES['profile']['tmp_name'];

	if ($password == $cpassword) 
	{

	switch ($action)
	{
		case 'insert':
			//echo "insert";
		move_uploaded_file($temp_name,"images/admin/".$profile);
			 $insert="INSERT INTO `admin` (`Name`,`Email`,`Password`,`cpassword`,`profile`,`gender`)VALUES('".$name."','".$email."','".$password."','".$cpassword."','".$profile."','".$gender."')";
			
			$qry=mysqli_query($con,$insert);
				if($qry)
				{
					$_SESSION['ins_msg']="data are insert succesfully...";
					header('location:index.php?page=admin_list');
				}else
				{
					echo "not";
				}
			break;
			
			case 'update':
		/*	echo "update";*/
				$update="UPDATE `admin` SET `name`='".$name."',`email`='".$email."',`password`='".$password."',`cpassword`='".$cpassword."',`gender`='".$gender."' WHERE `admin_id`='".$id."' ";

				$qry=mysqli_query($con,$update);
				if ($profile!='') 
				{
					$up="SELECT * FROM `admin` where `admin_id` = '".$id."'";
					$img_sel=mysqli_query($con,$up);
					$rw_img=mysqli_fetch_assoc($img_sel);
					unlink("images/admin/".$rw_img['profile']);

					move_uploaded_file($temp_name, "images/admin/".$profile);
					$img_update="UPDATE `admin` set `profile` = '".$profile."' WHERE `admin_id`='".$id."'";

					$img_qry=mysqli_query($con,$img_update);
				}
				if($qry || $img_qry)
				{
					$_SESSION['upd_msg']="data are update succesfully...";
					echo "update";
					header('location:index.php?page=admin_list');
				}else{
					echo "not";
				}
			break;
	
			case 'delete':
					echo $id=$_REQUEST['id'];
					$sel = "SELECT * FROM `admin` where `admin_id`='".$id."' ";
					$qry = mysqli_query($con,$sel);
					$rw_img = mysqli_fetch_assoc($qry);
					unlink("images/admin/".$rw_img['profile']);
					
					//echo "delete action run";

						$del="DELETE FROM `admin` WHERE `admin_id`='".$id."' ";
						$qry=mysqli_query($con,$del);
						if($qry)
						{
							$_SESSION['err_msg']="data is delete succesfully...";
							header('location:index.php?page=admin_list');
							echo "Delete okok";
						}
						else{
							echo "Delete Not";
						}
			break;
		
		default:
			echo "Action Not Found";
			break;
    }
}
    else
		{
		 	header('location:index.php?page=admin_form');
		}

 ?>