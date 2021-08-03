<?php
	session_start();
	//include "con_db.php";
	
	$app_id=null;
	$pat_id=$_SESSION['uname'];
	$doc_id=$_SESSION['doc_id'];
	$dbcon=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	$request_dt=$_REQUEST['request_dt'];
	$issues=$_REQUEST['issues'];
	
	$sql1="insert into appointment(appointment_id,patient_id,doctor_id,issues,dt_of_application,request_dt,dt_of_appointment,time_of_appointment) values('$app_id','$pat_id','$doc_id','$issues',curdate(),'$request_dt','','')" ;
	$result1=mysqli_query($dbcon,$sql1);
	
	
	
	if($result1)
	{
		
		header('location:doctors.php');
		
	}
	else
	{
		print $sql1;
		print "ERROR REQUESTING APPOINTMENT";
	}
	?>
			
