
<?php require 'config.php'; 

session_start();
$Email = $_SESSION['email'];

if($Email==true){

}else{
  header("location:/student_dashboard/student_register/login.php");
}
?>
<?php 

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
  $branch = $rt['branch'];
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
                    <div class="student-profile py-4 up1 ">
                        <div class="container">
                            <div >
                        <a href="index"class="menu menu2">Home > </a>
                        <span class="menu1 menu2">JOB CALL</span>
                        </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img"   src="<?php echo $dp ?>"  alt="student dp">
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
        <div class="card shadow-sm" >
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="fa fa-phone-square"></i>&nbsp;JOB CALLS</h3>
          </div>
          <div class="card-body pt-0">
          
            <div class="cardOutline tapItem fs-unmask result job_e79ef11e07e399ed resultWithShelf sponTapItem desktop vjs-highlight css-kyg8or eu4oa1w0">
              <div class="slider_container css-g7s71f eu4oa1w0">

       
              <div class="slider_list css-kyg8or eu4oa1w0">
                  <div class="slider_item css-kyg8or eu4oa1w0">
                    <div class="job_seen_beacon">
                      <table class="jobCard_mainContent big6_visualChanges" cellpadding="0" cellspacing="0" role="presentation">
                        <tbody><tr><td class="resultContent">
                          <div class="css-1m4cuuf e37uo190">
                            <h2 class="jobTitle jobTitle-newJob css-bdjp2m eu4oa1w0" tabindex="-1">
                            

</div>
                      
                            
                              <a id="job_e79ef11e07e399ed" data-mobtk="1gp08q9hdjkbn800" data-jk="e79ef11e07e399ed" data-hiring-event="false" target="_blank" data-hide-spinner="true" role="button" aria-label="full details of Call Centre Agent" class="jcs-JobTitle css-jspxzf eu4oa1w0" href="/company/Hotel-Ashoka/jobs/Call-Centre-Agent-e79ef11e07e399ed?fccid=a24e67fa8e935553&amp;vjs=3">
                                <span title="Call Centre Agent" id="jobTitle-e79ef11e07e399ed">Call Centre Agent</span></a></h2>
                                
                                <div class="new css-ud6i3y eu4oa1w0">
                                  <span class="label css-1qj35nq omm eu4oa1w0">new</span>
                                </div>
                              </div>
                                <div class="heading6 company_location tapItem-gutter companyInfo">
                                  <span class="companyName">asterisc technocrats pvt ltd</span>
                                  <div class="companyLocation">Nagpur, Maharashtra</div>
                                </div>
                                  <div class="heading6 tapItem-gutter metadataContainer noJEMChips salaryOnly">
                                    <div class="metadata salary-snippet-container">
                                      <div class="attribute_snippet" data-testid="attribute_snippet_testid"> ₹12,000 - ₹20,000 a month</div>
                                    </div>
                                      <div class="metadata"><div class="attribute_snippet" data-testid="attribute_snippet_testid">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" role="presentation" xmlns="http://www.w3.org/2000/svg" aria-label="Job type" aria-hidden="true">
                                          <path fill="#595959" fill-rule="evenodd" d="M4.50226.5c-.27614 0-.5.223858-.5.5v2.1H.5c-.276142 0-.5.22386-.5.5v1.9h14V3.6c0-.27614-.2239-.5-.5-.5h-3.4977V1c0-.276142-.22389-.5-.50004-.5h-5Zm4.19962 2.6H5.30344V1.8h3.39844v1.3Z" clip-rule="evenodd"></path>
                                          <path fill="#595959" d="M5.70117 6.80005H0v5.20005c0 .2761.223857.5.5.5h13c.2761 0 .5-.2239.5-.5V6.80005H8.30117v.80322c0 .27614-.22386.5-.5.5h-1.6c-.27614 0-.5-.22386-.5-.5v-.80322Z"></path></svg> &nbsp;Full-time</div>
                                        </div>
                                          <div class="metadata"><div class="attribute_snippet" data-testid="attribute_snippet_testid">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15" role="presentation" aria-hidden="true" aria-label="Shift" height="15px">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5C10.866 14.5 14 11.366 14 7.5C14 3.63401 10.866 0.5 7 0.5C3.13401 0.5 0 3.63401 0 7.5C0 11.366 3.13401 14.5 7 14.5ZM6.2496 4.25C6.2496 4.11193 6.36153 4 6.4996 4H7.2996C7.43767 4 7.5496 4.11193 7.5496 4.25V7.62406L9.62708 8.82349C9.74665 8.89252 9.78762 9.04542 9.71858 9.16499L9.31858 9.85781C9.24955 9.97739 9.09665 10.0184 8.97708 9.94932L6.25028 8.375H6.2496V8.37461L6.24805 8.37371L6.2496 8.37102V4.25Z" fill="#595959"></path>
                                            </svg> &nbsp;Part-Time</div>
                                            <a href="https://asterisc.in/" class="btn btn-light "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
  <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
