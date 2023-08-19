<?php require 'config.php';
session_start();
$Email = $_SESSION['email'];

if($Email==true){

}else{
  header("location:/student_dashboard/student_register/login.php");
}

if(isset($Email)){

    $mb = $Email;
  
    $info = "SELECT Password FROM student_admission WHERE email = '$mb'";
  
    $result = mysqli_query($con, $info);

    $rt = mysqli_fetch_array($result);
    $pwd=$rt['Password'];

    if($pwd==null){
        // echo '<script>alert("Set your password first!")</script>';
        // header("location:/student_dashboard/edit_profile");
        echo "<script>
        window.location.href='edit_profile.php';
        alert('Set your password first!');
        </script>";
       
    }
  else{
    session_unset();
session_destroy();
header("location:\Sammer\student_register\login.php");
  }
}
// session_unset();
// session_destroy();
// header("location:/student_dashboard/student_register/login")


?>