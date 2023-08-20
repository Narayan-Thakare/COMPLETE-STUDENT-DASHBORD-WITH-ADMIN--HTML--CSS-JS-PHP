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
    $studentId = $_POST["student_id"]; // Assuming you have a field like 'student_id' to identify the student you want to update

    // Handle C++ Certificate Upload
    if ($_FILES["cpp_certificate_image"]["error"] === UPLOAD_ERR_OK) {
        $cppCertificateImage = $_FILES["cpp_certificate_image"]["tmp_name"];
        
        // Read the C++ certificate image file into a binary string
        $cppImageData = file_get_contents($cppCertificateImage);

        // Update the C++ certificate image data in the database
        $sql = "UPDATE student_admission SET cpp_certificate = ? WHERE student_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $cppImageData, $studentId);

        if ($stmt->execute()) {
            header("Location: /Sammer/student_register/admin/index.php");
            exit; // Ensure that no more code is executed after the redirect
        } else {
            echo "Error updating and inserting C++ Certificate image: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "No C++ Certificate image file was uploaded.";
    }
}

$conn->close();
?>
