<?php
	session_start();
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
//	if(isset($_REQUEST['btnSubmit']))
//	{
		
		$dadhar_no=$_REQUEST['dadhar_no'];
		$dlicense_no=$_REQUEST['license_no'];
		$dept=$_REQUEST['dept'];
		$dfname=$_REQUEST['dfname'];
		
		$dlname=$_REQUEST['dlname'];
		$daddr=$_REQUEST['daddr'];
		$pin=$_REQUEST['pin'];
		$dphno=$_REQUEST['dphno'];
		$demail=$_REQUEST['demail'];
		
		
		$pas=substr($dlname,0,3).'#'.substr($dphno,4,5);
		
		$sql="insert into doctor(adhar_no,license_no,department,fname,lname,ph_no,address,pin,email) values('$dadhar_no','$dlicense_no','$dept','$dfname','$dlname','$dphno','$daddr','$pin','$demail')";
		
		$qry=mysqli_query($con,$sql);// or die(mysql_error());
		if($qry)
		{
			$sql1="insert into user(uname,password,utype) values('$dadhar_no','$pas','doctor')";
			//print sql1;
			$qry1=mysqli_query($con,$sql1);// or die(mysql_error());
			if($qry1)
			{
				header("location:add_doctor.php");
			}
			else
			{
				print $sql1;
				//print "ERROR ADDING USER";
			}
		}
		else
		{
			print $sql;
			print "ERROR ADDING DOCTOR";
			
		}
	?>