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
    $job_title = $_POST['job_title'];
   
    $company_name = $_POST['company_name'];
    $location = $_POST['location'];
    $salary_range = $_POST['salary_range'];
    $employment_type = $_POST['employment_type'];

    $sql = "UPDATE job_calls 
            SET name = '$name', job_title = '$job_title', 
            company_name = '$company_name', location = '$location', salary_range = '$salary_range', employment_type = '$employment_type' 
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: /Sammer/student_register/admin/showjobcall.php"); // Redirect to the show job call page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
