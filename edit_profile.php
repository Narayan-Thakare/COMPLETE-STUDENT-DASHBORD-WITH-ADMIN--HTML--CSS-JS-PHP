<?php require 'config.php';

session_start();
$Email = $_SESSION['email'];

if($Email==true){

}else{
  header("location:/student_dashboard/student_register/login.php");
}

if(isset($Email)){

  $mb = $Email;

  $info = "SELECT student_id, full_name, gender, dob, email, student_number, parent_number, course, c_name, batch_timing, photofile, Password, city FROM student_admission WHERE email = '$mb'";

  $result = mysqli_query($con, $info);

  $rt = mysqli_fetch_array($result);
  $dp = $rt['photofile'];
  $stdid = $rt['student_id'];
  $fname = $rt['full_name'];
  $gender = $rt['gender'];
  $dob = $rt['dob'];
  $email = $rt['email'];
  $stuph = $rt['student_number'];
  $parph = $rt['parent_number'];
  $city = $rt['city'];
  $clgname = $rt['c_name'];
  $cname = $rt['course'];
  $batchtm = $rt['batch_timing'];
  $pwd=$rt['Password'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--Desgin by : Chandrakant Sir-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile -Asterisc.in</title>
    <link rel="shortcut icon" href="css/logo.png" />
    <meta name="author" content="Codeconvey" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />

    <link rel="stylesheet" href="css/style.css">
    <style>
      .menu:hover{
        text-decoration:none;
        color:black;
      }
      
      .menu{
        text-decoration:none;
        color:#313131;
        font-weight:bold;
        margin-left: 10px;
        
      }
      .menu1:hover{
        text-decoration:none;
        color:black;
      }
      
      .menu1{
        text-decoration:none;
        color:#313131;
        font-weight:bold;
    
        
      }
      .menu2{
 color:#FFF5EE;
 }
     
#about {
 
}

.about-us {
  background-image: url(about.png);
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  padding: 140px 0px 120px 0px;
}

.about-us .left-image {
  margin-right: 45px;
}

.about-us .services .item {
  margin-bottom: 30px;
}

.about-us .services .item .icon {
  float: left;
  margin-right: 25px;
}

.about-us .services .item .icon img {
  max-width: 70px;
}

.about-us .services .item h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 12px;
}

.about-us .services .item p {
  color: #fff;
}
.up1{
    margin-top: -8pc;
}
.up{
  margin-top: -5pc;
}

      
      </style>
       <script src="script.js"></script>
</head>

<body>



    <!-- <div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            
        </div>
        <div class="col-rt-2">
            <ul>
                <li><a href="https://codeconvey.com/html-code-for-student-profile" title="Back to tutorial page">Back to Tutorial</a></li>
            </ul>
        </div>
    </div>
</div> -->
	

<header class="ScriptHeader about-us section" >

    <div class="rt-container">
    	<div class="col-rt-12 ">
        	<div class="rt-heading up ">
            	<h1 style=" font-size:40px; color:#FFFDD0;">Welcome to Asterisc Student Profile</h1>
                <p style="color:#FFF5EE">A responsive student profile page design.</p>
                <marquee style="color:#FFF5EE" width="100%" direction="left" >
                  Please ensure that you submitted your fees on your due date otherwise, you have to pay the fine with your fees. Fine amount is Rs 200 per day. 
                  Kindly ignore the message if you already paid the fees.</marquee>
            </div>
        </div>
    </div>
