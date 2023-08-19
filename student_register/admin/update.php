<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "asteriscstudents";

$conn = new mysqli($servername, $username, $password, $dbname, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];

    // Fetch the user data based on the provided student_id
    $sql = "SELECT * FROM student_admission WHERE student_id = '$student_id'";



    

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $full_name = $row['full_name'];
        $gender = $row['gender'];
        $dob = $row['dob'];
        $email = $row['email'];
        $student_number = $row['student_number'];
        $parent_number = $row['parent_number'];
        $address = $row['address'];
        $city = $row['city'];
        $pin_code = $row['pin_code'];
        $work = $row['work'];
        $c_name = $row['c_name'];
        $e_number = $row['e_number'];
        $branch = $row['branch'];
        $course = $row['course'];
        $batch_timing = $row['batch_timing'];
        $tutor_name = $row['tutor_name'];
        $photofile = $row['photofile'];
        $docfile = $row['docfile'];
        $total_fees = $row['total_fees'];
        $paid_fees = $row['paid_fees'];
        $payment_type = $row['payment_type'];
        $cheque_no = $row['cheque_no'];
        $admission_date = $row['admission_date'];
        $receipt_number = $row['receipt_number'];
        $Password = $row['Password'];


    } else {
        echo "No user found with the given student ID.";
        exit();
    }
} else {
    echo "Invalid request.";
    $conn->close();
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User Information</title>
    <style>
        /* Add some basic CSS for the form */
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="\Sammer\student_register\admin\updateaction.php" method="post">
        <h2>Update User Information</h2>
        <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">

        <label for="full_name">Name:</label>
        <input type="text" id="full_name" name="full_name" value="<?php echo $full_name; ?>" required><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="Male" name="gender" value="Male" <?php if ($gender === "Male") echo "checked"; ?> required>
        <label for="Male">Male</label>
        <input type="radio" id="Female" name="gender" value="Female" <?php if ($gender === "Female") echo "checked"; ?> required>
        <label for="Female">Female</label>
        <input type="radio" id="Other" name="gender" value="Other" <?php if ($gender === "Other") echo "checked"; ?> required>
        <label for="Other">Other</label><br>

        <label for="dob">Date of Birth:</label>
        <input type="text" id="dob" name="dob" value="<?php echo $dob; ?>" required><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>" required><br>

        <label for="student_number">Student Number:</label>
        <input type="text" id="student_number" name="student_number" value="<?php echo $student_number; ?>" required><br>

        <label for="parent_number">Parent Number:</label>
        <input type="text" id="parent_number" name="parent_number" value="<?php echo $parent_number; ?>" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo $address; ?>" required><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="<?php echo $city; ?>" required><br>

        <label for="pin_code">Pin Code:</label>
        <input type="text" id="pin_code" name="pin_code" value="<?php echo $pin_code; ?>" required><br>

        <label for="work">Work:</label>
        <input type="text" id="work" name="work" value="<?php echo $work; ?>" required><br>

        <label for="c_name">Contact Name:</label>
        <input type="text" id="c_name" name="c_name" value="<?php echo $c_name; ?>" required><br>

        <label for="e_number">Emergency Number:</label>
        <input type="text" id="e_number" name="e_number" value="<?php echo $e_number; ?>" required><br>

        <label for="branch">Branch:</label>
        <input type="text" id="branch" name="branch" value="<?php echo $branch; ?>" required><br>

        <label for="course">Preferred Course:</label>
        <input type="text" id="course" name="course" value="<?php echo $course; ?>" required><br>

        <label for="batch_timing">Batch Timing:</label>
        <input type="text" id="batch_timing" name="batch_timing" value="<?php echo $batch_timing; ?>" required><br>

        <label for="tutor_name">Tutor Name:</label>
        <input type="text" id="tutor_name" name="tutor_name" value="<?php echo $tutor_name; ?>" required><br>

        <label for="photofile">Photo File:</label>
        <input type="text" id="photofile" name="photofile" value="<?php echo $photofile; ?>" required><br>

        <label for="docfile">Document File:</label>
        <input type="text" id="docfile" name="docfile" value="<?php echo $docfile; ?>" required><br>

        <label for="total_fees">Total Fees:</label>
        <input type="text" id="total_fees" name="total_fees" value="<?php echo $total_fees; ?>" required><br>

        <label for="paid_fees">Paid Fees:</label>
        <input type="text" id="paid_fees" name="paid_fees" value="<?php echo $paid_fees; ?>" required><br>

        <label for="payment_type">Payment Type:</label>
        <input type="text" id="payment_type" name="payment_type" value="<?php echo $payment_type; ?>" required><br>

        <label for="cheque_no">Cheque Number:</label>
        <input type="text" id="cheque_no" name="cheque_no" value="<?php echo $cheque_no; ?>" required><br>

        <label for="admission_date">Admission Date:</label>
        <input type="text" id="admission_date" name="admission_date" value="<?php echo $admission_date; ?>" required><br>

        <label for="receipt_number">Receipt Number:</label>
        <input type="text" id="receipt_number" name="receipt_number" value="<?php echo $receipt_number; ?>" required><br>

        <label for="Password">Password:</label>
        <input type="text" id="Password" name="Password" value="<?php echo $Password; ?>" required><br>

        <input type="submit" value="Update User">
    </form>
</body>
</html>
