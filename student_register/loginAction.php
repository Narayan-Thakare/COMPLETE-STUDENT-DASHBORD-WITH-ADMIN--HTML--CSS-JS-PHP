<?php 
//starting the session
session_start();

//the require() function copies all of the text from a given 
//file into the file that uses the include function
require '../config.php';

//checking whether login button is pressed and
//email and password is not empty
if (isset($_POST['login']) && !empty($_POST['email']) 
&& !empty($_POST['password']))
{
	//storing the email and passwords into variables
	$email = $_POST['email'];
	$password = $_POST['password'];

	//sql query for retrieving all the record of the user
	//from the database having same email and password 
	//as that of the submitted fields
	$query = "SELECT * FROM student_admission WHERE email ='$email' AND Password ='$password'";

	//perform query
	//mysqli_query(connection, query, resultmode)
	$data = mysqli_query($con, $query);

	// return the number of rows in result set
	$total = mysqli_num_rows($data);

	//if there is only one record then
	if($total  == 1)
	{
		//storing that entered email into session variable
		$_SESSION['email'] = $email;

		//redirecting to index.php file
		header("location:\Sammer\index.php");
	}
	else{
		{
			//sending the message "em" to login.php 
			//through loginError variable
			$errorMessage2 = "Invalid Username or password!!";
			header("Location: login.php?loginError=$errorMessage2");
		}
		
	}
}
?>