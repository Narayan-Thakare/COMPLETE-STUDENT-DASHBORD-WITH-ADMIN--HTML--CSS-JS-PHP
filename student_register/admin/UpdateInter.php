<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

$conn = new mysqli($servername, $username, $password, $dbname,3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $portfolio_website = $_POST['portfolio_website'];
    $phone = $_POST['phone'];
    $comments = $_POST['email'];

    $sql = "UPDATE internship 
            SET full_name = '$full_name', portfolio_website = '$portfolio_website', 
            phone = '$phone', email = '$comments' 
            WHERE id = $id";

    if ($conn->query($sql) === TRUE)
     {
        header("Location:\Sammer\student_register\admin\showintership.php"); // Redirect to the show internship page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

