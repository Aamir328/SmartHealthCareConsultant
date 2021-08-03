<?php
	session_start();
	//include "con_db.php";
	$dbcon=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	$oldpass=$_REQUEST['old_password'];
	$nw_password=$_REQUEST['password'];
	
	$nw_phno=$_REQUEST['nw_phno'];
	$nw_email=$_REQUEST['nw_email'];
	$opass=$_SESSION['pass'];
	$uname=$_SESSION['adhar_no'];
	$nw_addr=$_REQUEST['address'];
	$nw_pin=$_REQUEST['pin'];
	echo $opass;
	
	$sql1="update patient set ph_no='$nw_phno',email_id='$nw_email',address='$nw_addr',pin='$nw_pin' where adhar_no='$uname'" ;
	$result1=mysqli_query($dbcon,$sql1);
	
	
	
	if($oldpass==$opass)
	{
		$sql2="update user set password='$nw_password' where uname='$uname'";
		$result2=mysqli_query($dbcon,$sql2);
		header('location:patient.php');
		
	}
	else
	{
		
		header('location:patient.php');
	}
	?>
			
