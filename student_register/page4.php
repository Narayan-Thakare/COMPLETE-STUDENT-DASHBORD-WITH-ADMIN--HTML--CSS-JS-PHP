<?php
if(isset($_POST["register3"]) && isset($_FILES['photofile']) && isset($_FILES['docfile'])){
	session_start();

	$branch = $_POST["branch"];
	$course = $_POST['course'];
	$batch_timing = $_POST['batch_timing'];
	$tutor_name = $_POST['tutor_name'];

	$img_name = $_FILES['photofile']['name'];
	$img_size = $_FILES['photofile']['size'];
	$tmp_name = $_FILES['photofile']['tmp_name'];
	$error = $_FILES['photofile']['error'];

	if ($error === 0) {
		if ($img_size > 125000) 
		{
			$em = "Sorry, your file is too large.";
		    header("Location: page3.php?error1=$em");
		}
		else 
		{
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'photoUploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				
				$_SESSION["img"]=$new_img_name;
				// header("Location: upload1.php");
				
			}
			else {
				$em = "You can't upload files of this type";
		        header("Location: page3.php?error1=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: page3.php?error1=$em");
	}


	$doc_name = $_FILES['docfile']['name'];
	$doc_size = $_FILES['docfile']['size'];
	$tmp_docname = $_FILES['docfile']['tmp_name'];
	$docerror = $_FILES['docfile']['error'];

	if ($docerror === 0) {
		if ($doc_size > 125000) 
		{
			$em = "Sorry, your file is too large.";
		    header("Location: page3.php?error2=$em");
		}
		else 
		{
			$doc_ex = pathinfo($doc_name, PATHINFO_EXTENSION);
			$doc_ex_lc = strtolower($doc_ex);

			$allowed_docexs = array("jpg", "jpeg", "png"); 

			if (in_array($doc_ex_lc, $allowed_docexs)) {
				$new_doc_name = uniqid("DOC-", true).'.'.$doc_ex_lc;
				$doc_upload_path = 'docUploads/'.$new_doc_name;
				move_uploaded_file($tmp_docname, $doc_upload_path);

				
				$_SESSION["doc"]=$new_doc_name;
				// header("Location: upload1.php");
				
			}
			else {
				$em = "You can't upload files of this type";
		        header("Location: page3.php?error2=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: page3.php?error2=$em");
	}

	$_SESSION["branch"] = $branch;
	$_SESSION["course"] = $course;
	$_SESSION["batch_timing"] = $batch_timing;
	$_SESSION["tutor_name"] = $tutor_name;

	include "config.php";
	$tfees=0;
	$sql="select course_fees from course_details where (course_name='$course') LIMIT 1;";
	$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				$tfees = $row['course_fees'];
		}
	}
}
// else{
// 	header("Location: page3.php");
// }

?>

<!doctype html>
<html lang="en">

<head>
	<title>Admission Form (Part-4)</title>
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
										<h3 class="mt-0 pb-4 text-center" id="title4">Payment Details</h3>
										
									</div>
									<form id="myform" action="javascript:void(0);"  class="signup-form" method="post">
										<div class="row">


											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="total_fees">Total Fees</label>
													<input type="text" value="<?php echo $tfees;?>" id="tfees" name="total_fees" class="form-control" readonly required>
													<!-- <div class="mb-2 text-danger form__input-error-message"></div>  -->
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="paid_fees">Paid Fees</label>
													<input type="text"  id="pfees" name="paid_fees" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="payment_type">Payment Type</label>
													<select style="color: gray; font-size: 14px;" id="ptype" class="form__input form-control" name="payment_type" required>
														<option value="" selected="">Select Payment Type</option>
														<option value="cash">Cash</option>
														<option value="online">Online</option>
														<option value="cheque">Cheque</option>
													</select>
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>

											<div class="col-md-12 d-none" id="otlo1">
												<div class="form-group">
													<label class="label" for="cheque_no">Online Transation No./ Cheque No.</label>
													<input type="text" id="otno" name="cheque_no" class="form__input form-control">
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="admission_date">Admission Date</label>
													<input style="color: gray; font-size: 14px;" type="date"  id="adate"name="admission_date" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="receipt_number">Receipt Number</label>
													<input style="font-size: 14px;" id="rno" type="text" name="receipt_number" class="form__input form-control" required>
													<div class="mb-2 text-danger form__input-error-message"></div> 
												</div>
											</div>

											<div class="col-md-12">
                                                <br>
												<div class="form-group" style="display: flex; flex-direction: row; justify-content: space-between;">
													
                                                    <a href="page3.php" class="btn btn-primary submit p-3">&laquo; Previous</a>
                                                    <button type="submit" name="register4" id="mybtn" class="btn btn-primary submit p-3 disabled" >Review</button>
												
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
	<script src="js/p4.js"></script>
</body>

</html>