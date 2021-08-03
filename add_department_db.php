<?php
	session_start();
	$con=mysqli_connect("localhost","root","","smart_healthcare_consultant");
		
		$did=null;
		$dept_nm=$_REQUEST['dept_nm'];
		
		
		
		
		$sql="insert into department(dept_id,dept_nm) values('$did','$dept_nm')";
		print $sql;
		$qry=mysqli_query($con,$sql);// or die(mysql_error());
		if($qry)
		{
			
				//print $sql;
				header("location:add_department.php");
			
		}
		else
		{
			print "ERROR ADDING DEPARTMENT";
			//header("location:err_addpanchayat.php");
		}
	
	?>