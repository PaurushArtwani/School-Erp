<?php
	include('db.php');
	
	$standardname=$_POST['s1'];
	$subjectname=$_POST['nm'];
	
		
		$r=mysqli_query($con,"insert into addsubject(standardname,subjectname)values
		('$standardname','$subjectname')");
		
			if($r)
		echo "inserted";
			else
		echo mysqli_error($con);
	
?>