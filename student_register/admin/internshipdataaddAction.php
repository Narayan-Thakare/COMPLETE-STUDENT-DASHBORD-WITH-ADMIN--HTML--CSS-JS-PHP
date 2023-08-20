<?php

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // $id = $_POST['id'];
    $developer = $_POST['developer'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $responsibilitie = $_POST['responsibilitie'];
    $requirement = $_POST['requirement'];

    $sql = "INSERT INTO internshipdata ( developer, phone, email, location, responsibilitie, requirement) 
            VALUES ( '$developer', '$phone', '$email', '$location', '$responsibilitie', '$requirement')";

    if ($conn->query($sql) === TRUE) {
        header("Location: /Sammer/student_register/admin/showjobcall.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
