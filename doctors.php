<?php
	session_start();
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	
	$adhar_no=$_SESSION['uname'];
	
	$sql="select * from patient where adhar_no='$adhar_no'";
	$result=mysqli_query($con,$sql);
	$arr=mysqli_fetch_array($result);
	$upin=$arr['pin'];
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
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/d8.jpg);">
        <div class="bradcumbContent">
            <h2>The Doctors</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
<!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="img/bg-img/ortho3.png" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">ORTHOPEDICS DOCTORS</a>
                                    <!-- Post Meta -->
                                   
                                    <!-- Doctors table -->
									<?php
					$disp="
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								
								
								<th>Name</th>
								
								<th>Address</th>
								
								<th>Phone number</th>
								<th>Email ID</th>
								<th>Appoint</th>
								<th>Feedback</th>
								
							</tr>";
							$sql="select * from doctor where department='1'";
							$res=mysqli_query($con,$sql);
							while($arr=mysqli_fetch_array($res))
							{
								$dadhar=$arr['adhar_no'];
								$dlicense=$arr['license_no'];
								$ddept=$arr['department'];
								$dfname=$arr['fname'];
								$dlname=$arr['lname'];
								$name=$dfname.' '.$dlname;
								$pin=$arr['pin'];
								$dphno=$arr['ph_no'];
								$daddr=$arr['address'];
								$demail=$arr['email'];
								$address=$daddr.' | '.$pin;
								$disp.="
							<tr>
								
								
								
								<td>$name</td>
								
								<td>$address</td>
								
								<td>$dphno</td>
								
								<td>$demail</td>
								<td align='center'><a href='appointment.php?doc_id=$dadhar'><img src='img/core-img/appoint.png'  height='35' width='35'></a></td>
								<td align='center'><a href='feedback.php?doc_id=$dadhar'><img src='img/core-img/feedback.png'  height='35' width='35'></a></td>
								
							</tr>";
							}
							$disp.="	
							</table>";
							print $disp;
							?>
									<!-- Post Title -->
                                    <a href="#" class="post-title">NEARBY DOCTORS</a>
                                     <!-- Doctors table -->
									<?php
					$disp="
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								
								
								<th>Name</th>
								
								<th>Address</th>
								
								<th>Phone number</th>
								<th>Email ID</th>
								<th>Appoint</th>
								<th>Feedback</th>
								
							</tr>";
							$sql="select * from doctor where department='1' and pin='$upin'";
							$res=mysqli_query($con,$sql);
							while($arr=mysqli_fetch_array($res))
							{
								$dadhar=$arr['adhar_no'];
								$dlicense=$arr['license_no'];
								$ddept=$arr['department'];
								$dfname=$arr['fname'];
								$dlname=$arr['lname'];
								$name=$dfname.' '.$dlname;
								$pin=$arr['pin'];
								$dphno=$arr['ph_no'];
								$daddr=$arr['address'];
								$demail=$arr['email'];
								$address=$daddr.' | '.$pin;
								$disp.="
							<tr>
								
								
								
								<td>$name</td>
								
								<td>$address</td>
								
								<td>$dphno</td>
								
								<td>$demail</td>
								<td align='center'><a href='appointment.php?doc_id=$dadhar'><img src='img/core-img/appoint.png'  height='35' width='35'></a></td>
								<td align='center'><a href='feedback.php?doc_id=$dadhar'><img src='img/core-img/feedback.png'  height='35' width='35'></a></td>
							</tr>";
							}
							$disp.="	
							</table>";
							print $disp;
							?>
									
									
                                </div>
                            </div>

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="400ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="img/bg-img/dental5.jpg" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">DENTAL DOCTORS</a>
                                    <!-- Post Meta -->
                                   
                                     <!-- Doctors table -->
									<?php
					$disp="
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								
								
								<th>Name</th>
								
								<th>Address</th>
								
								<th>Phone number</th>
								<th>Email ID</th>
								<th>Appoint</th>
								<th>Feedback</th>
								
							</tr>";
							$sql="select * from doctor where department='2'";
							$res=mysqli_query($con,$sql);
							while($arr=mysqli_fetch_array($res))
							{
								$dadhar=$arr['adhar_no'];
								$dlicense=$arr['license_no'];
								$ddept=$arr['department'];
								$dfname=$arr['fname'];
								$dlname=$arr['lname'];
								$name=$dfname.' '.$dlname;
								$pin=$arr['pin'];
								$dphno=$arr['ph_no'];
								$daddr=$arr['address'];
								$demail=$arr['email'];
								$address=$daddr.' | '.$pin;
								$disp.="
							<tr>
								
								
								
								<td>$name</td>
								
								<td>$address</td>
								
								<td>$dphno</td>
								
								<td>$demail</td>
								<td align='center'><a href='appointment.php?doc_id=$dadhar'><img src='img/core-img/appoint.png'  height='35' width='35'></a></td>
								<td align='center'><a href='feedback.php?doc_id=$dadhar'><img src='img/core-img/feedback.png'  height='35' width='35'></a></td>
							</tr>";
							}
							$disp.="	
							</table>";
							print $disp;
							?>
									<!-- Post Title -->
                                    <a href="#" class="post-title">NEARBY DOCTORS</a>
                                     <!-- Doctors table -->
									<?php
									$disp="
									<table text='white' bgcolor='#f2f3f4' width=100% border=1>
									<tr>
										<th>Name</th>
										<th>Address</th>
										<th>Phone number</th>
										<th>Email ID</th>
										<th>Appoint</th>
										<th>Feedback</th>
									</tr>";
									
									$sql="select * from doctor where department='2' and pin='$upin'";
									$res=mysqli_query($con,$sql);
									while($arr=mysqli_fetch_array($res))
									{
										$dadhar=$arr['adhar_no'];
										$dlicense=$arr['license_no'];
										$ddept=$arr['department'];
										$dfname=$arr['fname'];
										$dlname=$arr['lname'];
										$name=$dfname.' '.$dlname;
										$pin=$arr['pin'];
										$dphno=$arr['ph_no'];
										$daddr=$arr['address'];
										$demail=$arr['email'];
										$address=$daddr.' | '.$pin;
										$disp.="
										<tr>
											<td>$name</td>
											<td>$address</td>
											<td>$dphno</td>
											<td>$demail</td>
											<td align='center'><a href='appointment.php?doc_id=$dadhar'><img src='img/core-img/appoint.png'  height='35' width='35'></a></td>
											<td align='center'><a href='feedback.php?doc_id=$dadhar'><img src='img/core-img/feedback.png'  height='35' width='35'></a></td>
										</tr>";
									}
									$disp.="	
									</table>";
									print $disp;
									?>
									</div>
                            </div>

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="500ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="img/bg-img/eye2.jpg" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">OPTHALMOLOGY DOCTORS</a>
                                   
                                     <!-- Doctors table -->
									<?php
					$disp="
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								
								
								<th>Name</th>
								
								<th>Address</th>
								
								<th>Phone number</th>
								<th>Email ID</th>
								<th>Appoint</th>
								<th>Feedback</th>
								
							</tr>";
							$sql="select * from doctor where department='3'";
							$res=mysqli_query($con,$sql);
							while($arr=mysqli_fetch_array($res))
							{
								$dadhar=$arr['adhar_no'];
								$dlicense=$arr['license_no'];
								$ddept=$arr['department'];
								$dfname=$arr['fname'];
								$dlname=$arr['lname'];
								$name=$dfname.' '.$dlname;
								$pin=$arr['pin'];
								$dphno=$arr['ph_no'];
								$daddr=$arr['address'];
								$demail=$arr['email'];
								$address=$daddr.' | '.$pin;
								$disp.="
							<tr>
								
								
								
								<td>$name</td>
								
								<td>$address</td>
								
								<td>$dphno</td>
								
								<td>$demail</td>
								<td align='center'><a href='appointment.php?doc_id=$dadhar'><img src='img/core-img/appoint.png'  height='35' width='35'></a></td>
								<td align='center'><a href='feedback.php?doc_id=$dadhar'><img src='img/core-img/feedback.png'  height='35' width='35'></a></td>
							</tr>";
							}
							$disp.="	
							</table>";
							print $disp;
							?>
									<!-- Post Title -->
                                    <a href="#" class="post-title">NEARBY DOCTORS</a>
                                     <!-- Doctors table -->
									<?php
					$disp="
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								
								
								<th>Name</th>
								
								<th>Address</th>
								
								<th>Phone number</th>
								<th>Email ID</th>
								<th>Appoint</th>
								<th>Feedback</th>
								
							</tr>";
							$sql="select * from doctor where department='3' and pin='$upin'";
							$res=mysqli_query($con,$sql);
							while($arr=mysqli_fetch_array($res))
							{
								$dadhar=$arr['adhar_no'];
								$dlicense=$arr['license_no'];
								$ddept=$arr['department'];
								$dfname=$arr['fname'];
								$dlname=$arr['lname'];
								$name=$dfname.' '.$dlname;
								$pin=$arr['pin'];
								$dphno=$arr['ph_no'];
								$daddr=$arr['address'];
								$demail=$arr['email'];
								$address=$daddr.' | '.$pin;
								$disp.="
							<tr>
								
								
								
								<td>$name</td>
								
								<td>$address</td>
								
								<td>$dphno</td>
								
								<td>$demail</td>
								<td align='center'><a href='appointment.php?doc_id=$dadhar'><img src='img/core-img/appoint.png'  height='35' width='35'></a></td>
								<td align='center'><a href='feedback.php?doc_id=$dadhar'><img src='img/core-img/feedback.png'  height='35' width='35'></a></td>
							</tr>";
							}
							$disp.="	
							</table>";
							print $disp;
							?>
									
									
                                </div>
                            </div>

							<!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="500ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="img/bg-img/pedia1.jpg" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">PEDIATRICS DOCTOR</a>
                                   
                                    
                                     <!-- Doctors table -->
									<?php
										$disp="
											<table text='white' bgcolor='#f2f3f4' width=100% border=1>
											<tr>
								
								
											<th>Name</th>
								
											<th>Address</th>
								
											<th>Phone number</th>
											<th>Email ID</th>
											<th>Appoint</th>
											<th>Feedback</th>
								
											</tr>";
							$sql="select * from doctor where department='4'";
							$res=mysqli_query($con,$sql);
							while($arr=mysqli_fetch_array($res))
							{
								$dadhar=$arr['adhar_no'];
								$dlicense=$arr['license_no'];
								$ddept=$arr['department'];
								$dfname=$arr['fname'];
								$dlname=$arr['lname'];
								$name=$dfname.' '.$dlname;
								$pin=$arr['pin'];
								$dphno=$arr['ph_no'];
								$daddr=$arr['address'];
								$demail=$arr['email'];
								$address=$daddr.' | '.$pin;
								$disp.="
							<tr>
								
								
								
								<td>$name</td>
								
								<td>$address</td>
								
								<td>$dphno</td>
								
								<td>$demail</td>
								<td align='center'><a href='appointment.php?doc_id=$dadhar'><img src='img/core-img/appoint.png'  height='35' width='35'></a></td>
								<td align='center'><a href='feedback.php?doc_id=$dadhar'><img src='img/core-img/feedback.png'  height='35' width='35'></a></td>
							</tr>";
							}
							$disp.="	
							</table>";
							print $disp;
							?>
									<!-- Post Title -->
                                    <a href="#" class="post-title">NEARBY DOCTORS</a>
                                     <!-- Doctors table -->
									<?php
					$disp="
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								
								
								<th>Name</th>
								
								<th>Address</th>
								
								<th>Phone number</th>
								<th>Email ID</th>
								<th>Appoint</th>
								<th>Feedback</th>
								
							</tr>";
							$sql="select * from doctor where department='4' and pin='$upin'";
							$res=mysqli_query($con,$sql);
							while($arr=mysqli_fetch_array($res))
							{
								$dadhar=$arr['adhar_no'];
								$dlicense=$arr['license_no'];
								$ddept=$arr['department'];
								$dfname=$arr['fname'];
								$dlname=$arr['lname'];
								$name=$dfname.' '.$dlname;
								$pin=$arr['pin'];
								$dphno=$arr['ph_no'];
								$daddr=$arr['address'];
								$demail=$arr['email'];
								$address=$daddr.' | '.$pin;
								$disp.="
							<tr>
								
								
								
								<td>$name</td>
								
								<td>$address</td>
								
								<td>$dphno</td>
								
								<td>$demail</td>
								<td align='center'><a href='appointment.php?doc_id=$dadhar'><img src='img/core-img/appoint.png'  height='35' width='35'></a></td>
								<td align='center'><a href='feedback.php?doc_id=$dadhar'><img src='img/core-img/feedback.png'  height='35' width='35'></a></td>
							</tr>";
							}
							$disp.="	
							</table>";
							print $disp;
							?>
									
									
                                </div>
                            </div>
							<!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="500ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="img/bg-img/med1.jpg" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">MEDICINES|BASIC & CLINICAL IMMUNOLOGY</a>
                                    
                                   
                                     <!-- Doctors table -->
									<?php
					$disp="
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								
								
								<th>Name</th>
								
								<th>Address</th>
								
								<th>Phone number</th>
								<th>Email ID</th>
								<th>Appoint</th>
								<th>Feedback</th>
								
							</tr>";
							$sql="select * from doctor where department='5'";
							$res=mysqli_query($con,$sql);
							while($arr=mysqli_fetch_array($res))
							{
								$dadhar=$arr['adhar_no'];
								$dlicense=$arr['license_no'];
								$ddept=$arr['department'];
								$dfname=$arr['fname'];
								$dlname=$arr['lname'];
								$name=$dfname.' '.$dlname;
								$pin=$arr['pin'];
								$dphno=$arr['ph_no'];
								$daddr=$arr['address'];
								$demail=$arr['email'];
								$address=$daddr.' | '.$pin;
								$disp.="
							<tr>
								
								
								
								<td>$name</td>
								
								<td>$address</td>
								
								<td>$dphno</td>
								
								<td>$demail</td>
								<td align='center'><a href='appointment.php?doc_id=$dadhar'><img src='img/core-img/appoint.png'  height='35' width='35'></a></td>
								<td align='center'><a href='feedback.php?doc_id=$dadhar'><img src='img/core-img/feedback.png'  height='35' width='35'></a></td>
							</tr>";
							}
							$disp.="	
							</table>";
							print $disp;
							?>
									<!-- Post Title -->
                                    <a href="#" class="post-title">NEARBY DOCTORS</a>
                                     <!-- Doctors table -->
									<?php
					$disp="
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								
								
								<th>Name</th>
								
								<th>Address</th>
								
								<th>Phone number</th>
								<th>Email ID</th>
								<th>Appoint</th>
								<th>Feedback</th>
								
							</tr>";
							$sql="select * from doctor where department='5' and pin='$upin'";
							$res=mysqli_query($con,$sql);
							while($arr=mysqli_fetch_array($res))
							{
								$dadhar=$arr['adhar_no'];
								$dlicense=$arr['license_no'];
								$ddept=$arr['department'];
								$dfname=$arr['fname'];
								$dlname=$arr['lname'];
								$name=$dfname.' '.$dlname;
								$pin=$arr['pin'];
								$dphno=$arr['ph_no'];
								$daddr=$arr['address'];
								$demail=$arr['email'];
								$address=$daddr.' | '.$pin;
								$disp.="
							<tr>
								
								
								
								<td>$name</td>
								
								<td>$address</td>
								
								<td>$dphno</td>
								
								<td>$demail</td>
								<td align='center'><a href='appointment.php?doc_id=$dadhar'><img src='img/core-img/appoint.png'  height='35' width='35'></a></td>
								<td align='center'><a href='feedback.php?doc_id=$dadhar'><img src='img/core-img/feedback.png'  height='35' width='35'></a></td>
							</tr>";
							}
							$disp.="	
							</table>";
							print $disp;
							?>
									
									
                                </div>
                            </div>
							<!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="img/bg-img/ent2.jpg" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">ENT DOCTORS</a>
                                    <!-- Post Meta -->
                                   
                                    <!-- Doctors table -->
									<?php
					$disp="
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								
								
								<th>Name</th>
								
								<th>Address</th>
								
								<th>Phone number</th>
								<th>Email ID</th>
								<th>Appoint</th>
								<th>Feedback</th>
								
							</tr>";
							$sql="select * from doctor where department='6'";
							$res=mysqli_query($con,$sql);
							while($arr=mysqli_fetch_array($res))
							{
								$dadhar=$arr['adhar_no'];
								$dlicense=$arr['license_no'];
								$ddept=$arr['department'];
								$dfname=$arr['fname'];
								$dlname=$arr['lname'];
								$name=$dfname.' '.$dlname;
								$pin=$arr['pin'];
								$dphno=$arr['ph_no'];
								$daddr=$arr['address'];
								$demail=$arr['email'];
								$address=$daddr.' | '.$pin;
								$disp.="
							<tr>
								
								
								
								<td>$name</td>
								
								<td>$address</td>
								
								<td>$dphno</td>
								
								<td>$demail</td>
								<td align='center'><a href='appointment.php?doc_id=$dadhar'><img src='img/core-img/appoint.png'  height='35' width='35'></a></td>
								<td align='center'><a href='feedback.php?doc_id=$dadhar'><img src='img/core-img/feedback.png'  height='35' width='35'></a></td>
							</tr>";
							}
							$disp.="	
							</table>";
							print $disp;
							?>
									<!-- Post Title -->
                                    <a href="#" class="post-title">NEARBY DOCTORS</a>
                                     <!-- Doctors table -->
									<?php
					$disp="
					  <table text='white' bgcolor='#f2f3f4' width=100% border=1>
							<tr>
								
								
								<th>Name</th>
								
								<th>Address</th>
								
								<th>Phone number</th>
								<th>Email ID</th>
								<th>Appoint</th>
								<th>Feedback</th>
								
							</tr>";
							$sql="select * from doctor where department='6' and pin='$upin'";
							$res=mysqli_query($con,$sql);
							while($arr=mysqli_fetch_array($res))
							{
								$dadhar=$arr['adhar_no'];
								$dlicense=$arr['license_no'];
								$ddept=$arr['department'];
								$dfname=$arr['fname'];
								$dlname=$arr['lname'];
								$name=$dfname.' '.$dlname;
								$pin=$arr['pin'];
								$dphno=$arr['ph_no'];
								$daddr=$arr['address'];
								$demail=$arr['email'];
								$address=$daddr.' | '.$pin;
								$disp.="
							<tr>
								
								
								
								<td>$name</td>
								
								<td>$address</td>
								
								<td>$dphno</td>
								
								<td>$demail</td>
								<td align='center'><a href='appointment.php?doc_id=$dadhar'><img src='img/core-img/appoint.png'  height='35' width='35'></a></td>
								<td align='center'><a href='feedback.php?doc_id=$dadhar'><img src='img/core-img/feedback.png'  height='35' width='35'></a></td>
							</tr>";
							}
							$disp.="	
							</table>";
							print $disp;
							?>
									
									
                                </div>
                            </div>


                        </div>
                    </div>
                    
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        

						 <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                            <h5>DEPARTMENT</h5>
							
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/bg-img/orthp2.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>ORTHOPEDICS</h6>
                                    </a>
                                   
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/bg-img/dental1.jpeg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>DENTAL</h6>
                                    </a>
                                   
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/bg-img/eye1.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>OPHTHALMOLOGY</h6>
                                    </a>
                                   
                                </div>
                            </div>
							 <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/bg-img/med2.jpg" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>MEDICINES</h6>
                                    </a>
                                   
                                </div>
                            </div>
							 <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/bg-img/ent1.png" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>ENT</h6>
                                    </a>
                                   
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-thumb">
                                    <img src="img/bg-img/pediatric.png" alt="">
                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>PEDIATRICS</h6>
                                    </a>
                                    
                                </div>
                            </div>
							<a href="department.php" class="btn academy-btn btn-sm mt-15">See more...</a>
                        </div>
<					</div>
					</div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

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