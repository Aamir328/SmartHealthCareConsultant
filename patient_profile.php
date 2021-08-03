<?php
	session_start();
	$adhar_no=$_SESSION['uname'];
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	$sql="select * from patient where adhar_no='$adhar_no'";
	$result=mysqli_query($con,$sql);
	$arr=mysqli_fetch_array($result);
	$adhar_no=$arr['adhar_no'];
	$fname=$arr['fname'];
	$mname=$arr['mname'];
	$lname=$arr['lname'];
	$name=$fname.' '.$mname.' '.$lname;
	$pin=$arr['pin'];
	$phno=$arr['ph_no'];
	$addr=$arr['address'];
	$email=$arr['email_id'];
	$dob=$arr['dob'];
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
                                <a href="index.html"><img src="img/core-img/logooo.jpg" style="width:80px; height:80px" alt="logo"></a>
                            </div>
                            <div class="login-content">
                                <a href="patient_profile.php"><img src="img/core-img/proedit.png" height="70" width="70" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

         <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About</a>
                                        
                                    </li>
                                    <li><a href="department.php">Department</a></li>
                                    <li><a href="doctors.php">Doctors</a></li>
                                    <li><a href="contact.php">Contact</a></li>
									<li><a href="loggin.php"><img src="img/core-img/logout.png" height="50" width="50" alt="LO">LogOut</a></li>

                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="notification_patient.php"><img src="img/core-img/noti.png" style="width:50px ; height:50px"> <span>Notifications</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
   <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
     <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/d6.jpg);">
        <div class="bradcumbContent">
            <h2>PROFILE</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
	
	
	
	  <!-- #####Register Area ##### -->
    <div class="popular-course-details-area wow fadeInUp" data-wow-delay="300ms">
        <div class="single-top-popular-course d-flex align-items-center flex-wrap">
            <div class="popular-course-content">
					<table>
						<form method="post" action="Edit_patient_profile.php">
							
						  <tr><td>Aadhar no:</td>
						  <td><?php echo $adhar_no;?></td>
						  <tr><td><br></td></tr>
						  <tr><td>Name:</td>
						  <td><?php echo $name;?></td>							
						   <tr><td><br></td></tr>
						  <tr><td>Date Of Birth:</td>
						  <td><?php echo $dob;?></td>						 
						  <tr><td><br></td></tr>
						  <tr><td>Phone number:</td>
						  <td><?php echo $phno;?></td>						 
						  <tr><td><br></td></tr>
						  <tr><td>Email id:</td>
						  <td><?php echo $email;?></td>
						  </td><tr><td><br></td></tr>
						  <tr><td>Address:</td>
						  <td><?php echo $addr;?></td>						 
						  <tr><td><br></td></tr>
						  <tr><td>Pin Code:</td>
						  <td><?php echo $pin;?></td>						 
						  <tr><td><br></td></tr>
						  
						  
						  
						
						<tr><td colspan="2" align="center"><input class="btn academy-btn btn-sm mt-15" type="submit" value="Edit Profile"></td>
						<br><br><br>
				
						</form>
					</table>
              
				</div>
            <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/d1.jpg);"></div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Details Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="img/core-img/logooo.jpg" alt=""></a>
                            </div>
                            <p>Smart Health care consultant is a consultant to your finger tips,know your problem and get an appointment to your closest doctor.</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Usefull Links</h6>
                            </div>
                            <nav>
                                <ul class="useful-links">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Schemes &amp; Projects</a></li>
                                    <li><a href="#">Budget</a></li>
                                    <li><a href="#">Departments</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Gallery</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="img/bg-img/hos1.jpg" class="gallery-img" title="Gallery Image 1"><img src="img/bg-img/hos1.jpg" alt=""></a>
                                <a href="img/bg-img/hos2.jpg" class="gallery-img" title="Gallery Image 2"><img src="img/bg-img/hos2.jpg" alt=""></a>
                                <a href="img/bg-img/hos3.jpg" class="gallery-img" title="Gallery Image 3"><img src="img/bg-img/hos3.jpg" alt=""></a>
                                <a href="img/bg-img/orthopedics1.jpg" class="gallery-img" title="Gallery Image 4"><img src="img/bg-img/orthopedics1.jpg" alt=""></a>
                                <a href="img/bg-img/medi.jpg" class="gallery-img" title="Gallery Image 5"><img src="img/bg-img/medi.jpg" alt=""></a>
                                <a href="img/bg-img/ophthalmology.jpg" class="gallery-img" title="Gallery Image 6"><img src="img/bg-img/ophthalmology.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>New Delhi,India</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Main: (+91)9454827328 <br>Office: (+91)7835838322</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>smart_healthcare@consult.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

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