<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

$conn = new mysqli($servername, $username, $password, $dbname, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $developer = $_POST['developer'];
    $phone = $_POST['phone'];
   
    $email = $_POST['email'];
    $location = $_POST['location'];
    $responsibilitie = $_POST['responsibilitie'];
    $requirement = $_POST['requirement'];

    $sql = "UPDATE internshipdata 
            SET developer = '$developer', phone = '$phone', 
            email = '$email', location = '$location', responsibilitie = '$responsibilitie', requirement = '$requirement' 
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location:\Sammer\student_register\admin\ShowInternshipData.php"); // Redirect to the show job call page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
