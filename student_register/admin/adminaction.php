<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Result</title>
    
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $password = $_POST["password"];

            if ($name === "admin" && $password === "abc123") 
            {
              header("Location:\Sammer\student_register\admin\index.php");
          
                echo '<h1>You are successfully logged in!</h1>';
                echo '<p class="success-message">Welcome, ' . $name . '!</p>';

                setcookie("name", $name, time() + (60 * 20), "/"); // Set cookie for 3 minutes

            } 
            else 
            {
                echo '<h1>Sorry, username or password error!</h1>';
                header("Location:\Sammer\student_register\admin\login.html");
            }
        }
        ?>
    </div>
</body>
</html>
