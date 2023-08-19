<?php
session_start();
	if(isset($_POST["register4"])){
		

		$total_fees = $_POST["total_fees"];
		$paid_fees = $_POST['paid_fees'];
		$payment_type = $_POST['payment_type'];
		$cheque_no = $_POST['cheque_no'];
		$admission_date = $_POST['admission_date'];
		$receipt_number = $_POST['receipt_number'];

		$_SESSION["total_fees"] = $total_fees;
		$_SESSION["paid_fees"] = $paid_fees;
		$_SESSION["payment_type"] = $payment_type;
		$_SESSION["cheque_no"] = $cheque_no;
		$_SESSION["admission_date"] = $admission_date;
		$_SESSION["receipt_number"] = $receipt_number;
		
	}
	
	// echo $_SESSION["name"];

?>
<!doctype html>
<html lang="en">

<head>
	<title>Review Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div id="login" class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Confirm Your Details</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrap d-md-flex">
						<div class="col-lg-6 ">
							<div class="row justify-content-center py-md-5">
								<div class="col-lg-9">
									<div class="social-wrap">
										<h3 class="mt-0 pb-4 text-center" id="title4">Personal Details</h3>

									</div>

									<form action="submit.php" id="myform" class="form" method="post">
										<div class="row">
											<div class="col-md-12">
												<label class="label" for="name">Full Name (Name On Marksheet)</label>
												<div class="mb-2 text-dark">
													<input type="text" value="<?=$_SESSION["name"]?>" class="form__input form-control" disabled>
													<!-- <span id="fullnameid-rvw"></span> -->
												</div>
											</div>

											<div class="col-md-12">
												<label class="label" for="name">Email Address</label>
												<div class="mb-2 text-dark">
													<input type="text" value="<?=$_SESSION["email"]?>" class="form__input form-control" disabled>
													<!-- <span id="emailid-rvw"></span> -->
												</div>
											</div>

											<div class="col-md-6">
												<label class="label" for="name">Gender</label>
												<div class="mb-2 text-dark">
													<input type="text" value="<?=$_SESSION["gender"]?>" class="form__input form-control" disabled>
													<!-- <span id="genid-rvw"></span> -->
												</div>
											</div>

											<div class="col-md-6">
												<label class="label" for="name">Date of Birth</label>
												<div class="mb-2 text-dark">
													<input type="text" value="<?=$_SESSION["dob"]?>" class="form__input form-control" disabled>
													<!-- <span id="dateobid-rvw"></span> -->
												</div>
											</div>


											<div class="col-md-6">
												<label class="label" for="name">Mobile Number</label>
												<div class="mb-2 text-dark">
													<input type="text" value="<?=$_SESSION["student_number"]?>" class="form__input form-control" disabled>
													<!-- <span id="snumberid-rvw"></span> -->
												</div>
											</div>

											<div class="col-md-6">
												<label class="label" for="name">Guardian Mobile Number</label>
												<div class="mb-2 text-dark">
													<input type="text" value="<?=$_SESSION["parent_number"]?>" class="form__input form-control" disabled>
													<!-- <span id="pnumberid-rvw"></span> -->
												</div>
											</div>


											<div class="col-md-12">
												<label class="label" for="name">Address</label>
												<div class="mb-2 text-dark">
													<input type="text" value="<?=$_SESSION["address"]?>" class="form__input form-control" disabled>
													<!-- <span id="addrid-rvw"></span> -->
												</div>
											</div>

											<div class="col-md-6">
												<label class="label" for="name">City</label>
												<div class="mb-2 text-dark">
													<input type="text" value="<?=$_SESSION["city"]?>" class="form__input form-control" disabled>
													<!-- <span id="cityeid-rvw"></span> -->
												</div>
											</div>

											<div class="col-md-6">
												<label class="label" for="name">Pin Code</label>
												<div class="mb-2 text-dark">
													<input type="text" value="<?=$_SESSION["pincode"]?>" class="form__input form-control" disabled>
													<!-- <span id="pincoid-rvw"></span> -->
												</div>
											</div>

											<!-- <div class="col-md-12">
												<div class="form-group">
													<br>
													<button id="mybtn" onclick="bvalidate()" type="submit" class="btn btn-primary submit p-3 disabled">Next &raquo;</button>
										
												</div>
											</div> -->
										</div>

									<!-- </form> -->

									<!-- <div class="w-100">
										<p class="mt-4">I'm already a member! <a href="#signin">Sign In</a></p>
									</div> -->
								</div>
							</div>

							<div class="row justify-content-center py-md-5">
								<div class="col-lg-9">
									<div class="social-wrap">
										<h3 class="mt-0 pb-4 text-center" id="title4">Employement Details</h3>

									</div>

									<!-- <form action="javascript:void(0);" id="myform" class="form"> -->
										<div class="row">
											<div class="col-md-12">
												<div class="col ">
													<label class="label" for="name">Working</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?=$_SESSION["working"]?>" class="form__input form-control" disabled>
														<!-- <span id="workinid-rvw"></span> -->
													</div>
												</div>
											</div>


											<div class="col-md-12">
												<div class="col ">
													<label class="label" for="name">College/Company Name</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?=$_SESSION["cname"]?>" class="form__input form-control" disabled>
														<!-- <span id="ccnameid-rvw"></span> -->
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="col ">
													<label class="label" for="name">Enrollment Number</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?=$_SESSION["e_number"]?>" class="form__input form-control" disabled>
														<!-- <span id="enumberid-rvw"></span> -->
													</div>
												</div>
											</div>



										</div>

									<!-- </form> -->


								</div>
							</div>
						</div>
						<div class="col-lg-6 ">
							<div class="row justify-content-center py-md-5">
								<div class="col-lg-9">
									<div class="social-wrap">
										<h3 class="mt-0 pb-4 text-center" id="title4">Branch Details
										</h3>

									</div>

									<!-- <form action="javascript:void(0);" id="myform" class="form"> -->
										<div class="row">
											<div class="col-md-12">
												<div class="col ">
													<label class="label" for="name">Branch</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?=$_SESSION["branch"]?>" class="form__input form-control" disabled>
														<!-- <span id="brunchid-rvw"></span> -->
													</div>
												</div>
											</div>


											<div class="col-md-12">
												<div class="col ">
													<label class="label" for="name">Course</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?=$_SESSION["course"]?>" class="form__input form-control" disabled>
														<!-- <span id="conameid-rvw"></span> -->
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="col ">
													<label class="label" for="name">Batch Timing</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?=$_SESSION["batch_timing"]?>" class="form__input form-control" disabled>
														<!-- <span id="btnameid-rvw"></span> -->
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="col ">
													<label class="label" for="name">Student Photo Upload</label>
													<div class="mb-2 text-dark">
													<img width="100" height="100" src="photoUploads/<?=$_SESSION["img"]?>" alt="photo">
														<!-- <img class="w-25 img-fluid" src="" id="uplo1-rvw"> -->
													</div>
												</div>
											</div>
											

											<div class="col-md-6">
												<div class="col ">
													<label class="label" for="name">Document Photo Upload</label>
													<div class="mb-2 text-dark">
													<img width="100" height="100" src="docUploads/<?=$_SESSION["doc"]?>" alt="document">
														<!-- <img class="w-25 img-fluid" src="" id="uplo2-rvw"> -->
													</div>
												</div>

											</div>

											<div class="col-md-12">
												<div class="col ">
													<label class="label" for="name">Tutor Name</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?= ($_SESSION["tutor_name"] == "") ? "NOT SET" : $_SESSION["tutor_name"]?>" class="form__input form-control" disabled>
														<!-- <span id="tnameid-rvw"></span> -->
													</div>
												</div>
											</div>


											<!-- <div class="col-md-12">
												<div class="col ">
													<label class="label" for="name">Total Fees</label>
													<div class="mb-2 text-dark">
														<input type="text" value="" class="form__input form-control" disabled>
														<span id="tfeesid-rvw"></span>
													</div>
												</div>
											</div> -->




										</div>

									<!-- </form> -->


								</div>
							</div>
							<div class="row justify-content-center py-md-5">
								<div class="col-lg-9">
									<div class="social-wrap">
										<h3 class="mt-0 pb-4 text-center" id="title4">Payment Details</h3>

									</div>

									<!-- <form action="javascript:void(0);" id="myform" class="form"> -->
										<div class="row">



											<div class="col-md-6">
												<div class="col ">
													<label class="label" for="name">Total Fees</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?=$_SESSION["total_fees"]?>" class="form__input form-control" disabled>
														<!-- <span id="tfeesid-rvw"></span> -->
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="col ">
													<label class="label" for="name">Paid Fees</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?=$_SESSION["paid_fees"]?>" class="form__input form-control" disabled>
														<!-- <span id="pfeesid-rvw"></span> -->
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="col ">
													<label class="label" for="name">Payment Type</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?=$_SESSION["payment_type"]?>" class="form__input form-control" disabled>
														<!-- <span id="ptypeid-rvw"></span> -->
													</div>
												</div>
											</div>


											<div class="col-md-6">
												<div class="col ">
													<label class="label" for="name">Admission Date</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?=$_SESSION["admission_date"]?>" class="form__input form-control" disabled>
														<!-- <span id="adateid-rvw"></span> -->
													</div>
												</div>

											</div>

											<div class="col-md-12">
												<div class="col ">
													<label class="label" for="name">Online Transation No./ Cheque
														No.</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?= ($_SESSION["cheque_no"] == "") ? "NOT SET" : $_SESSION["cheque_no"]?>" class="form__input form-control" disabled>
														<!-- <span id="otnoid-rvw"></span> -->
													</div>
												</div>
											</div>



											<div class="col-md-12">
												<div class="col ">
													<label class="label" for="name">Receipt Number</label>
													<div class="mb-2 text-dark">
														<input type="text" value="<?=$_SESSION["receipt_number"]?>" class="form__input form-control" disabled>
														<!-- <span id="rnoid-rvw"></span> -->
													</div>
												</div>
											</div>

											<div class="col-md-12">
                                                <br>
												<div class="form-group" style="display: flex; flex-direction: row; justify-content: space-between;">
													
                                                    <a href="page3.php" class="btn btn-primary submit p-3">&laquo; Previous</a>
                                                    <button type="submit" name="register5" id="mybtn" class="btn btn-primary submit p-3" >Submit ✔</button>
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
	<script src="script.js"></script>
</body>

</html>