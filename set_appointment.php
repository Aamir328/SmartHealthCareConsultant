<?php
	session_start();
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	$app_id=$_REQUEST['app_id'];
	//$_SESSION['did']=$disease_id;
	$sql1="select * from appointment where appointment_id='$app_id'";
	$result1=mysqli_query($con,$sql1);
	$arr1=mysqli_fetch_array($result1);
	$patient_id=$arr1['patient_id'];
	$issues=$arr1['issues'];
	$req_dt=$arr1['request_dt'];
	
	$sql2="select * from patient where adhar_no='$patient_id'";
	$result2=mysqli_query($con,$sql2);
	$arr2=mysqli_fetch_array($result2);
	$fnm=$arr2['fname'];
	$mnm=$arr2['mname'];
	$lnm=$arr2['lname'];
	$patient_nm=$fnm.' '.$mnm.' '.$lnm;
	$ph_no=$arr2['ph_no'];
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SHC</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logooo.jpg">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.php"><img src="img/core-img/logooo.jpg" style="width:100px; height:100px" alt="logo"></a>
                            </div>
                            <!--<div class="login-content">
                                <a href="#">Register / Login</a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/d6.jpg);">
        <div class="bradcumbContent">
            <h2>Set Appointment</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Top Popular Courses Area End ##### -->

    <!-- ##### Top Popular Courses Details Area Start ##### -->
    <div class="popular-course-details-area wow fadeInUp" data-wow-delay="300ms">
        <div class="single-top-popular-course d-flex align-items-center flex-wrap">
            <div class="popular-course-content">
               <!-- Contact Form Area -->
                            <div class="col-12 col-lg-7">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
								<table>
                                    <form action="set_appointment_db.php" method="post">
                                      <tr> <th>Appointment ID:</th> <td><input type="text" class="form-control" id="app_id" name="app_id" value="<?php echo $app_id?>" ></td></tr>
									  <tr><td><br></td></tr>
                                       <tr><th>Patient ID:</th><td><input type="text" class="form-control" id="disease_nm" value="<?php echo $patient_id?>" disabled></td></tr>
										<tr><td><br></td></tr>
                                       <tr><th>Patient name:</th><td><input type="text" class="form-control" id="" value="<?php echo $patient_nm?>" disabled></td></tr>
                                        <tr><td><br></td></tr>
										<tr><th>Patient Phone number:</th><td><input type="text" class="form-control" id="" value="<?php echo $ph_no?>" disabled></td></tr>
                                        <tr><td><br></td></tr>
                                       <tr><th>Issues:</th><td><textarea name="issues" class="form-control" id="issues" cols="10" rows="10"  disabled><?php echo $issues?></textarea></td></tr>
                                         <tr><td><br></td></tr>
										 <tr><th>Requested Date:</th><td><input type="date" name="req_dt" class="form-control" id="req_dt" cols="50" rows="10" value="<?php echo $req_dt ?>" disabled ></td></tr>
                                         <tr><td><br></td></tr>
										 <tr><th>Appointment Date:</th><td><input type="date" name="app_dt" class="form-control" id="app_dt" required></td></tr>
                                         <tr><td><br></td></tr>
										 <tr><th>Appointment Time:</th><td><input type="time" name="app_time" class="form-control" id="app_time" required ></td></tr>
                                         <tr><td><br></td></tr>
                                       <tr><th colspan="2"><button class="btn academy-btn mt-30" type="submit" >SET</button>
									   </th></tr>
                                    </form>
									</table>
                                </div>
                            </div>
				
		
				
              
            </div>
            <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/d1.jpg);"></div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Details Area End ##### -->

    
    <!-- ##### CTA Area End ##### -->

   
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>