<?php require 'config.php';


session_start();
$Email = $_SESSION['email'];

if($Email==true){

}else{
  header("location:/student_dashboard/student_register/login.php");
}


if(isset($Email)){

  $mb = $Email;

  $info = "SELECT student_id, full_name, gender, dob, email, student_number, parent_number, course, c_name, batch_timing, city FROM student_admission WHERE email = '$mb'";

  $result = mysqli_query($con, $info);

  $rt = mysqli_fetch_array($result);

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
      
      
      </style>

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

  <header class="ScriptHeader">
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="rt-heading">
          <h1>Welcome to Asterisc Student Profile</h1>
          <p>A responsive student profile page design.</p>
          <marquee width="100%" direction="left">
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
          <div class="student-profile py-4">
            <div class="container">
            <div >
                        <a href="job_call"class="menu"> < Back </a>
                        
                        </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent text-center">
                      <img class="profile_img" src="css/user.png" alt="student dp">
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
                      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>ASTERISC JOB APPLICATION</h3>
                      <br>

                      <form action="//submit.form" id="EmploymentApplication100" method="post" onsubmit="return ValidateForm(this);">
                        <script type="text/javascript">
                          function ValidateForm(frm) {
                            if (frm.First_Name.value == "") {
                              alert('First name is required.');
                              frm.First_Name.focus();
                              return false;
                            }
                            if (frm.Last_Name.value == "") {
                              alert('Last name is required.');
                              frm.Last_Name.focus();
                              return false;
                            }
                            if (frm.Email_Address.value == "") {
                              alert('Email address is required.');
                              frm.Email_Address.focus();
                              return false;
                            }
                            if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) {
                              alert('Please enter a valid email address.');
                              frm.Email_Address.focus();
                              return false;
                            }
                            if (frm.Position.value == "") {
                              alert('Position is required.');
                              frm.Position.focus();
                              return false;
                            }
                            if (frm.Phone.value == "") {
                              alert('Phone is required.');
                              frm.Phone.focus();
                              return false;
                            }
                            return true;
                          }
                        </script>
                        <table border="0" cellpadding="5" cellspacing="0">
                          <tr>
                            <td style="width: 50%">
                              <label for="First_Name"><b>Full name *</b></label><br />
                              <input name="First_Name" type="text" value= "<?php echo $fname ?>" maxlength="50" style="width:100%;max-width: 260px" />
                            </td>
                            
                          </tr>
                          <tr>
                            <td colspan="2">
                              <label for="Email_Address"><b>Email *</b></label><br />
                              <input name="Email_Address" type="text" value="<?php echo $email ?>" maxlength="100" style="width:100%;max-width: 535px" />
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <label for="Portfolio"><b>Portfolio website</b></label><br />
                              <input name="Portfolio" type="text" maxlength="255" value="http://" style="width:100%;max-width: 535px" />
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label for="Phone"><b>Phone *</b></label><br />
                              <input name="Phone" type="text" maxlength="50" value="<?php echo  $stuph ?>" style="width:100%;max-width: 260px" />
                            </td>
                          </tr>


                          <tr>
                            <td>
                              <div class="experimental">
                                <!-- Removed option -->
                                <div class="upload-paper-container">
                                  <label class="block" for="paper-file">Upload Your Resume:</label>
                                  <input accept=".jpg, .jpeg, .png" type="file" id="paper-file" />
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td colspan="2">
                              <label for="Reference"><b>Reference / Comments / Questions</b></label><br />
                              <textarea name="Reference" rows="7" cols="40" style="width:100%;max-width: 535px"></textarea>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2" style="text-align: center;">

                              <script src="#" type="text/javascript"></script>
                              <input name="skip_submit" type="submit" value="Submit" />
                            </td>
                          </tr>
                        </table>
                      </form>

                    </div>

                    <!-- partial -->

                  </div>
                </div>
              </div>
  </section>



  <!-- Analytics -->

</body>

</html>