<?php
	session_start();
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	$doc_id=$_SESSION['uname'];
	$query_id=$_REQUEST['did'];
	$sql1="select * from query_soln where query_id='$query_id'";
	$result1=mysqli_query($con,$sql1);
	$arr1=mysqli_fetch_array($result1);
	
	$query_id=$arr1['query_id'];
	$query=$arr1['query'];
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
            <h2>Query</h2>
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
                                    <form action="query_solution_db.php" method="post">
                                      <tr> <th>Query ID:</th> <td><input type="text" class="form-control" id="query_id" name="query_id" value="<?php echo $query_id?>" ></td></tr>
									  <tr><td><br></td></tr>
                                       <tr><th>Query:</th><td><textarea name="query" class="form-control" id="query" cols="10" rows="10"  disabled><?php echo $query?></textarea></td></tr>
                                         <tr><td><br></td></tr>
										 <tr><th>Solution:</th><td><textarea name="solution" class="form-control" id="solution" cols="10" rows="10" required ></textarea></td></tr>
                                         <tr><td><br></td></tr>
										 
                                         <tr><td><br></td></tr>
                                       <tr><th colspan="2"><button class="btn academy-btn mt-30" type="submit" >POST</button>
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