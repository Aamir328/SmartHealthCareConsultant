<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$dbcon=mysqli_connect("localhost","root","","smart_healthcare_consultant");
?>
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
                                                <li><a href="maintain_department.php">Maintain</a></li>
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
            <h2>ADD Department</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    
    <!-- ##### Top Popular Courses Details Area Start ##### -->
    <div class="popular-course-details-area wow fadeInUp" data-wow-delay="300ms">
        <div class="single-top-popular-course d-flex align-items-center flex-wrap">
            <div class="popular-course-content">
                <!--<h5 align="center">New Panchayat</h5>-->
                <span></span>
                
					<table>
					<form align="center" method="post" action="add_department_db.php">
						<br>
						<tr><td colspan="2">Enter the name of department to add in database</td></tr>
						
						<tr><td><br><br></td></tr>
						<tr><td>Department name:</td>
							<td><input type="text" name="dept_nm"></td>
						</tr>
						<tr><td><br><br></td></tr>
						
						
						<tr><td><br><br></td></tr>	
						<tr><td colspan="2" align="center"><input  class="btn academy-btn btn-sm mt-15" type="submit" value="add"></td></tr>
							</form></table>		
            </div>
            <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/d1.jpg);"></div>
        </div>
    </div>
    

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