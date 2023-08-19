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
    $name = $_POST['name'];
    $Fees = $_POST['Fees'];
    $card = $_POST['card'];
    $number = $_POST['number'];

    $sql = "UPDATE Pay 
            SET name = '$name', Fees = '$Fees', 
            card = '$card', number = '$number' 
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location:\Sammer\student_register\admin\PayShow.php"); // Redirect to the show job call page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
