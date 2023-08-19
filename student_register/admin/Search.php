<?php
      $servername = "localhost";
      $username = "root";
      $password = '';
      $dbname = "asteriscstudents";

      $conn = new mysqli($servername, $username, $password, $dbname, 3306);

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      if (isset($_GET['search'])) {
          $searchName = $_GET['search'];
          $stmt = $conn->prepare("SELECT student_id, full_name, gender, dob, email, student_number, parent_number, address, city, pin_code, work, c_name, e_number, branch, course, batch_timing, tutor_name, photofile, docfile, total_fees, paid_fees, payment_type, cheque_no, admission_date, receipt_number, Password  FROM student_admission WHERE full_name LIKE ?");
          $searchName = '%' . $searchName . '%';
          $stmt->bind_param("s", $searchName);

          $stmt->execute();

          $result = $stmt->get_result();

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

          $stmt->close();
      } else {
          echo "<p>Please enter a name to search.</p>";
      }

      $conn->close();
      ?>  

