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
    $name = $_POST['name'];
    $jobTitle = $_POST['jobTitle'];
    $companyName = $_POST['companyName'];
    $location = $_POST['location'];
    $salaryRange = $_POST['salaryRange'];
    $employmentType =  $_POST['employmentType'];
    $id = $_POST['id'];

    $sql = "UPDATE job_calls 
            SET   name='$name', job_title = '$jobTitle', company_name = '$companyName', location = '$location', 
            salary_range = '$salaryRange', employment_type = '$employmentType' 
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: showjobCall.php"); // Redirect to the show job calls page

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM job_calls WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
           width:50%;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus {
            border-color: #007bff;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Job Calls</h2>
        <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="name">NAME:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"><br><br>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="name">Job Title:</label>
            <input type="text" id="jobTitle" name="jobTitle" value="<?php echo $row['job_title']; ?>"><br><br>
            <label for="companyName">Company Name:</label>
            <input type="text" id="companyName" name="companyName" value="<?php echo $row['company_name']; ?>"><br><br>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" value="<?php echo $row['location']; ?>"><br><br>
            <label for="salaryRange">Salary Range:</label>
            <input type="text" id="salaryRange" name="salaryRange" value="<?php echo $row['salary_range']; ?>"><br><br>
            <label for="employmentType">Employment Type:</label>
            <input type="text" id="employmentType" name="employmentType" value="<?php echo $row['employment_type']; ?>"><br><br>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
