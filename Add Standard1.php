<?php
	$con=mysqli_connect("localhost","root","","schoolerp");
	
	$standard=$_POST['nm'];
		
		$r=mysqli_query($con,"insert into addstandard(standard)values
		('$standard')");
		
			if($r)
		echo "inserted";
			else
		echo mysqli_error($con);
	
?>