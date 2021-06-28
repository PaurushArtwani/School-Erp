<?php
	$con=mysqli_connect("localhost","root","","schoolerp");
	
	$standardname=$_POST['se1'];
	$batchname=$_POST['se2'];
	
		
		$r=mysqli_query($con,"insert into addbatch(standardname,batchname)values
		('$standardname','$batchname')");
		
			if($r)
		echo "inserted";
			else
		echo mysqli_error($con);
	
?>