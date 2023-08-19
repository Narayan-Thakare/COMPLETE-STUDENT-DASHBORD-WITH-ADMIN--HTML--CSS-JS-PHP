<?php

session_start();

?>


<!doctype html>
<html lang="en">

<head>
	<title>SignIn Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

	<style>
		.alert {
		padding: 10px;
		background-color: #ff5d5d;
		color: white;
		margin-bottom: 2rem;
	
		}

		.closebtn {
		margin-left: 15px;
		color: white;
		font-weight: bold;
		float: right;
		font-size: 20px;
		line-height: 20px;
		cursor: pointer;
		transition: 0.3s;
		}

		.closebtn:hover {
		color: black;
		}

		
	</style>

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">ASTERISC.IN (Admission Form)</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrap d-md-flex">
						<div class="d-none d-md-block text-wrap p-4 p-lg-5 img" style="background-image: url(images/abc.jpg);">
							<!-- <div class="d-none d-md-block text-wrap p-4 p-lg-5 d-flex img" style="background-image: url(images/abc.jpg);"> -->

							<!-- <div class="text w-100">
								<h2 class="mb-4">Welcome to Sign In</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and
									Consonantia, there live the blind texts.</p>
							</div> -->
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="row justify-content-center py-md-5">
								<div class="col-lg-9">
									<div class="social-wrap">

									<span id="error1"> 
										<?php if (isset($_GET['loginError'])): ?>
											<div class="alert">
												<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
												<h5 style="margin-top: 1; color:white;" ><?php echo $_GET['loginError']; ?></h5>
											</div>
										<?php endif ?>
									</span>

										<h3 class="mt-0 pb-4 text-center" id="title4">Sign In</h3>
										<!-- <p class="social-media d-flex justify-content-center">
				      				<a href="#" class="social-icon google d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a>
											<a href="#" class="social-icon facebook d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
											<a href="#" class="social-icon twitter d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
										</p>
										<p class="or">
				          		<span>or</span>
				          	</p> -->
									</div>
									<form action="loginAction.php" class="signup-form" method="post">
										<div class="row">

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="email">Email</label>
													<input type="text" name="email" class="form-control">
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="password">Password</label>
													<input type="password" name="password" class="form-control">
												</div>
											</div>

											

											<!-- <div class="col-md-12 my-4">
												<div class="form-group">
													<div class="w-100">
														<label class="checkbox-wrap checkbox-primary">I agree all
															statements in terms of service
															<input type="checkbox" checked>
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
											</div> -->

											<div class="col-md-12">
												<div class="form-group">
													<br>
													<button type="submit" name="login" class="btn btn-primary submit p-3">Sign In</button>
													<!-- <button type="submit" class="btn btn-primary submit p-3">Next</button> -->
												
												</div>
											</div>
										</div>

									</form>
									<div class="w-100">
										<p class="mt-4">Create a new account! <a href="registration.php">Sign Up</a>  || <a href="\Sammer\student_register\admin\adminlogin.html">Admin</a></p>
									

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="script.js"></script>
</body>

</html>

