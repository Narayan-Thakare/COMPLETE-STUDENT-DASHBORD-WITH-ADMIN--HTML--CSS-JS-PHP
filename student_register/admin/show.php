<?php
        $servername = "localhost";
        $username = "root";
        $password = '';
        $dbname = "asteriscstudents";

        $conn = new mysqli($servername, $username, $password, $dbname, 3306);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT student_id, full_name, gender, dob, email, student_number, parent_number, address, city, pin_code, work, c_name, e_number, branch, course, batch_timing, tutor_name, photofile, docfile, total_fees, paid_fees, payment_type, cheque_no, admission_date, receipt_number, Password FROM student_admission ORDER BY student_id DESC";
        $result = $conn->query($sql);

        if ($result === false) {
            die("Error: " . $conn->error);
        }

        if ($result->num_rows > 0) {
            echo '<table>';
           echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Password</th><th>Total Fees</th><th>Paid Fees</th><th>payment</th><th>Update</th><th>Gender</th><th>Date of Birth</th><th>Student Number</th><th>Parent Number</th><th>Address</th><th>City</th><th>Pin Code</th><th>Work</th><th>Contact Name</th><th>Emergency Number</th><th>Branch</th><th>Course</th><th>Batch Timing</th><th>Tutor Name</th><th>Photo File</th><th>Document File</th><th>Payment Type</th><th>Cheque Number</th><th>Admission Date</th><th>Receipt Number</th><th>Delete</th></tr>';
            while ($row = $result->fetch_assoc()) {
              echo '<tr>';
              echo '<td>' . $row['student_id'] . '</td>';
echo '<td>' . $row['full_name'] . '</td>';
echo '<td>' . $row['email'] . '</td>';
echo '<td>' . $row['Password'] . '</td>';
echo '<td><a href="showPassword.php?student_id=' . $row["student_id"] . '">Password</a></td>';
echo '<td>' . $row['total_fees'] . '</td>';
echo '<td>' . $row['paid_fees'] . '</td>';
echo '<td><a href="paymentshow.php?student_id=' . $row["student_id"] . '">payment</a></td>';

echo '<td><a href="showupdate.php?student_id=' . $row["student_id"] . '">Edit</a></td>';

echo '<td>' . $row['gender'] . '</td>';
echo '<td>' . $row['dob'] . '</td>';
echo '<td>' . $row['student_number'] . '</td>';
echo '<td>' . $row['parent_number'] . '</td>';
echo '<td>' . $row['address'] . '</td>';
echo '<td>' . $row['city'] . '</td>';
echo '<td>' . $row['pin_code'] . '</td>';
echo '<td>' . $row['work'] . '</td>';
echo '<td>' . $row['c_name'] . '</td>';
echo '<td>' . $row['e_number'] . '</td>';
echo '<td>' . $row['branch'] . '</td>';
echo '<td>' . $row['course'] . '</td>';
echo '<td>' . $row['batch_timing'] . '</td>';
echo '<td>' . $row['tutor_name'] . '</td>';
echo '<td>' . $row['photofile'] . '</td>';
echo '<td>' . $row['docfile'] . '</td>';

echo '<td>' . $row['payment_type'] . '</td>';
echo '<td>' . $row['cheque_no'] . '</td>';
echo '<td>' . $row['admission_date'] . '</td>';
echo '<td>' . $row['receipt_number'] . '</td>';





              echo '<td><a href="delete.php?full_name=' . $row["full_name"] . '">Delete</a></td>';
              echo '</tr>';

              
            }
            echo '</table>';
        } else {
            echo "<p>No data found.</p>";
        }

        $conn->close();
        ?>















<!DOCTYPE html>
<html>
<head>
  <title>All Students</title>
  <style>
    /* Styles for the page */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    .container {
      flex
      max-width: 100%;
      margin: 30px auto;
      padding: 100px;
      border: 1px solid #dddddd;
      background-color: #fff;
      overflow-x: auto;
    }

    h1 {
      text-align: center;
    }

    table {
      font-size: 12px;
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      border-top: 1px solid #dddddd;
      table-layout: fixed; 
      font-size: 14px; 
    }

    th, td {
       padding: 7px;
       border-bottom: 1px solid #dddddd;
      white-space: nowrap; /* Prevent line breaks in table cells */
      overflow: hidden;
      text-overflow: ellipsis;
    }

    th {
      background-color: #f2f2f2;
      text-align: left;
      font-size: 1.2emx;
    }

    td {
      font-size: 14px;
    }

    a {
      display: inline-block;
      padding: 5px 10px;
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }

    a:hover {
      background-color: #45a049;
    }

    p {
      text-align: center;
      font-size: 16px;
    }
    
    header {
      background-color: #333;
      color: #fff;
      padding: 10px 0;
      text-align: center;
    }
    
    nav {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }
    
    nav a {
      color: #333;
      text-decoration: none;
      padding: 5px 10px;
      border: 1px solid #333;
      margin: 0 5px;
    }
    
    nav a:hover {
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<body>
<!-- <header>
    <nav>
        <a href="logins.php">Login</a>
        <a href="logout.php">Logout</a>
        <a href="profile.php">Profile</a>
    </nav>
</header> -->

<div class="container">
    <h1>All Students</h1>

    <div class="search-results">
       
    </div>
</div>
</body>
</html>
