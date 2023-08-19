<?php

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $student_number = $_POST['student_number'];
    $parent_number = $_POST['parent_number'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pin_code = $_POST['pin_code'];
    $work = $_POST['work'];
    $c_name = $_POST['c_name'];
    $e_number = $_POST['e_number'];
    $branch = $_POST['branch'];
    $course = $_POST['course'];
    $batch_timing = $_POST['batch_timing'];
    $tutor_name = $_POST['tutor_name'];
    $photofile = $_POST['photofile'];
    $docfile = $_POST['docfile'];
    $total_fees = $_POST['total_fees'];
    $paid_fees = $_POST['paid_fees'];
    $payment_type = $_POST['payment_type'];
    $cheque_no = $_POST['cheque_no'];
    $admission_date = $_POST['admission_date'];
    $receipt_number = $_POST['receipt_number'];
    $password = $_POST['Password'];

    // Perform data validation and sanitation here before inserting into the database

    $sql = "INSERT INTO student_admission (
                full_name, gender, dob, email, student_number, parent_number, 
                address, city, pin_code, work, c_name, e_number, branch, course, 
                batch_timing, tutor_name, photofile, docfile, total_fees, paid_fees, 
                payment_type, cheque_no, admission_date, receipt_number, Password
            ) VALUES (
                '$full_name', '$gender', '$dob', '$email', '$student_number', '$parent_number', 
                '$address', '$city', '$pin_code', '$work', '$c_name', '$e_number', '$branch', '$course', 
                '$batch_timing', '$tutor_name', '$photofile', '$docfile', '$total_fees', '$paid_fees', 
                '$payment_type', '$cheque_no', '$admission_date', '$receipt_number', '$password'
            )";

    if ($conn->query($sql) === TRUE) {
        header("Location: \Sammer\student_register\admin\index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
