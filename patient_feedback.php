<?php
	session_start();
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
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
                                <a href="index.html"><img src="img/core-img/logooo.jpg" style="width:100px; height:100px" alt=""></a>
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
                                    <li><a href="admin.php">Home</a></li>
                                     <li><a href="#">Department</a>
										<ul class="dropdown">
                                                <li><a href="maintain_panchayat.php">Maintain</a></li>
                                                <li><a href="add_department.php">Add Department </a></li>
                                        </ul>
									 </li>
                                    <li><a href="maintain_doctors.php">Maintain Doctors</a>
                                    
											
                                    </li>
                                     <li><a href="maintain_diseases.php">Maintain Diseases</a>
										
									</li>
									 <li><a href="view_patients.php">View patients</a>
										
									</li>
									
									
                                   
                                    <li><a href="patient_feedback.php">Feedback</a></li>
									<li><a href="loggin.php"><img src="img/core-img/logout.png" height="50" width="50" alt="LO">LogOut</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
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
            <h2>Feedback</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>List of</span>
                        <h3>Patient's Feedback</h3>
					
                    </div>
                </div>
            </div>
       
	   
	   
               <!-- ##### Testimonials Area Start ##### -->
    <div  class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/d2.jpg);">
        <div >
            <div >
                <div >
                    <div  data-wow-delay="300ms">
					<?php
					$disp="
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								<th style='text-align:center'>Feedbcak ID</th>
								<th style='text-align:center'>Patient ID</th>
								<th style='text-align:center'>Doctor ID</th>
								<th style='text-align:center'>Feedback</th>
								
							</tr>";
							$sql="select * from feedback";
							$res=mysqli_query($con,$sql);
							while($arr=mysqli_fetch_array($res))
							{
								$feedback_id=$arr['feedback_id'];
								$patient_id=$arr['patient_id'];
								$doctor_id=$arr['doctor_id'];
								$feedback=$arr['feedback'];
								
								
								$disp.="
							<tr>
								
								<td align='center'>$feedback_id</td>
								<td align='center'>$patient_id</td>
								<td align='center'>$doctor_id</td>
								<td align='center'>$feedback</td>
								
								
								
							</tr>";
							}
							$disp.="	
						</table>";
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