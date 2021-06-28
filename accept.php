<?php

include('db.php');
$id=$_REQUEST["a"];

$r=mysqli_query($con,"update  leaves set status='1' where id='$id'");

if($r)
	header("location:viewleave.php");

?>