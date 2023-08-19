<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asteriscstudents";

$id=$_GET['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,3306);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM job_calls WHERE id='$id'";

if ($conn->query($sql) === TRUE) 
{
//   echo "Record deleted successfully";
  header("Location:\Sammer\student_register\admin\showjobcall.php");
} 
else
{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>