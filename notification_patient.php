<?php
	session_start();
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	$uname=$_SESSION['uname'];
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
                                <a href="patient_profile.php"><img src="img/core-img/proedit.png" height="70" width="70" alt="profile"></a>
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

                           <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="patient.php">Home</a></li>
                                     <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="disease.php">Diseases</a></li>
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
            <h2>Notifications</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>Welcome</span>
                        <h2>YOUR APPOINTMENT'S</h2>
					
                    </div>
                </div>
            </div>
       
	  
               <!-- ##### Testimonials Area Start ##### -->
    <div >
            <div >
                <div >
                    <div  data-wow-delay="300ms">
					<?php
					$disp="
					
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								
								
								<th style='text-align:center'>Doctor Name</th>
								<th style='text-align:center'>Your Issues</th>
								
								<th style='text-align:center'>Appointment Date</th>
								<th style='text-align:center'>Appointment Time</th>
								<th style='text-align:center'>Doctor Phone.no</th>
								<th style='text-align:center'>Address</th>
								
								
							</tr>";
							$sql="select * from appointment where patient_id='$uname' and status='APPROVE'";
							$res=mysqli_query($con,$sql);
							
							while($arr=mysqli_fetch_array($res))
							{
								$app_id=$arr['appointment_id'];
								$doctor_id=$arr['doctor_id'];
								$issues=$arr['issues'];
								$req_dt=$arr['request_dt'];
								$app_dt=$arr['dt_of_appointment'];
								$app_time=$arr['time_of_appointment'];
								
								$sql2="select * from doctor where adhar_no='$doctor_id'";
								$res2=mysqli_query($con,$sql2);
								$arr2=mysqli_fetch_array($res2);
								$fname=$arr2['fname'];
								$lname=$arr2['lname'];
								$doctor_nm=$fname.' '.$lname;
								$doc_phno=$arr2['ph_no'];
								$address=$arr2['address'];
								$pin=$arr2['pin'];
								$doc_address=$address.'|'.$pin;
								$_SESSION['app_id']=$app_id;
								$disp.="
	 						<tr>
								
								
								<td align='center'>$doctor_nm</td>
								<td align='center'>$issues</td>
								
								<td align='center'>$app_dt</td>
								<td align='center'>$app_time</td>
								<td align='center'>$doc_phno</td>
								<td align='center'>$doc_address</td>
								
								
							</tr>";
							}
							$disp.="	
						</table>
						";
						print $disp;
						?>
						
						
                    </div>
                </div>
            </div>
			<br><br><br><br>
			 <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span></span>
                        <h4>YOUR QUERIES'S</h4>
					
                    </div>
                </div>
            </div>
			  <!-- ##### Testimonials Area Start ##### -->
    <div >
            <div >
                <div >
                    <div  data-wow-delay="300ms">
					<?php
					$disp="
					
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								
								
								<th style='text-align:center'>QUery</th>
								<th style='text-align:center'>Solution</th>
								
								<th style='text-align:center'>Answered By</th>
								
								
								
							</tr>";
							$sql="select * from query_soln where query_by='$uname' and status='DONE'";
							$res=mysqli_query($con,$sql);
							
							while($arr=mysqli_fetch_array($res))
							{
								$query_id=$arr['query_id'];
								$sol_by=$arr['solution_by'];
								$query=$arr['query'];
								$sol=$arr['solution'];
								
								
								$sql2="select * from doctor where adhar_no='$sol_by'";
								$res2=mysqli_query($con,$sql2);
								$arr2=mysqli_fetch_array($res2);
								
								$fnm=$arr2['fname'];
								$lnm=$arr2['lname'];
								$dnm=$fnm.' '.$lnm;
								$d_dept_id=$arr2['department'];
								
								$sql3="select * from department where dept_id='$d_dept_id'";
								$res3=mysqli_query($con,$sql3);
								$arr3=mysqli_fetch_array($res3);
								$d_dept=$arr3['dept_nm'];
								
								$sol_by=$dnm.'|'.$d_dept;
								
								
								$disp.="
	 						<tr>
								
								
								<td align='center'>$query</td>
								<td align='center'>$sol</td>
								
								<td align='center'>$sol_by</td>
								
								
								
							</tr>";
							}
							$disp.="	
						</table>
						";
						print $disp;
						?>
						
						
                    </div>
                </div>
            </div>
			
       
            
           
    <!-- ##### Testimonials Area End ##### -->
			
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved!<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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