<?php
	session_start();
	//include "con_db.php";
	$dbcon=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	$uname=$_REQUEST['uname'];
	$pass=$_REQUEST['password'];
	$utype=$_REQUEST['utype'];
	
	$sql="select * from user where uname='$uname' and password='$pass' and utype='$utype'";

	//print $sql;
	if($dbcon)
	//	print "Hello";
	
	
	$result=mysqli_query($dbcon,$sql);
	$arr=mysqli_fetch_array($result);
	$pas=$arr['password'];
	$utype=$arr['utype'];
	if($pas==$pass)
	{
		$_SESSION['uname']=$uname;
		if($utype=='patient')
		{
			header('Location: patient.php');
			$_SESSION['utype']='patient';
		}
		else if($utype=='admin')
		{
			header('Location: admin.php');
			$_SESSION['utype']='admin';
		}
		else if($utype=='doctor')
		{
			//print $sql;
			header('Location: doctor_home.php');
			$_SESSION['utype']='doctor';
		}
		else
			print $sql;
			//header('Location: err_loggin.php');
		
	}
	else
		print $sql;
		//header('Location: err_loggin.php');
	
	?>
			
