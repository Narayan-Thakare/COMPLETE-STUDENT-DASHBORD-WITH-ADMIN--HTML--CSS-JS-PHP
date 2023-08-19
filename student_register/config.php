<?php 

// variables to store servername, username, password, and database name
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asteriscstudents";

// Create connection
// using Procedural style query
// mysqli_connect(host, username, password, dbname, port, socket)
$conn = mysqli_connect($servername, $username, $password, $dbname, 3306);

// Check connection
if (!$conn) {

    //the die() function prints a message and exits the current script.
    //an alternative of exit()
    die("Connection failed: " . mysqli_connect_error());
}
// else{
//     echo ("connection succed..!");
// }

?>
