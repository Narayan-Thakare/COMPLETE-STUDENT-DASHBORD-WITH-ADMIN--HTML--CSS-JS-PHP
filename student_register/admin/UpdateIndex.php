<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

$conn = new mysqli($servername, $username, $password, $dbname, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $student_id = $_POST['student_id'];
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $student_number = $_POST['student_number'];
    $parent_number = $_POST['parent_number'];
    $city = $_POST['city'];
    $pin_code = $_POST['pin_code'];
    $work = $_POST['work'];
    $c_name = $_POST['c_name'];
    $e_number = $_POST['e_number'];
    $batch_timing = $_POST['batch_timing'];
    $branch = $_POST['branch'];
    $course = $_POST['course'];
    $tutor_name = $_POST['tutor_name'];
    $photofile = $_POST['photofile'];
    $docfile = $_POST['docfile'];
    $total_fees = $_POST['total_fees'];
    $paid_fees = $_POST['paid_fees'];
    $payment_type = $_POST['payment_type'];
    $cheque_no = $_POST['cheque_no'];
    $admission_date = $_POST['admission_date'];
    $receipt_number = $_POST['receipt_number'];
    
    // Update the following line based on your form field name for the password
    $password = $_POST['Password'];

    $sql = "UPDATE student_admission 
            SET full_name = ?, gender = ?, dob = ?, email = ?,
            student_number = ?, parent_number = ?,
            city = ?, pin_code = ?, work = ?, c_name = ?,
            e_number = ?, batch_timing = ?, branch = ?,
            course = ?, tutor_name = ?, photofile = ?,
            docfile = ?, total_fees = ?, paid_fees = ?,
            payment_type = ?, cheque_no = ?,
            admission_date = ?, receipt_number = ?,
            password = ? 
            WHERE student_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssssssssssssssi",
        $full_name, $gender, $dob, $email,
        $student_number, $parent_number,
        $city, $pin_code, $work, $c_name,
        $e_number, $batch_timing, $branch,
        $course, $tutor_name, $photofile,
        $docfile, $total_fees, $paid_fees,
        $payment_type, $cheque_no,
        $admission_date, $receipt_number,
        $password, $student_id);

    if ($stmt->execute()) {
        header("Location:\Sammer\student_register\admin\index.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
