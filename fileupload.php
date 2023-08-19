<?php
include("config.php");
?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
    <form action="#"  name="myForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
    <div class="container">
                <!-- Pdf Uploading -->
                <div>
                <label class="form-label"> Upload Pdf  : </label>
                </div>
                <input type="file" id="pdf" name="uploadpdf" accept="image/*" >
                </div>
                <br>
                
                <div class="submit-cancel container ">
                    <button type="submit" value="upload" id="btn" name="upload" class="btn btn-info">Submit</button>
                    <span> <a class ="btn btn-dark" href="display.php"> Cancel </a></span>
                    </div>

                 <br>
                 </form>
                </div>
                 <?php



if(isset($_POST['upload']))
{

    //Varibales for pdf Uploading
    $pdf_file_name =  $_FILES["uploadpdf"]["name"];
    $pdf_temp_name =  $_FILES["uploadpdf"]["tmp_name"];
    $pdf_folder = "$pdf_file_name";
    $email="harshal45mandale@gmail.com";
    
    $pdfFileType = strtolower(pathinfo($pdf_folder,PATHINFO_EXTENSION));

     if( $pdfFileType!= "pdf") {
        echo "<script> alert('Sorry, only PDF files are allowed.'); </script>";
    }
    
    else{

    //It will pick file from the temporary location & store it in the image folder.
    move_uploaded_file($pdf_temp_name,$pdf_folder); 

    $query = "UPDATE certificatetb SET cer = '$pdf_folder' WHERE sr = 2";
    $data  = mysqli_query($con,$query);

    if($data){
        echo "<script> alert('Data Successfully Inserted Into Our DataBase!'); </script>";
        
    }
    else{
        echo "Data not Inserted";
    }

    }


}

?>

   
</body>
</html>