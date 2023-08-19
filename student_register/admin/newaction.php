<?php
// Replace these variables with your database credentials
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname,3306);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have a form with POST data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate user inputs
    // $student_id = $_POST["student_id"];
    $full_name = $_POST["full_name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $student_number = $_POST["student_number"];
    $parent_number = $_POST["parent_number"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $pin_code = $_POST["pin_code"];
    $work = $_POST["work"];
    $c_name = $_POST["c_name"];
    $e_number = $_POST["e_number"];
    $branch = $_POST["branch"];
    $course = $_POST["course"];
    $batch_timing = $_POST["batch_timing"];
    $tutor_name = $_POST["tutor_name"];
    $photofile = $_POST["photofile"];
    $docfile = $_POST["docfile"];
    $total_fees = $_POST["total_fees"];
    $paid_fees = $_POST["paid_fees"];
    $payment_type = $_POST["payment_type"];
    $cheque_no = $_POST["cheque_no"];
    $admission_date = $_POST["admission_date"];
    $receipt_number = $_POST["receipt_number"];
    $assword = $_POST["Password"]; // Note: You should hash passwords for security

    // Prepare and bind the statement
    $stmt = $conn->prepare("INSERT INTO student_admission (full_name, gender, dob, email, student_number, parent_number, address, city, pin_code, work, c_name, e_number, branch, course, batch_timing, tutor_name, photofile, docfile, total_fees, paid_fees, payment_type, cheque_no, admission_date, receipt_number, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("", $full_name, $gender, $dob, $email, $student_number, $parent_number, $address, $city, $pin_code, $work, $c_name, $e_number, $branch, $course, $batch_timing, $tutor_name, $photofile, $docfile, $total_fees, $paid_fees, $payment_type, $cheque_no, $admission_date, $receipt_number, $assword);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully.";
        
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>

<!-- Example HTML form -->
