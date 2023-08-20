<?php
// Database connection setup
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle file upload
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cCertificateImage = $_FILES["c_certificate_image"]["tmp_name"];
    $studentId = $_POST["student_id"]; // Assuming you have a field like 'student_id' to identify the student you want to update

    // Check if a file was uploaded
    if ($cCertificateImage !== "") {
        // Read the image file into a binary string
        $imageData = file_get_contents($cCertificateImage);

        // Update the image data in the database
        $sql = "UPDATE student_admission SET c_certificate = ? WHERE student_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $imageData, $studentId);

        if ($stmt->execute()) {
            header("Location:/Sammer/student_register/admin/index.php");
            exit; // Ensure that no more code is executed after the redirect

           }
           
           
            echo "Image updated and inserted into the database successfully.";
        } else {
            echo "Error updating and inserting image: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "No file was uploaded.";
    }




$conn->close();
?>
