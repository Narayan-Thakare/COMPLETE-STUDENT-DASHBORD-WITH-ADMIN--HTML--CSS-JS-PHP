<?php
session_start();
include "config.php";

// if(isset($_POST["register2"]) && isset($_POST['e_number']) && !empty($_POST["e_number"]))

	if(isset($_POST["register2"]))
	{

		$_SESSION["working"] = $_POST["working"];
		$_SESSION["cname"] = $_POST['cname'];
		$_SESSION["e_number"] = $_POST['e_number'];
	}
	// else {
		
	// 	header("Location: page2.php");
	// }
	
	
	?>

<!doctype html>
<html lang="en">

<head>
	<title>Admission Form (Part-3)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

	<style>
		.errorMsgColor {
			color : #dc3545;
		}
	</style>
	
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
										<h3 class="mt-0 pb-4 text-center" id="title4">Branch Details</h3>
									
									</div>
									<form id="myform" action="javascript:void(0);" class="signup-form" method="post" enctype="multipart/form-data">
										<div class="row">

											<?php 
												$query ="SELECT branch_name FROM branch_details";
												$result = $conn->query($query);
												if($result->num_rows> 0){
												$branch_list= mysqli_fetch_all($result, MYSQLI_ASSOC);
												}
											?>

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="branch">Branch</label>
													<select id="brunch" style="color: gray; font-size: 14px;" class="form__input form-control" name="branch" required="">
														<option disabled="" value="" selected="">Select Branch</option>

														<?php
															foreach ($branch_list as $option) {
														?>
														<option><?php echo $option['branch_name']; ?></option>
														<?php
															}
														?>
													</select>
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>

										
											<?php 
												$query ="SELECT course_name FROM course_details";
												$result = $conn->query($query);
												if($result->num_rows> 0){
												$options= mysqli_fetch_all($result, MYSQLI_ASSOC);
												}
											?>

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="course">Course</label>
														<select id="coname" style="color: gray; font-size: 14px;" class="form__input form-control"  name="course" required="">
														<option disabled="" value="" selected="">Select Course</option>
														<?php
															foreach ($options as $option) {
														?>
														<option><?php echo $option['course_name']; ?></option>
														<?php
															}
														?>
													</select>
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>


											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="btname">Batch Timing</label>
													<select id="btname" style="color: gray; font-size: 14px;" class="form__input form-control" name="batch_timing" required="">
														<option disabled="" value="" selected="">Select Batch Time</option>
														<option>9.00 TO 10.00 AM</option>
														<option>10.00 TO 11.00 AM</option>
														<option>11.00 TO 12.00 PM</option>
														<option>12.00 TO 1.00 PM</option>
														<option>1.00 TO 2.00 PM</option>
														<option>2.00 TO 3.00 PM</option>
														<option>3.00 TO 4.00 PM</option>
														<option>4.00 TO 5.00 PM</option>
														<option>5.00 TO 6.00 PM</option>
														<option>6.00 TO 7.00 PM</option>
														<option>7.00 TO 8.00 PM</option>
														<option>8.00 TO 9.00 PM</option>
													</select>	
													<div class="mb-2 text-danger form__input-error-message"></div> 											
												</div>
											</div>


											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="tutor_name">Tutor Name</label>
													<input type="text" id="tname" name="tutor_name" class="form__input form-control">
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="photofile">Student Photo Upload (125KB max-size)</label>
													<span id="error1"> <?php if (isset($_GET['error1'])): ?>
														<p class="errorMsgColor"><?php echo $_GET['error1']; ?></p>
														<?php endif ?>
													</span>
													<input style="font-size: 14px; background-color: transparent;" id="sfilename" type="file" name="photofile" class="form__input form-control" accept="image/png, image/jpeg, image/jpg" required>
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="dob">Document Photo Upload (125KB max-size)</label>
													<span id="error2"> <?php if (isset($_GET['error2'])): ?>
														<p class="errorMsgColor"><?php echo $_GET['error2']; ?></p>
														<?php endif ?>
													</span>
													<input style="font-size: 14px; background-color: transparent;" id="dfilename" type="file" name="docfile" class="form__input form-control" accept="image/png, image/jpeg, image/jpg" required>
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>

											

											<div class="col-md-12">
                                                <br>
												<div class="form-group" style="display: flex; flex-direction: row; justify-content: space-between;">
													
                                                    <a href="page2.php" class="btn btn-primary submit p-3">&laquo; Previous</a>
                                                    <button type="submit" name="register3" id="mybtn" class="btn btn-primary submit p-3 disabled">Next &raquo;</button>
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
	<script src="js/p3.js"></script>
</body>

</html>