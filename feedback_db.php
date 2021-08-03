<?php
	session_start();
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	
	$patient_id=$_SESSION['uname'];
	
	$doc_id=$_SESSION['doc_id'];
	
	$doc_nm=$_REQUEST['doc_nm'];
	$dept_nm=$_REQUEST['dept'];
	$feedback=$_REQUEST['feedback'];
	$feedback_id=null;
	
	
	$sql="insert into feedback(feedback_id,patient_id,doctor_id,feedback) values('$feedback_id','$patient_id','$doc_id','$feedback')";
	
	$qry=mysqli_query($con,$sql);// or die(mysql_error());
	if($qry)
	{
		print $sql;
		header("location:doctors.php");
	}
	else
	{
		print $sql;
		//header("location:err_outer_register.php");
	}
	?>
	
	