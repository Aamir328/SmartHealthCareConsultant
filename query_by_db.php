<?php
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
	$query_by = $_REQUEST['query_by'];
	$query = $_REQUEST['query'];
	$query_id=null;
	$sql="insert into query_soln(query_id,query,solution,query_by,solution_by,status) values('$query_id','$query','','$query_by','','')";
	
	$qry=mysqli_query($con,$sql);// or die(mysql_error());
	if($qry)
	{
		
			//print $sql;
			header("location:patient.php");
		
	}
	else
	{
		print "ERROR POSTING QUERY";
		
	}
	?>
	
	