<?php
	session_start();
	//include "con_db.php";
	$dbcon=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	
	$query_id=$_REQUEST['query_id'];
	$solution=$_REQUEST['solution'];
	$doc_id=$_SESSION['uname'];
	
	$sql1="update query_soln set solution='$solution',solution_by='$doc_id',status='DONE' where query_id='$query_id'" ;
	$result1=mysqli_query($dbcon,$sql1);
	
	if($result1)
	{
		//print "$sql1";
		header("location:query_list.php");
	}
	else
	{
		print $sql1;
		print "ERROR SETTING APPOINTMENT";
	}
	
	
?>
	
	