</header>

    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">

                    <!-- Student Profile -->
                    <div class="student-profile py-4 up1 ">
                        <div class="container">
                            <div >
                        <a href="index"class="menu menu2">Home > </a>
                        <span class="menu1 menu2">Edit</span>
                        
                        </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent text-center">
                                            <img class="profile_img"  src="stuimg/<?php echo $dp ?>" alt="student dp">
                                            <h3><?php echo $fname ?></h3>
                                        </div>
                                        <div class="card-body"> <!--   PRN  (Permanent Registration Number) -->
                                            
                                            <p class="mb-0"><strong class="pr-1">PRN ID :</strong><?php echo $stdid ?></p>
                                            <p class="mb-0"><strong class="pr-1">Course :</strong><?php echo $cname ?></p>
                                            <p class="mb-0"><strong class="pr-1">Date of Birth :</strong><?php echo $dob  ?></p>
                                            <p class="mb-0"><strong class="pr-1">Batch Timing :</strong><?php echo $batchtm ?></p>
                                        </div>
                                    </div>

                                    <div style="height: 20px"></div>

                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="fa fa-link"></i> Important Links</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <table class="table table-bordered">
                                            <tr>
                                                    <td>&nbsp;<i class="fa fa-inr"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="payment?email=<?php echo $mb ?>">FEES PAYMENT</a></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;<i class="fa fa-inr"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="payment_details?email=<?php echo $mb ?>">FEES DETAILS</a></td>
                                                </tr>
                                                <tr style="background-color: #FFF;">
                                                    <td><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="edit_profile?email=<?php echo $mb ?>">EDIT PROFILE</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-briefcase"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="internship?email=<?php echo $mb ?>">INTERNSHIP</a></td>
                                                </tr>
                                                <tr style="background-color: #FFF;">
                                                    <td><i class="fa fa-phone-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="job_call">JOB CALLS</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-asterisk"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="rules">RULES AND REGULATIONS</a></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-power-off"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout">LOGOUT</a></td>
                                                </tr>
                                                <!--<tr>-->
                                                <!--  <td><i class="fa fa-asterisk"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">COMPLAINTS</a></td>-->
                                                <!--</tr>-->

                                            </table>
                                        </div>
                                    </div>
                                    <div style="height: 26px"></div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="container">
                                        <?php
                                        if(isset($_SESSION['status']) && $_SESSION!='')
                                        {
                                            ?>
                                            <div class="alert alert-warning alert-dismissible fade-show" role="alert">
                                                <?php echo $_SESSION['status']; ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>

                                        <?php
                                        unset($_SESSION['status']);

                                        }

                                        ?>
                                    </div>
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>EDIT PROFILE</h3>
                                            <br>

                                            <section>

                                                <div class="main-panel">

                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card">
                                                            <div class="card-body">


                                                            <form class="forms-sample" method="post" enctype="multipart/form-data">
                                                                <!-- <input type="text" maxlength="32" name="first_name" pattern="[A-Za-z]" value="'.$_SESSION['user_first_name'].'" required>' -->
                                                                <div class="col-md-12">
											
                                                                <div class="form-group">
                                                                        <label  class="label" for="exampleInputName1">Full Name</label>
                                                                        <input  type="text" id="fullname"  name="stuname" value= "<?php echo $fname ?>" class="form__input form-control" required="required" >
                                                                        <div class="mb-2 text-danger form__input-error-message"></div></div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName1">Student Email</label>
                                                                        <input type="text" name="stuemail"  value="<?php echo $email ?>" class="form-control" required="true" readonly>
                                                                    </div></div>
                                                                    <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="label"  for="exampleInputName1">Contact Number</label>
                                                                        <input  id="telnam1"  type="text" name="stunum"   value="<?php echo  $stuph ?>" class="form__input form-control" required>
                                                                        <div class="mb-2 text-danger form__input-error-message"></div></div></div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">

                                                                        <label class="label" for="exampleInputName1">Parent Number</label>
                                                                        <input id="telnam1" type="text" name="parnum"  value="<?php echo  $parph ?>"class="form__input form-control"  required="true">
                                                                        <div class="mb-2 text-danger form__input-error-message"></div></div></div>
                                                                     <div class="col-md-12">
                                                                         <div class="form-group">
                                                                        <label class="label"  for="exampleInputName1">Collage Name</label>
                                                                        <input id="fullname" type="text" name="clgname" value="<?php echo $clgname ?>" class="form__input form-control" required="true">
                                                                        <div class="mb-2 text-danger form__input-error-message"></div></div></div>
                                                                     <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label  class="label" for="exampleInputName1">City</label>
                                                                        <input id="fullname"  type="text" name="stucity" value="<?php echo $city ?>" class="form__input form-control" required="true">
                                                                        <div class="mb-2 text-danger form__input-error-message"></div></div> 

                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail3">Choose Timing</label>
                                                                        <select name="bhctm"  class="form-control" required="true">

                                                                            <option value="<?php echo $batchtm ?>"> <?php echo $batchtm ?></option>
                                                                            <option value="<?php echo $batchtm ?>">Choose New Time -</option>

                                                                            <option value="10am-11am">10am-11am</option>

                                                                            <option value="11:30am-12:30pm">11:30am-12:30pm</option>

                                                                            <option value="1pm-2pm">1pm-2pm</option>

                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="exampleInputName1">Gender</label>
                                                                        <select name="gender" value="<?php echo $gender ?>" class="form-control" required="true">
                                                                            <option value="<?php echo $gender ?>"> <?php echo $gender ?></option>
                                                                            <option value="">Choose New Gender -</option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                            <option value="Other">Other</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName1">Date of Birth</label>
                                                                        <input type="date" name="dob" value="<?php echo $dob ?>" class="form-control" required="true">
                                                                    </div>

                                                                    <div class="form-group">
                                                                     <label for="pwd">Password:</label>
              
                                                                     <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="Password" value="<?php echo  $pwd ?>">
                                                                     </div>


                                                                    
                                                                    <div class="form-group">
                                                                        <a href="editimage.php"  value="" class="btn btn-outline-secondary mr-2" name="Update">Change Profile Picture</a>
                                                                    </div>


                                                                    <center><button type="submit"  value="Update" class="btn btn-primary mr-2" name="Update">UPDATE</button></center>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- content-wrapper ends -->

                                    </div>
    </section>
    </div>

    <!-- partial -->

    </div>
    </div>
    </div>
    </section>








    <!-- Analytics -->

</body>

</html>


<!-- Update query -->
<?php

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
   $pwd   =$_POST['Password'];
  

 $query="UPDATE student_admission SET full_name='$fname',email='$email', student_number='$stuph',parent_number='$parph',c_name='$clgname',city='$city',batch_timing='$batchtm',gender='$gender',dob='$dob', Password='$pwd' WHERE student_id='$stdid'";
 $data=mysqli_query($con,$query);
 if($data)
 {
//    echo "<script>alert('Details Updated Successfully')</script>";
   echo "<meta http-equiv='refresh' content='0'>";                                                                                           
 }
 else
 {
  echo "Failed";
 }

}
else{
//   echo "All fields are required:";
}


?>

<!-- if($dp!=null || $dp == $img_folder ){
        $img_folder = $dp;
       }
    elseif($dp!=null || $dp != $newimg ){
        $img_folder = $newimg;
    } -->