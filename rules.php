<?php require 'config.php';

session_start();
$Email = $_SESSION['email'];

if($Email==true){

}else{
  header("location:/student_dashboard/student_register/login.php");
}

if(isset($Email)){

  $mb = $Email;

  $info = "SELECT student_id, full_name, gender, dob, email, branch, student_number, parent_number, course, c_name, batch_timing, photofile, city FROM student_admission WHERE email = '$mb'";

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
          <div class="student-profile py-4 up1">
            <div class="container">
            <div >
                        <a href="index"class="menu menu2">Home > </a>
                        <span class="menu1 menu2">Rules</span>
                        </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent text-center">
                      <img class="profile_img"   src="stuimg/<?php echo $dp ?>"  alt="student dp">
                      <h3><?php echo $fname ?></h3>
                    </div>
                    <div class="card-body"> 
                      <!--   PRN  (Permanent Registration Number) -->
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
                                                        <td><i class="fa fa-asterisk"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="rules?email=<?php echo $mb ?>">RULES AND REGULATIONS</a></td>
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
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Rules and Regulation</h3>
                      <br>

                      1. All students admitted in the institute must observe the rules and regulations that may be framed from time to time by the institute. <br><br>
                      2. Students are required to maintain absolute self-discipline in the institute campus. Violation of rules will result in severe disciplinary action against the offender including a warning of fine or suspension / expulsion from the institute or hostel or both depending on the gravity of the offence. In case of expulsion, the student will forfeit all the deposits and shall not be eligible for ant claim. <br><br>
                      3. All students will be required to give an undertaking duty countersigned by the parent(s)/ guardian(s) that they would abide by rules and regulations of the institute, including the hostels. <br><br>
                      4. Each student is responsible for the proper handling and safe custody of any apparatus or equipment that he/she may be using. In case of any intentional or negligent damage or loss to the institute property, the student shall have to pay the cost of repair or replacement. <br><br>
                      5. Student must show respect and obedience to all members of the staff as well as the managing authorities of the institute or else it will tantamount to indiscipline. <br><br>
                      6. Every student shall have to attend classes and practical. They are not supposed to leave institute premises without the permission of the dean of the institute. <br><br>
                      7. In case of illness permission has to be obedient from the dean of the institute to remain absent from studies. <br><br>
                      8. The fee schedule for all categories of students is 1st July to 15th July of the academic year and third semester, and 7th December to 21st December for second and fourth semester as per GP University schedule. In case a fee is not deposited till the due date a late fee of Rs. 1,000/- will be charged for the next fifteen days, failing to meet this dead line will automatically cause the name of the student struck off from the rolls of the institute. Fee shall only be received through demand draft. <br><br>
                      <a href="1.php" class="btn btn-light">Next</a>

                    </div>

                    <!-- partial -->

                  </div>
                </div>
              </div>
  </section>



  <!-- Analytics -->

</body>

</html>