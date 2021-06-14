<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="css/vendor/simple-line-icons.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- favicon -->
	<link rel="icon" href="favicon.ico">
	<title>Emerald Dragon | Login and Register</title>
</head>
<body>


	<?php include("middlepage/mobile-menu.php") ?>


	<!-- SECTION HEADLINE -->
	<div class="section-headline-wrap">
		<div class="section-headline">
			<h2>Login and Register Boxes</h2>
			<p>Home<span class="separator">/</span><span class="current-section">Boxes</span></p>
		</div>
	</div>
	<!-- /SECTION HEADLINE -->

	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section demo">
			<!-- FORM POPUP -->
			<div class="form-popup">
				<!-- CLOSE BTN -->
				<div class="close-btn">
					<!-- SVG PLUS -->
					<svg class="svg-plus">
						<use xlink:href="#svg-plus"></use>
					</svg>
					<!-- /SVG PLUS -->
				</div>
				<!-- /CLOSE BTN -->

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<h4 class="popup-title">Login to your Account</h4>
					<!-- LINE SEPARATOR -->
					<hr class="line-separator">
					<!-- /LINE SEPARATOR -->
					<form id="login-form">
						<label for="username" class="rl-label">Username</label>
						<input type="text" id="username" name="username" placeholder="Enter your username here...">
						<label for="password" class="rl-label">Password</label>
						<input type="password" id="password" name="password" placeholder="Enter your password here...">
						<!-- CHECKBOX -->
						<input type="checkbox" id="remember" name="remember" checked>
						<label for="remember" class="label-check">
							<span class="checkbox primary primary"><span></span></span>
							Remember username and password
						</label>
						<!-- /CHECKBOX -->
						<p>Forgot your password? <a href="index.php?page=login-register" class="primary">Click here!</a></p>
						<button class="button mid dark">Login <span class="primary">Now!</span></button>
					</form>
					<!-- LINE SEPARATOR -->
					<hr class="line-separator double">
					<!-- /LINE SEPARATOR -->
					<a href="index.php?page=login-register" class="button mid fb half">Login with Facebook</a>
					<a href="index.php?page=login-register" class="button mid twt half">Login with Twitter</a>
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->

			<!-- FORM POPUP -->
			<div class="form-popup">
				<!-- CLOSE BTN -->
				<div class="close-btn">
					<!-- SVG PLUS -->
					<svg class="svg-plus">
						<use xlink:href="#svg-plus"></use>
					</svg>
					<!-- /SVG PLUS -->
				</div>
				<!-- /CLOSE BTN -->

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<h4 class="popup-title">Restore your Password</h4>
					<!-- LINE SEPARATOR -->
					<hr class="line-separator short">
					<!-- /LINE SEPARATOR -->
					<p class="spaced">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					<form id="restore-pwd-form">
						<label for="email_address" class="rl-label">Email Address</label>
						<input type="email" id="email_address" name="email_address" placeholder="Enter your email address...">
						<!-- CHECKBOX -->
						<input type="checkbox" id="generate_pwd" name="generate_pwd" checked>
						<label for="generate_pwd" class="label-check">
							<span class="checkbox primary primary"><span></span></span>
							Generate new password
						</label>
						<!-- /CHECKBOX -->
						<button class="button mid dark no-space">Restore your <span class="primary">Password</span></button>
					</form>
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->

			<!-- FORM POPUP -->
			<div class="form-popup">
				<!-- CLOSE BTN -->
				<div class="close-btn">
					<!-- SVG PLUS -->
					<svg class="svg-plus">
						<use xlink:href="#svg-plus"></use>
					</svg>
					<!-- /SVG PLUS -->
				</div>
				<!-- /CLOSE BTN -->

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<h4 class="popup-title">Register Account</h4>
					<!-- LINE SEPARATOR -->
					<hr class="line-separator">
					<!-- /LINE SEPARATOR -->
					<form id="register-form">
						<label for="email_address2" class="rl-label required">Email Address</label>
						<input type="email" id="email_address2" name="email_address2" placeholder="Enter your email address here...">
						<label for="username2" class="rl-label">Username</label>
						<input type="text" id="username2" name="username2" placeholder="Enter your username here...">
						<label for="password2" class="rl-label required">Password</label>
						<input type="password" id="password2" name="password2" placeholder="Enter your password here...">
						<label for="repeat_password2" class="rl-label required">Repeat Password</label>
						<input type="password" id="repeat_password2" name="repeat_password2" placeholder="Repeat your password here...">
						<button class="button mid dark">Register <span class="primary">Now!</span></button>
					</form>
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->

			<!-- FORM POPUP -->
			<div class="form-popup">
				<!-- CLOSE BTN -->
				<div class="close-btn">
					<!-- SVG PLUS -->
					<svg class="svg-plus">
						<use xlink:href="#svg-plus"></use>
					</svg>
					<!-- /SVG PLUS -->
				</div>
				<!-- /CLOSE BTN -->

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<h4 class="popup-title">Register Account</h4>
					<!-- LINE SEPARATOR -->
					<hr class="line-separator">
					<!-- /LINE SEPARATOR -->
					<form id="register-form2">
						<label for="email_address3" class="rl-label required">Email Address</label>
						<input type="email" id="email_address3" name="email_address3" placeholder="Enter your email address here...">
						<label for="username3" class="rl-label">Username</label>
						<input type="text" id="username3" name="username3" placeholder="Enter your username here...">
						<label for="password3" class="rl-label required">Password</label>
						<input type="password" id="password3" name="password3" placeholder="Enter your password here...">
						<label for="repeat_password3" class="rl-label required">Repeat Password</label>
						<input type="password" id="repeat_password3" name="repeat_password3" placeholder="Repeat your password here...">
						<p class="highlighted"><span>Thanks for your registration!</span> Please check your email inbox for our email to complete the registration and activate your account!</p>
						<button class="button mid primary">Email Sent!</button>
					</form>
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->

			<!-- FORM POPUP -->
			<div class="form-popup">
				<!-- CLOSE BTN -->
				<div class="close-btn">
					<!-- SVG PLUS -->
					<svg class="svg-plus">
						<use xlink:href="#svg-plus"></use>
					</svg>
					<!-- /SVG PLUS -->
				</div>
				<!-- /CLOSE BTN -->

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<h4 class="popup-title">Register Account</h4>
					<!-- LINE SEPARATOR -->
					<hr class="line-separator">
					<!-- /LINE SEPARATOR -->
					<form id="register-form3">
						<label for="email_address4" class="rl-label required">Email Address</label>
						<input type="email" id="email_address4" name="email_address4" class="invalid" placeholder="Enter your email address here...">
						<label for="username4" class="rl-label">Username</label>
						<input type="text" id="username4" name="username4" placeholder="Enter your username here...">
						<label for="password4" class="rl-label required">Password</label>
						<input type="password" id="password4" name="password4" placeholder="Enter your password here...">
						<label for="repeat_password4" class="rl-label required">Repeat Password</label>
						<input type="password" id="repeat_password4" name="repeat_password4" placeholder="Repeat your password here...">
						<p class="highlighted"><span>Sorry!</span> That email is already registered</p>
						<button class="button mid dark">Register <span class="primary">Now!</span></button>
					</form>
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->

			<!-- FORM POPUP -->
			<div class="form-popup">
				<!-- CLOSE BTN -->
				<div class="close-btn">
					<!-- SVG PLUS -->
					<svg class="svg-plus">
						<use xlink:href="#svg-plus"></use>
					</svg>
					<!-- /SVG PLUS -->
				</div>
				<!-- /CLOSE BTN -->

				<!-- FORM POPUP HEADLINE -->
				<div class="form-popup-headline secondary">
					<h2>Login to your Account</h2>
					<p>Enter now to your account and start buying and selling!</p>
				</div>
				<!-- /FORM POPUP HEADLINE -->

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<form id="login-form2">
						<label for="username5" class="rl-label">Username</label>
						<input type="text" id="username5" name="username5" placeholder="Enter your username here...">
						<label for="password5" class="rl-label">Password</label>
						<input type="password" id="password5" name="password5" placeholder="Enter your password here...">
						<!-- CHECKBOX -->
						<input type="checkbox" id="remember2" name="remember2" checked>
						<label for="remember2" class="label-check">
							<span class="checkbox primary primary"><span></span></span>
							Remember username and password
						</label>
						<!-- /CHECKBOX -->
						<p>Forgot your password? <a href="index.php?page=login-register" class="primary">Click here!</a></p>
						<button class="button mid dark">Login <span class="primary">Now!</span></button>
					</form>
					<!-- LINE SEPARATOR -->
					<hr class="line-separator double">
					<!-- /LINE SEPARATOR -->
					<a href="index.php?page=login-register" class="button mid fb half">Login with Facebook</a>
					<a href="index.php?page=login-register" class="button mid twt half">Login with Twitter</a>
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->

			<!-- FORM POPUP -->
			<div class="form-popup">
				<!-- CLOSE BTN -->
				<div class="close-btn">
					<!-- SVG PLUS -->
					<svg class="svg-plus">
						<use xlink:href="#svg-plus"></use>
					</svg>
					<!-- /SVG PLUS -->
				</div>
				<!-- /CLOSE BTN -->

				<!-- FORM POPUP HEADLINE -->
				<div class="form-popup-headline primary">
					<h2>Register Account</h2>
					<p>Register now and start making money from home!</p>
				</div>
				<!-- /FORM POPUP HEADLINE -->

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<form id="register-form4">
						<label for="email_address6" class="rl-label required">Email Address</label>
						<input type="email" id="email_address6" name="email_address6" placeholder="Enter your email address here...">
						<label for="username6" class="rl-label">Username</label>
						<input type="text" id="username6" name="username6" placeholder="Enter your username here...">
						<label for="password6" class="rl-label required">Password</label>
						<input type="password" id="password6" name="password6" placeholder="Enter your password here...">
						<label for="repeat_password6" class="rl-label required">Repeat Password</label>
						<input type="password" id="repeat_password6" name="repeat_password6" placeholder="Repeat your password here...">
						<button class="button mid dark">Register <span class="primary">Now!</span></button>
					</form>
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- /SECTION -->
