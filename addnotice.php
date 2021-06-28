<?php   

include('ahead.php');

?>
<div style='width:500px;margin:auto' >
<form method='post' action=''>
	<table class='table table-bordered'>
	
	<tr>
	<td>News Title</td>
	<td><input type='text' class='form-control' name='ntitle'></td>
		</tr>
		<tr>
			<td>News Description</td>
			<td><textarea name='nm' class='form-control' ></textarea></td>
		</tr>
		
		<tr><td align='center' colspan='2'><input type='submit' name='se' value='submit'></td></tr>
		</table></form>
		<?php   

include('afooter.php');
?>


<?php
if(isset($_REQUEST["se"])){
	
	$con=mysqli_connect("localhost","root","","schoolerp");
	
	$newstitle=$_POST['ntitle'];
	$newsdescription=$_POST['nm'];
	
		
		$r=mysqli_query($con,"insert into notice(notice,description)values
		('$newstitle','$newsdescription')");
		
			if($r)
		echo "inserted";
			else
		echo mysqli_error($con);
}
?>
