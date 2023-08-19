 <?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

$Name = $_POST['name'];
$Fees = $_POST['Fees'];
$card = $_POST['card'];
$Phone = $_POST['number'];

$conn = new mysqli($servername, $username, $password, $dbname, 3306);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Pay (name, card, number,Fees) VALUES (?, ?, ?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $Name, $card, $Phone,$Fees);

if ($stmt->execute()) {

    header("Location:\Sammer\student_register\admin\PayShow.php");
    echo "New records created successfully";
    
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>


 