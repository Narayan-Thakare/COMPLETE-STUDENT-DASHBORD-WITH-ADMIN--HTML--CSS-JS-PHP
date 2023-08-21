<?php

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $portfolio_website = $_POST['portfolio_website'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO internship (full_name, portfolio_website,phone, email) 
            VALUES ('$full_name', '$portfolio_website', '$phone', '$email')";
if ($conn->query($sql) === TRUE) {
    header("Location: \Sammer\student_register\admin\showintership.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>
