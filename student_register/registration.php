<?php 
// if (isset($_GET['Message'])): 
// 	$msg = $_GET['Message'];?>

<?php 
// echo "<script>alert('$msg');</script>"; ?>
<?php 
// endif ?>

<!doctype html>
<html lang="en">

<head>
	<title>Admission Form</title>
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
		<div id="login" class="container">
	
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrap d-md-flex">
						<div class="d-none d-md-block text-wrap p-4 p-lg-5 img" style="background-image: url(images/abc.jpg);">
							
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="row justify-content-center py-md-5">
								<div class="col-lg-9">
									<div class="social-wrap">



									<span id="error1"> 
										<?php if (isset($_GET['Message'])): ?>
											<div class="alert">
												<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
												<h6 style="margin-top: 1;" ><?php echo $_GET['Message']; ?></h6>
											</div>
										<?php endif ?>
									</span>


										<h3 class="mt-0 pb-4 text-center" id="title4">Personal Details</h3>
										
									</div>
							
									<form action="JavaScript:void(0)" id="myform" class="form" method="post">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label  class="label" for="fullname">Full Name (Name On Marksheet)</label>
													<input type="text " id="fullname"  name="name" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div>  
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="ebox">Email Address</label>
													<input type="text" id="ebox"  name="email" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div>  
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="gen">Gender</label>
													<select style="color: gray; font-size: 14px;" id="gen" class="form__input form-control" name="gender" required>
														<option value="" selected="">Select</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
														<option value="Others">Others</option>
													</select>
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="dateob">Date of Birth</label>
													<input style="color: gray; font-size: 14px;" id="dateob" type="date" name="dob" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div>
												</div>
											</div>
											

											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="telnam1">Mobile Number</label>
													<input id="telnam1" style="font-size: 14px;" type="text" name="student_number" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="telnam2">Guardian Mobile Number</label>
													<input id="telnam2" style="font-size: 14px;" type="tel" name="parent_number" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div>
												</div>
											</div>

											
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="addr">Address</label>
													<input type="text" id="addr" name="address" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="citye">City</label>
													<input type="text" id="citye" name="city" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="pinco">Pin Code</label>
													<input type="text" id="pinco" name="pincode" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div>
												</div>
											</div>


											<div class="col-md-12">
												<div class="form-group">
													<br>
													<button id="mybtn" onclick="bvalidate()" type="submit" class="btn btn-primary submit p-3 disabled" name="register1">Next &raquo;</button>
										
												</div>
											</div>
										</div>
			
									</form>

									<div class="w-100">
										<p class="mt-4">I'm already a member! <a href="login.php">Sign In</a></p>
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
	<script src="js/p1.js"></script>
</body>

</html>