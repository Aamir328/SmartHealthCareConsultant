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
    <link rel="icon" href="img/core-img/logo3.png">

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
                                <a href="index.html"><img src="img/core-img/logo3.png" alt=""></a>
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
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/unms.jpg);">
        <div class="bradcumbContent">
            <h2>Login</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Top Popular Courses Area End ##### -->

    <!-- ##### Top Popular Courses Details Area Start ##### -->
    <div class="popular-course-details-area wow fadeInUp" data-wow-delay="300ms">
        <div class="single-top-popular-course d-flex align-items-center flex-wrap">
            <div class="popular-course-content">
			
				<h2><font color="red" >Error in Loging In </font></h2>
                <table>
                <form method="post" action="loggin_db.php" >
					<tr><td>User name:</td>
						<td><input type="text" name="uname" id="" placeholder="user name" ></td>
					<tr><td><br></td></tr>
					<tr><td>Password :</td>
						<td><input type="password" name="password" id="" placeholder="password" ></td>
					<tr><td><br></td></tr>
					<tr><td>User type:</td>
						  <td><select name="utype">
							<option name="admin" id="admin" value="admin">ADMIN</option>
							<option name="doctor" id="doctor" value="doctor">DOCTOR</option>
							<option name="patient" id="patient" value="patient">PATIENT</option>
						  </select>
						  </td></tr>
					<tr><td><br></td></tr>
					<tr><td colspan="2" align="center"><input class="btn academy-btn btn-sm mt-15" type="submit" value="Sign In"></td></tr>
				<tr><td><br></td></tr>
				<tr><td colspan="2" align="center"><a href="Register.php">Patient Registration?</a></td></tr>
				</form>
				</table>

            </div>
            <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/bg-4.jpg);"></div>
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