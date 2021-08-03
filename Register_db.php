<?php
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	$adhar_no=$_REQUEST['adhar_no'];
	$fnm=$_REQUEST['fname'];
	$mnm=$_REQUEST['mname'];
	$lnm=$_REQUEST['lname'];
	$addr=$_REQUEST['address'];
	$dob=$_REQUEST['dob'];
	$ph_no=$_REQUEST['phno'];
	$email=$_REQUEST['email'];
	$pin=$_REQUEST['pincode'];
	$pswd=$_REQUEST['pswd'];
	$utype="patient";
	
	$sql="insert into patient(adhar_no,fname,mname,lname,ph_no,email_id,address,pin,dob) values('$adhar_no','$fnm','$mnm','$lnm','$ph_no','$email','$addr',$pin,'$dob')";
	
	$qry=mysqli_query($con,$sql);// or die(mysql_error());
	if($qry)
	{
		$sql2="insert into user(uname,password,utype) values('$adhar_no','$pswd','$utype')";
		$qry2=mysqli_query($con,$sql2);
		if($qry2)
		{
			header("location:loggin.php");
		}
		else
		{
			print $sql2;
			//header("location:err_register.php");
		}
	}
	else
	{
		print $sql;
		//header("location:err_outer_register.php");
	}
	?>
	
	