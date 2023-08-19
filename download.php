<?php require 'config.php'; 

if(isset($_GET['email'])){

  $info = "SELECT cer FROM certificatetb WHERE email = '$mb'";

  $result = mysqli_query($con, $info);

  $rt = mysqli_fetch_array($result);

// $email=$mb; 
 $cer=$rt['cer'];
 if(!empty($_GET['file'])){
    $filename=basename($_GET['file']);
    $filepath = "student_dashboard\Pdf". $filename;
    if(!empty($filename) && file_exists($filepath)){
        //define header
        header("Cache-Control: public");
        header("Content-Description:File Transfer");
        header("content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Emcoding: binary");
        readfile($filepath);
        exit;
    }
    else{
        echo "Your Course not Complete";
    }
 }
}
?> 