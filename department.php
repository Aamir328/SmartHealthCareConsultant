<?php
	session_start();
	$dbcon=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	?>
<!DOCTYPE html>
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
            <h2>The Departments</h2>
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
                                    <a href="#" class="post-title">ORTHOPEDICS</a>
                                    <!-- Post Meta -->
                                   
                                    <!-- Post Excerpt -->
                                    <p>Orthopedics is the field of medicine that focuses on surgery on, or manipulation of, the musculoskeletal system. The surgical specialty was originally focused on developmental deformities and the effects of polio in children, but today it has expanded significantly to address all the conditions and diseases affecting the musculoskeletal system in individuals of all ages.

Orthopedic conditions can be treated operatively and nonoperatively with medications, physical therapy, exercise, alternate therapies or by a host of surgical procedures, including some that are minimally invasive and thus less traumatic to the body than traditional open surgery.

The overall goal of orthopedic treatments is to preserve or restore the musculoskeletal system.

Physicians whose practices are focused on orthopedics are called orthopedic surgeons, although not all of them perform surgery. An orthopedic surgeon is qualified to diagnose and manage or treat musculoskeletal system problems that affect the bones and soft tissue (ligaments, tendons) in the body. Furthermore, an orthopedist can recommended rehabilitation methods to patients that may enhance the effect of their treatments. He or she can also provide effective orthopedic education and guidance to patients regarding the prevention of orthopedic injuries and diseases.

