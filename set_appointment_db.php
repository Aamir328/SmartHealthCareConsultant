<?php
	session_start();
	//include "con_db.php";
	$dbcon=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	
	$app_id=$_REQUEST['app_id'];
	$app_dt=$_REQUEST['app_dt'];
	$app_time=$_REQUEST['app_time'];
	
	$sql1="update appointment set dt_of_appointment='$app_dt',time_of_appointment='$app_time',status='APPROVE' where appointment_id='$app_id'" ;
	$result1=mysqli_query($dbcon,$sql1);
	
	if($result1)
	{
		//print "$sql1";
		header("location:notification.php");
	}
	else
	{
		print "ERROR SETTING APPOINTMENT";
	}
	
	
?>
	
	
