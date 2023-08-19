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
                      <img class="profile_img"   src="<?php echo $dp ?>"  alt="student dp">
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

                      9. Once the fee is deposited, it will not be refunded, transferred or adjusted in any other account. If a student leaves the course in mid-term, he/she will be liable to pay the balance of fee for the whole course. <br><br>
                      10. Students are advised not to proceed on leave without permission of Dean of the Institute. If so, they will be fined Rs. 50/- per lecture and 100/- per day. <br><br>
                      11. It is compulsory for the student to take all weekly, monthly and spot tests/examinations. Students abstaining from these tests shall be severely dealt with. Make up tests/examinations are pre-requisite for them and can be taken on payment of Rs. 1,000/-per each test/examination. Exemption to a student from the tests/examinations is permitted only in case of hospitalization. <br><br>
                      12. Students will strictly adhere to the prescribed dress code of the institute, and the violating students will not be allowed to attend classes. <br><br>
                      13. President of the institute reserves the right to rusticate the student found indulging in acts prejudicial to the interest of the institute or involved in gross indiscipline immoral acts. <br><br>
                      14. Ragging of any kind is strictly prohibited. Any student found ragging shall be strictly punished by the management as per the law and rules of the Government/HPU. <br><br>
                      15. 75% attendance is compulsory in all academic activities. Students failing to attain the prescribed attendant will not be allowed to appear in the university examination. <br><br>
                      16. All Scholarships and Fee concession should earn 75% of attendance, failing which the entire Scholarship and Fee concession amount will be refunded the institute. <br><br>
                      <a href="rules.php" class="btn btn-light">Back</a>

                    </div>

                    <!-- partial -->

                  </div>
                </div>
              </div>
  </section>



  <!-- Analytics -->

</body>

</html>