</p><!-- Read More btn -->
                                    <a href="doctors.php" class="btn academy-btn btn-sm mt-15">Doctors</a>
									<a href="disease.php" class="btn academy-btn btn-sm mt-15">Diseases</a>

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
                                    <a href="#" class="post-title">DENTAL</a>
                                    <!-- Post Meta -->
                                   
                                    <!-- Post Excerpt -->
                                    <p>Dentistry, also known as Dental and Oral Medicine, is a branch of medicine that consists of the study, diagnosis, prevention, and treatment of diseases, disorders, and conditions of the oral cavity, commonly in the dentition but also the oral mucosa, and of adjacent and related structures and tissues, particularly in the maxillofacial (jaw and facial) area.Although primarily associated with teeth among the general public, the field of dentistry or dental medicine is not limited to teeth but includes other aspects of the craniofacial complex including the temporomandibular joint and other supporting, muscular, lymphatic, nervous, vascular, and anatomical structures.
									Dental treatments are carried out by a dental team, which often consists of a dentist and dental auxiliaries (dental assistants, dental hygienists, dental technicians, as well as dental therapists). Most dentists either work in private practices (primary care), dental hospitals or (secondary care) institutions (prisons, armed forces bases, etc.).</p>
                                   <!-- Read More btn -->
                                    <a href="doctors.php" class="btn academy-btn btn-sm mt-15">Doctors</a>
									 <a href="disease.php" class="btn academy-btn btn-sm mt-15">Diseases</a>
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
                                    <a href="#" class="post-title">OPTHALMOLOGY</a>
                                   
                                    <!-- Post Excerpt -->
                                    <p>Ophthalmology is a branch of medicine and surgery which deals with the diagnosis and treatment of eye disorders.An ophthalmologist is a specialist in ophthalmology. The credentials include a degree in medicine, followed by additional four to five years of ophthalmology residency training. Ophthalmology residency training programs may require a one year pre-residency training in internal medicine, pediatrics, or general surgery. Additional specialty training (or fellowship) may be sought in a particular aspect of eye pathology.Ophthalmologists are allowed to use medications to treat eye diseases, implement laser therapy, and perform surgery when needed.Ophthalmologists may participate in academic research on the diagnosis and treatment for eye disorders.</p>
                                    <!-- Read More btn -->
                                    <a href="doctors.php" class="btn academy-btn btn-sm mt-15">Doctors</a>
									<a href="disease.php" class="btn academy-btn btn-sm mt-15">Diseases</a>

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
                                    <a href="#" class="post-title">PEDIATRICS</a>
                                   
                                    <!-- Post Excerpt -->
                                    <p>Pediatrics is the branch of medicine that involves the medical care of infants, children, and adolescents. The American Academy of Pediatrics recommends people be under pediatric care up to the age of 21,thought usually only minors under 18 are required to be under pediatric care. A medical doctor who specializes in this area is known as a pediatrician, or paediatrician. The word pediatrics and its cognates mean "healer of children".Pediatricians work both in hospitals, particularly those working in its subspecialties such as neonatology, and as outpatient primary care physicians.Pediatric physiology directly impacts the pharmacokinetic properties of drugs that enter the body. The absorption, distribution, metabolism, and elimination of medications differ between developing children and grown adults.Despite completed studies and reviews, continual research is needed to better understand how these factors should affect the decisions of healthcare providers when prescribing and administering medications to the pediatric population.</p>
									<!-- Read More btn -->
                                    <a href="doctors.php" class="btn academy-btn btn-sm mt-15">Doctors</a>
									<a href="disease.php" class="btn academy-btn btn-sm mt-15">Diseases</a>

                                    
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
                                    
                                    <!-- Post Excerpt -->
                                    <p>Immunology is a branch of biology that covers the study of immune systems in all organisms.Immunology charts, measures, and contextualizes the physiological functioning of the immune system in states of both health and diseases; malfunctions of the immune system in immunological disorders (such as autoimmune diseases,hypersensitivities,immune deficiency,and transplant rejection); and the physical, chemical, and physiological characteristics of the components of the immune system in vitro,in situ, and in vivo. Immunology has applications in numerous disciplines of medicine, particularly in the fields of organ transplantation, oncology, rheumatology, virology, bacteriology, parasitology, psychiatry, and dermatology.
									Many components of the immune system are typically cellular in nature and not associated with any specific organ, but rather are embedded or circulating in various tissues located throughout the body.</p>
                                    <!-- Read More btn -->
                                    <a href="doctors.php" class="btn academy-btn btn-sm mt-15">Doctors</a>
									<a href="disease.php" class="btn academy-btn btn-sm mt-15">Diseases</a>

                                </div>
                            </div>
							<!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="500ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="img/bg-img/ent2.jpg" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">ENT(Ear Nose Throat)</a>
                                    
                                    <!-- Post Excerpt -->
                                    <p>ENT specialists are not only medical doctors who can treat your sinus headache, your child’s swimmer’s ear, or your dad’s sleep apnea. They are also surgeons who can perform extremely delicate operations to restore hearing of the middle ear, open blocked airways, remove head, neck, and throat cancers, and rebuild these essential structures. This requires an additional five to eight years of intensive, post-graduate training beyond medical school.
									Organized ENTs have been setting the treatment standards that pediatric and 
											primary care providers have been following since 1896, making 
										otolaryngology one of the oldest medical specialties in the United States.</p>
                                    <!-- Read More btn -->
                                    <a href="doctors.php" class="btn academy-btn btn-sm mt-15">Doctors</a>
									<a href="disease.php" class="btn academy-btn btn-sm mt-15">Diseases</a>

                                </div>
                            </div>





                        </div>
                    </div>
                    <!-- Pagination Area Start -->
                    <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!--------search for department---------------------->
						 <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <form action="#" method="post">
                                <input type="search" name="search" id="Search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
						
						<!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5>Doctors</h5>
                            <ul>
								<?php
							$sql="select * from doctor";
	
							$result=mysqli_query($dbcon,$sql);
							while($arr=mysqli_fetch_array($result))
							{
								$adhar_no=$arr['adhar_no'];
								$fname=$arr['fname'];
								$lname=$arr['lname'];
								$ph_no=$arr['ph_no'];
								$name=$fname.' '.$lname;
								$disp=$name.' | '.$ph_no;
							?>
							<li value=<?php echo $adhar_no ?>><?php echo $disp; ?></li>
							<br>
							<?php
							
							}
							?>
                               
                            </ul>
                        </div>
						<!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                            <h5>Diseases</h5>
                            <ul>
								<?php
							$sql="select * from disease";
	
							$result=mysqli_query($dbcon,$sql);
							while($arr=mysqli_fetch_array($result))
							{
								$disease_id=$arr['disease_id'];
								
								$disease_nm=$arr['disease_nm'];
								$disp=$disease_nm;
							?>
							<li value=<?php echo $disease_id ?>><?php echo $disp; ?></li>
							<br>
							<?php
							
							}
							?>
                            </ul>
                        </div>
					 
                        
						
                       
                    </div>
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