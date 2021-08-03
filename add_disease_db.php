<?php
	session_start();
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
//	if(isset($_REQUEST['btnSubmit']))
//	{
		
		$disease_id=null;
		$dis_nm=$_REQUEST['dis_nm'];
		
		$dept=$_REQUEST['dept'];
		$symptoms=$_REQUEST['symptoms'];
		
		
		$sql="insert into disease(disease_id,disease_nm,symptoms,dept_id) values('$disease_id','$dis_nm','$symptoms','$dept')";
		
		$qry=mysqli_query($con,$sql);// or die(mysql_error());
		
			if($qry)
			{
				header("location:add_disease.php");
			}
			else
			{
				print $sql;
				//print "ERROR ADDING USER";
			}
	?>