</svg>&nbsp;Apply</a>
                                          </div>
                                        </div>
                                              <div class="heading6 error-text tapItem-gutter">

                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
</ul></div></div></div></div></div></div>
          
<div class="card-body pt-0">
          
          <div class="cardOutline tapItem fs-unmask result job_e79ef11e07e399ed resultWithShelf sponTapItem desktop vjs-highlight css-kyg8or eu4oa1w0">
            <div class="slider_container css-g7s71f eu4oa1w0">
              <div class="slider_list css-kyg8or eu4oa1w0">
                <div class="slider_item css-kyg8or eu4oa1w0">
                  <div class="job_seen_beacon">
                    <table class="jobCard_mainContent big6_visualChanges" cellpadding="0" cellspacing="0" role="presentation">
                      <tbody><tr><td class="resultContent">
                        <div class="css-1m4cuuf e37uo190">
                          <h2 class="jobTitle jobTitle-newJob css-bdjp2m eu4oa1w0" tabindex="-1">
                            <a id="job_e79ef11e07e399ed" data-mobtk="1gp08q9hdjkbn800" data-jk="e79ef11e07e399ed" data-hiring-event="false" target="_blank" data-hide-spinner="true" role="button" aria-label="full details of Call Centre Agent" class="jcs-JobTitle css-jspxzf eu4oa1w0" href="/company/Hotel-Ashoka/jobs/Call-Centre-Agent-e79ef11e07e399ed?fccid=a24e67fa8e935553&amp;vjs=3">
                              <span title="Call Centre Agent" id="jobTitle-e79ef11e07e399ed">Call Centre Agent</span></a></h2>
                              <div class="new css-ud6i3y eu4oa1w0">
                                <span class="label css-1qj35nq omm eu4oa1w0">new</span>
                              </div>
                            </div>
                              <div class="heading6 company_location tapItem-gutter companyInfo">
                                <span class="companyName">Asterisc Institute</span>
                                <div class="companyLocation">Nagpur, Maharashtra</div>
                              </div>
                                <div class="heading6 tapItem-gutter metadataContainer noJEMChips salaryOnly">
                                  <div class="metadata salary-snippet-container">
                                    <div class="attribute_snippet" data-testid="attribute_snippet_testid"> ₹12,000 - ₹20,000 a month</div>
                                  </div>
                                    <div class="metadata"><div class="attribute_snippet" data-testid="attribute_snippet_testid">
                                      <svg width="14" height="13" viewBox="0 0 14 13" fill="none" role="presentation" xmlns="http://www.w3.org/2000/svg" aria-label="Job type" aria-hidden="true">
                                        <path fill="#595959" fill-rule="evenodd" d="M4.50226.5c-.27614 0-.5.223858-.5.5v2.1H.5c-.276142 0-.5.22386-.5.5v1.9h14V3.6c0-.27614-.2239-.5-.5-.5h-3.4977V1c0-.276142-.22389-.5-.50004-.5h-5Zm4.19962 2.6H5.30344V1.8h3.39844v1.3Z" clip-rule="evenodd"></path>
                                        <path fill="#595959" d="M5.70117 6.80005H0v5.20005c0 .2761.223857.5.5.5h13c.2761 0 .5-.2239.5-.5V6.80005H8.30117v.80322c0 .27614-.22386.5-.5.5h-1.6c-.27614 0-.5-.22386-.5-.5v-.80322Z"></path></svg> &nbsp;Full-time</div>
                                      </div>
                                        <div class="metadata"><div class="attribute_snippet" data-testid="attribute_snippet_testid">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15" role="presentation" aria-hidden="true" aria-label="Shift" height="15px">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5C10.866 14.5 14 11.366 14 7.5C14 3.63401 10.866 0.5 7 0.5C3.13401 0.5 0 3.63401 0 7.5C0 11.366 3.13401 14.5 7 14.5ZM6.2496 4.25C6.2496 4.11193 6.36153 4 6.4996 4H7.2996C7.43767 4 7.5496 4.11193 7.5496 4.25V7.62406L9.62708 8.82349C9.74665 8.89252 9.78762 9.04542 9.71858 9.16499L9.31858 9.85781C9.24955 9.97739 9.09665 10.0184 8.97708 9.94932L6.25028 8.375H6.2496V8.37461L6.24805 8.37371L6.2496 8.37102V4.25Z" fill="#595959"></path>
                                          </svg> &nbsp;Part-Time</div>

                                          <a href="https://asterisc.in/" class="btn btn-light " ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
  <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
</svg>&nbsp;Apply</a>
                                        
                                        </div>
                                      </div>
                                            <div class="heading6 error-text tapItem-gutter">

                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
