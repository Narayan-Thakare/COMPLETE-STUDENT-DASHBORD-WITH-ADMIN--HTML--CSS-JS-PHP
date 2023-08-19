<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents"; // Replace 'my' with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $student_id = $_POST['student_id'];
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
    $Password = $_POST['Password'];


    // Sanitize inputs to prevent SQL injection (use proper database-specific methods)
    $student_id = mysqli_real_escape_string($conn, $student_id);
    $full_name = mysqli_real_escape_string($conn, $full_name);
    $gender = mysqli_real_escape_string($conn, $gender);
    $dob = mysqli_real_escape_string($conn, $dob);
    $email = mysqli_real_escape_string($conn, $email);
    $student_number = mysqli_real_escape_string($conn, $student_number);
    $parent_number = mysqli_real_escape_string($conn, $parent_number);
    $address = mysqli_real_escape_string($conn, $address);
    $city = mysqli_real_escape_string($conn, $city);
    $pin_code = mysqli_real_escape_string($conn, $pin_code);
    $work = mysqli_real_escape_string($conn, $work);
    $c_name = mysqli_real_escape_string($conn, $c_name);
    $e_number = mysqli_real_escape_string($conn, $e_number);
    $branch = mysqli_real_escape_string($conn, $branch);
    $course = mysqli_real_escape_string($conn, $course);
    $batch_timing = mysqli_real_escape_string($conn, $batch_timing);
    $tutor_name = mysqli_real_escape_string($conn, $tutor_name);
    $photofile = mysqli_real_escape_string($conn, $photofile);
    $docfile = mysqli_real_escape_string($conn, $docfile);
    $total_fees = mysqli_real_escape_string($conn, $total_fees);
    $paid_fees = mysqli_real_escape_string($conn, $paid_fees);
    $payment_type = mysqli_real_escape_string($conn, $payment_type);
    $cheque_no = mysqli_real_escape_string($conn, $cheque_no);
    $admission_date = mysqli_real_escape_string($conn, $admission_date);
    $receipt_number = mysqli_real_escape_string($conn, $receipt_number);
    $Password = mysqli_real_escape_string($conn, $Password);


    // Build the SQL query using string concatenation
    $sql = "UPDATE student_admission SET full_name = '$full_name', gender = '$gender', dob = '$dob', email = '$email', student_number = '$student_number', parent_number = '$parent_number', address = '$address', city = '$city', pin_code = '$pin_code', work = '$work', c_name = '$c_name', e_number = '$e_number', branch = '$branch', course = '$course', batch_timing = '$batch_timing', tutor_name = '$tutor_name', photofile = '$photofile', docfile = '$docfile', total_fees = '$total_fees', paid_fees = '$paid_fees', payment_type = '$payment_type', cheque_no = '$cheque_no', admission_date = '$admission_date', receipt_number = '$receipt_number', Password = '$Password' WHERE student_id = '$student_id'";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // echo "Data updated successfully.";
        require 'index.php'; // This line should be changed based on your requirements
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

// Close the database connection
?>