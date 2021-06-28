<?php
	include('db.php');
	$standardname=mysqli_real_escape_string($con,$_POST['se1']);
	$batchname=mysqli_real_escape_string($con,$_POST['se2']);
	$studentname=mysqli_real_escape_string($con,$_POST['nm']);
	$fathername=mysqli_real_escape_string($con,$_POST['nm1']);
	$mothername=mysqli_real_escape_string($con,$_POST['nm2']);
	$contactno=mysqli_real_escape_string($con,$_POST['num']);
	$gender=mysqli_real_escape_string($con,$_POST['nm3']);
	$email=mysqli_real_escape_string($con,$_POST['nm4']);
	$address=mysqli_real_escape_string($con,$_POST['nm5']);
	$occupation=mysqli_real_escape_string($con,$_POST['nm6']);
	$photo=mysqli_real_escape_string($con,$_FILES['ph']["name"]);
	$user=mysqli_real_escape_string($con,$_POST['user']);
	$password=mysqli_real_escape_string($con,$_POST['pass']);




	move_uploaded_file($_FILES["ph"]["tmp_name"],"student_photo/".$_FILES["ph"]["name"]);

	$r=mysqli_query($con,"insert into add_student(standardname,batchname,studentname,fathername,mothername,contactno
			,gender,email,address,occupation,photo,username,password)values('$standardname','$batchname','$studentname','$fathername',
			'$mothername','$contactno','$gender','$email','$address','$occupation','$photo','$user','$password')");
			
			
			
			
			if($r)
			echo"inserted";
		 else
			echo mysqli_error($con);  

?>