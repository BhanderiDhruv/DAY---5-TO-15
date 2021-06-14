<?php
    @$id=$_REQUEST['id'];
    $sel="SELECT * FROM `developer_registration` WHERE `developer_id`='".$id."'";
    $qry=mysqli_query($con,$sel);
    $row=mysqli_fetch_array($qry);
    if(@$_REQUEST['id']!='')
    {
        $action="update";
    }else{
        $action="insert";
    }
?>

<!-- FORM POPUP -->
	<div class="form-popup">

				<!-- FORM BOX ITEM -->
				<div class="form-box-item">
					<h4>Developer Registeration</h4>
					<hr class="line-separator">
					<!-- profile IMAGE UPLOAD -->

					<form id="register-form" method="post" action="index.php?page=developerreg-action" enctype="multipart/form-data">
					<input type="hidden" name="action" value="<?php echo $action; ?>">

					<div class="profile-image">
						<div class="profile-image-data">
							<figure class="user-avatar medium">
								<img src="images/dashboard/profile-default-image.png" alt="profile-default-image">
							</figure>
							<!-- <p class="text-header">profile Photo</p> -->
							<label for="profile" class="rl-label required">profile Photo</label>
							<input class="input-file" id="fileInput" name="profile" type="file">
							<!-- <p class="upload-details">Minimum size 70x70px</p> -->
							
						</div>
					</div><br>
					<!-- profile IMAGE UPLOAD -->

					<!-- <form id="profile-info-form"> -->
						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							
							<label for="first_name" class="rl-label required">First Name</label>
							<input type="text" id="username2" name="first_name" placeholder="Enter your firstname here..." required>
							
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="last_name" class="rl-label required">Last name</label>
							<input type="text" id="username2" name="last_name" placeholder="Enter your lastname here..." required>

						</div>
						<!-- /INPUT CONTAINER -->		

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="new_email" class="rl-label">Email</label>
							<input type="email" id="new_email" name="email" placeholder="your email address here..." required>
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="city" class="rl-label required">City</label>
							<input type="text" id="address" name="city" placeholder="Enter your city here..." required>
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="state" class="rl-label required">State</label>
							<input type="text" id="address" name="state" placeholder="Enter your state here..." required>
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="last_name" class="rl-label required">developing language</label>
							<input type="text" id="username2" name="developing_language" placeholder="Enter your lastname here..." required>
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="last_name" class="rl-label required">developing experience</label>
							<input type="text" id="username2" name="developing_experience" placeholder="Enter your lastname here..." required>							
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="phone_no" class="rl-label required">Phone no</label>
							<input type="number" id="username2" name="phone_no" maxlength="10" placeholder="Enter your phone no here..." required>
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="password2" class="rl-label required">New Password</label>
							<input type="password" id="password2" name="password" placeholder="Enter your password here..." required>							
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="repeat_password2" class="rl-label required">Repeat Password</label>
						<input type="password" id="repeat_password2" name="cpassword" placeholder="Repeat your password here..." required>
						</div>
						<!-- /INPUT CONTAINER -->


						<button class="button mid dark">Register <span class="primary">Now!</span></button>
		
					</form>
				</div>
				<!-- /FORM BOX ITEM -->

			</div>
			<!-- /FORM POPUP -->
