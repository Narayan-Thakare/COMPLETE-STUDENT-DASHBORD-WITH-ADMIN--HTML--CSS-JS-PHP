<?php

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,3306
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $jobTitle = $_POST['job_title'];
    $companyName = $_POST['company_name'];
    $location = $_POST['location'];
    $salaryRange = $_POST['salary_range'];
    $employmentType =  $_POST['employment_type'];

    $sql = "INSERT INTO job_calls (name,job_title, company_name,location, salary_range, employment_type) 
            VALUES ('$name','$jobTitle', '$companyName', '$location', '$salaryRange', '$employmentType')";

    if ($conn->query($sql) === TRUE) {
      //  echo"inserted";
         header("Location:\Sammer\student_register\admin\showjobcall.php"); 


    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
