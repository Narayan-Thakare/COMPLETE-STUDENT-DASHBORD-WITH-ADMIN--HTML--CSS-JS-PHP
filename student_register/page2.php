<?php

if((isset($_POST["register1"])))
{

	$email = $_POST['email'];

	include "config.php";

	$Message = "This email id already exists!!  Please Login to continue";

	$sql="select email from student_admission where (email='$email');";
	$res=mysqli_query($conn,$sql);

	if (mysqli_num_rows($res) > 0) 
	{
	  	$row = mysqli_fetch_assoc($res);
	  	if($email==isset($row['email']))
	  	{
			header("Location:registration.php?Message=".$Message);
	  	} 
	}
	else
	{
		session_start();

		$_SESSION["name"]=$_POST["name"];
		$_SESSION["email"]=$_POST['email'];
		$_SESSION["gender"]=$_POST['gender'];
		$_SESSION["dob"]=$_POST['dob'];
		$_SESSION["student_number"]=$_POST['student_number'];
		$_SESSION["parent_number"]=$_POST['parent_number'];
		$_SESSION["address"]=$_POST['address'];
		$_SESSION["city"]=$_POST['city'];
		$_SESSION["pincode"]=$_POST['pincode'];

		// echo $_SESSION["name"];
	}
	}
	// else{
	// 	header("Location: index.php");
	// }
	?>



<!doctype html>
<html lang="en">

<head>
	<title>Admission Form (Part-2)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>

	<section class="ftco-section">
		<div class="container">
		
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrap d-md-flex">
						<div class="d-none d-md-block text-wrap p-4 p-lg-5 img" style="background-image: url(images/abc.jpg);">
							
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="row justify-content-center py-md-5">
								<div class="col-lg-9">
									<div class="social-wrap">
										<h3 class="mt-0 pb-4 text-center" id="title4">Education/Job Details</h3>
										
									</div>
									<form id="myform" action="javascript:void(0);" class="signup-form" method="post">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="workin">Working</label>
													<select style="color: gray; font-size: 14px;" id="workin" class="form__input form-control" name="working" required>
														<option value="" selected="">Select</option>
														<option value="working">Working</option>
														<option value="student">Student</option>
					 									<option value="others">Others</option>
													</select>
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="ccname">College/Company Name</label>
													<input id="ccname" type="text" name="cname" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>
							
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="enumber">Enrollment Number</label>
													<input type="text" id="enumber" name="e_number" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>

											<div class="col-md-12">
                                                <br>
												<div class="form-group" style="display: flex; flex-direction: row; justify-content: space-between;">
													
                                                    <a href="index.php" class="btn btn-primary submit p-3">&laquo; Previous</a>
                                                    <button type="submit" name="register2" id="mybtn" class="btn btn-primary submit p-3 disabled">Next &raquo;</button>
													<!-- <button type="submit" class="btn btn-primary submit p-3">Next</button> -->
												
												</div>
											</div>
										</div>

									</form>
								
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
	<script src="js/p2.js"></script>
</body>

</html>