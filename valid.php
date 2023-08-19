<?php
session_start();
error_reporting(0);

require 'config.php';

if (isset($_POST['Update']))
{
    $fname  =$_POST['stuname'];
   $email =$_POST['stuemail'];
   $stuph  =$_POST['stunum'];
   $parph   =$_POST['parnum'];
   $clgname  =$_POST['clgname'];
   $city   =$_POST['stucity'];
   $batchtm  =$_POST['bhctm'];
   $gender  =$_POST['gender'];
   $dob   =$_POST['dob'];

  
        $_SESSION['status']="Details Updated Successfully";

   

}

?>