</ul></div></div></div></div></div></div>
        
<div class="card-body pt-0">
          
          <div class="cardOutline tapItem fs-unmask result job_e79ef11e07e399ed resultWithShelf sponTapItem desktop vjs-highlight css-kyg8or eu4oa1w0">
            <div class="slider_container css-g7s71f eu4oa1w0">
              <div class="slider_list css-kyg8or eu4oa1w0">
                <div class="slider_item css-kyg8or eu4oa1w0">
                  <div class="job_seen_beacon">
                    <table class="jobCard_mainContent big6_visualChanges" cellpadding="0" cellspacing="0" role="presentation">
                      <tbody><tr><td class="resultContent">
                        <div class="css-1m4cuuf e37uo190">
                          <h2 class="jobTitle jobTitle-newJob css-bdjp2m eu4oa1w0" tabindex="-1">
                            <a id="job_e79ef11e07e399ed" data-mobtk="1gp08q9hdjkbn800" data-jk="e79ef11e07e399ed" data-hiring-event="false" target="_blank" data-hide-spinner="true" role="button" aria-label="full details of Call Centre Agent" class="jcs-JobTitle css-jspxzf eu4oa1w0" href="/company/Hotel-Ashoka/jobs/Call-Centre-Agent-e79ef11e07e399ed?fccid=a24e67fa8e935553&amp;vjs=3">
                              <span title="Call Centre Agent" id="jobTitle-e79ef11e07e399ed">Call Centre Agent</span></a></h2>
                              <div class="new css-ud6i3y eu4oa1w0">
                                <span class="label css-1qj35nq omm eu4oa1w0">new</span>
                              </div>
                            </div>
                              <div class="heading6 company_location tapItem-gutter companyInfo">
                                <span class="companyName">CodeLine.AI Pvt Ltd</span>
                                <div class="companyLocation">Nagpur, Maharashtra</div>
                              </div>
                                <div class="heading6 tapItem-gutter metadataContainer noJEMChips salaryOnly">
                                  <div class="metadata salary-snippet-container">
                                    <div class="attribute_snippet" data-testid="attribute_snippet_testid"> ₹12,000 - ₹20,000 a month</div>
                                  </div>
                                    <div class="metadata"><div class="attribute_snippet" data-testid="attribute_snippet_testid">
                                      <svg width="14" height="13" viewBox="0 0 14 13" fill="none" role="presentation" xmlns="http://www.w3.org/2000/svg" aria-label="Job type" aria-hidden="true">
                                        <path fill="#595959" fill-rule="evenodd" d="M4.50226.5c-.27614 0-.5.223858-.5.5v2.1H.5c-.276142 0-.5.22386-.5.5v1.9h14V3.6c0-.27614-.2239-.5-.5-.5h-3.4977V1c0-.276142-.22389-.5-.50004-.5h-5Zm4.19962 2.6H5.30344V1.8h3.39844v1.3Z" clip-rule="evenodd"></path>
                                        <path fill="#595959" d="M5.70117 6.80005H0v5.20005c0 .2761.223857.5.5.5h13c.2761 0 .5-.2239.5-.5V6.80005H8.30117v.80322c0 .27614-.22386.5-.5.5h-1.6c-.27614 0-.5-.22386-.5-.5v-.80322Z"></path></svg> &nbsp;Full-time</div>
                                      </div>
                                        <div class="metadata"><div class="attribute_snippet" data-testid="attribute_snippet_testid">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15" role="presentation" aria-hidden="true" aria-label="Shift" height="15px">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14.5C10.866 14.5 14 11.366 14 7.5C14 3.63401 10.866 0.5 7 0.5C3.13401 0.5 0 3.63401 0 7.5C0 11.366 3.13401 14.5 7 14.5ZM6.2496 4.25C6.2496 4.11193 6.36153 4 6.4996 4H7.2996C7.43767 4 7.5496 4.11193 7.5496 4.25V7.62406L9.62708 8.82349C9.74665 8.89252 9.78762 9.04542 9.71858 9.16499L9.31858 9.85781C9.24955 9.97739 9.09665 10.0184 8.97708 9.94932L6.25028 8.375H6.2496V8.37461L6.24805 8.37371L6.2496 8.37102V4.25Z" fill="#595959"></path>
                                          </svg> &nbsp;Part-Time</div>
                                          <a href="https://asterisc.in/" class="btn btn-light "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
  <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
</svg>&nbsp;Apply</a>
                                        </div>
                                      </div>
                                            <div class="heading6 error-text tapItem-gutter">

                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
</ul></div></div></div></div></div>
<a href="job_call.php" class="btn btn-light preri">previous</a>
<a href="next1.php" class="btn btn-light nex">Next</a>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
     

    <!-- Analytics -->

	</body>
</html>

