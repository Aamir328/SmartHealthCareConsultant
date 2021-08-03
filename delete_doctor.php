<?php
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	$did=$_REQUEST['did'];
	
	$sql="delete from doctor where adhar_no='$did'";
	
	$qry=mysqli_query($con,$sql);// or die(mysql_error());
	if($qry)
	{
		//print $sql;
			header("location:maintain_doctors.php");
		
	}
	else
	{
		print $sql;
		print "ERROR DELETING DOCTOR";
		
	}
	?>
	
	