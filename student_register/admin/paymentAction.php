<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents"; 
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $student_id = $_POST['student_id'];
    $new_payment = $_POST['payment'];

    $student_id = mysqli_real_escape_string($conn, $student_id);
    $new_payment = mysqli_real_escape_string($conn, $new_payment);

    $fetch_paid_fees_sql = "SELECT paid_fees FROM student_admission WHERE student_id = '$student_id'";
    $fetch_paid_fees_result = $conn->query($fetch_paid_fees_sql);
    
    if ($fetch_paid_fees_result && $fetch_paid_fees_result->num_rows === 1) {
        $row = $fetch_paid_fees_result->fetch_assoc();
        $current_paid_fees = $row['paid_fees'];

        $updated_paid_fees = $current_paid_fees + $new_payment;

        $update_paid_fees_sql = "UPDATE student_admission SET paid_fees = '$updated_paid_fees' WHERE student_id = '$student_id'";

        if ($conn->query($update_paid_fees_sql) === TRUE) {
            echo "Paid Fees updated successfully.";
            header("Location:/Sammer/student_register/admin/index.php");
            exit; 
        } else {
            echo "Error updating Paid Fees: " . $conn->error;
        }
    } else {
        echo "Error fetching current Paid Fees: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
