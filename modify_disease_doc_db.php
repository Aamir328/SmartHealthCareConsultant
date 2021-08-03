<?php
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	$did=$_REQUEST['disease_id'];
	$symptoms=$_REQUEST['symptoms'];
	$sql="update disease set symptoms='$symptoms' where disease_id='$did'";
	
	$qry=mysqli_query($con,$sql);// or die(mysql_error());
	if($qry)
	{
		//print $sql;
			header("location:disease_doc.php");
		
	}
	else
	{
		print $sql;
		print "ERROR DELETING DOCTOR";
		
	}
	?>
	
	