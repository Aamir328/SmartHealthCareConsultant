<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Smart Health Consultant</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logooo.jpg">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		function valid()
	{
	if(document.registration.pswd.value!= document.registration.pswd_again.value)
	{
	alert("Password and Confirm Password Field do not match  !!");
	document.registration.password_again.focus();
	return false;
	}
	return true;
	}
	</script>
		

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
                                <a href="index.php"><img src="img/core-img/logooo.jpg" style="width:80px; height:80px" alt="logo"></a>
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
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/dental2.jpg);">
        <div class="bradcumbContent">
            <h2>Register</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

   

    <!-- #####Register Area ##### -->
    <div class="popular-course-details-area wow fadeInUp" data-wow-delay="300ms">
        <div class="single-top-popular-course d-flex align-items-center flex-wrap">
            <div class="popular-course-content">
					<table>
						<form name="registration" method="post" action="Register_db.php">
							
						  <tr><td>Aadhar no:</td>
						  <td><input type="text" name="adhar_no" id="" placeholder="Aadhar no" maxlength="12" minlength="12" required></td>
						  <tr><td><br></td></tr>
						  <tr><td>First name:</td>
						  <td><input type="text" name="fname" id="" placeholder="First name" required></td>
							<tr><td><br></td></tr>
							<tr><td>Middle name:</td>
						  <td><input type="text" name="mname" id="" placeholder="Middle name" ></td>
						  <tr><td><br></td></tr>
						  <tr><td>Last name:</td>
						  <td><input type="text" name="lname" id="" placeholder="Last name" required></td>
						  <tr><td><br></td></tr>
						  <tr><td>DOB:</td>
						  <td><input type="date" name="dob" id="" placeholder="DOB" ></td>
						  <tr><td><br></td></tr>
						  <tr><td>Phone number:</td>
						  <td><input type="text" name="phno" id="" placeholder="Phone no" maxlength="10" minlength="9" required></td>
						  <tr><td><br></td></tr>
						  <tr><td>Email id:</td>
						  <td><input type="text" name="email" id="" placeholder="email id" ></td>
						<tr><td><br></td></tr>
						<tr><td>Address:</td>
						  <td><textarea name="address" id="" placeholder="address" required></textarea></td>
						<tr><td><br></td></tr>
						<tr><td>PIN code:</td>
						  <td><input type="text" name="pincode" id="" placeholder="pincode" maxlength="6" minlength="6" required></td>
						<tr><td><br></td></tr>
						<tr><td>Password:</td>
						  <td><input type="password" name="pswd" id="" placeholder="password" required></td>
						<tr><td><br></td></tr>
						<tr><td colspan="2" align="center"><input class="btn academy-btn btn-sm mt-15" type="submit" value="Sign Up"></td>
						<br><br><br>
					</form>
					</table>
              
				</div>
            <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-2.jpg);"></div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Details Area End ##### -->

    
   
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