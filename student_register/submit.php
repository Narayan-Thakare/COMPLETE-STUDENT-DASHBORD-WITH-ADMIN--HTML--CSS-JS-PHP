<?php
//checking whether the submit button is pressesd or not
if(isset($_POST["register5"])) {

  //starting the session
	session_start();

    //including the config.php file
    include "config.php";

    //insert query of sql
    //wherein we will fetch the required values from the session variable values 
    $sql = "INSERT INTO student_admission (student_id, full_name, gender, dob, email, student_number, parent_number, address, city, pin_code, work, c_name, e_number, branch, course, batch_timing, tutor_name, photofile, docfile, total_fees, paid_fees, payment_type, cheque_no, admission_date, receipt_number)
    VALUES ('', '{$_SESSION['name']}', '{$_SESSION['gender']}', '{$_SESSION['dob']}', '{$_SESSION['email']}', '{$_SESSION['student_number']}', '{$_SESSION['parent_number']}', '{$_SESSION['address']}', '{$_SESSION['city']}', '{$_SESSION['pincode']}', 
    '{$_SESSION['working']}', '{$_SESSION['cname']}', '{$_SESSION['e_number']}', 
    '{$_SESSION['branch']}', '{$_SESSION['course']}', '{$_SESSION['batch_timing']}', '{$_SESSION['tutor_name']}', '{$_SESSION['img']}', '{$_SESSION['doc']}', 
    '{$_SESSION['total_fees']}', '{$_SESSION['paid_fees']}', '{$_SESSION['payment_type']}', '{$_SESSION['cheque_no']}', '{$_SESSION['admission_date']}', '{$_SESSION['receipt_number']}')";

    //perform object oriented style query
    //$mysqli -> query(query, resultmode) 
    if ($conn->query($sql) === TRUE) {

      //if the above query executed successfully
      //redirect the user to success.php page
      header("Location:success.php");

      //destroy the session
      session_destroy();
    
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }	
  }

  //if submit button was not pressed of last page then
  else {

    //redirect to review.php page
	  header("Location: review.php");
  }
?>