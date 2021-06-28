<?php
	include('ahead.php');
	
?>
<br/><br/>
	<div style='width:400px;margin:auto'>
	<form method='post' action='add standard1.php'> 
		<table border='1' cellpadding='10' class='table table-bordered' cellspacing='0' align='center'>
			<tr>
				<td colspan='2' style='text-transform:uppercase' align='center'>
				ADD Standard
				</td>
			</tr>
			<tr><td>Standard Name</td>
			
				<td><input class='form-control' type='text' required placeholder='Standard Name Here..' name='nm' value=''>
			
			</tr>
			
			<tr>
				<td colspan='2' align='center'><input type='submit' class='btn btn-primary' value='submit'></td>
				
			</tr>
			</table>
		</div>
		<?php
	include('db.php');
	
	
	$r=mysqli_query($con,"select * from addstandard");
	echo "<div class='row'><div class='col-sm-7 col-sm-offset-2'><table border='1' cellpadding='10' cellspacing='0' 
	class='display' id='example'>";
	echo"<thead><tr><th>Id</th>";
	echo"<th> Standard name</th>
	<th>Action</th></tr></thead>";
	
	while($row=mysqli_fetch_array($r))
	{
			echo"<tr><td>",$row[0],"</td>";
			echo"<td>",$row[1],"</td>
			<td> <a href='deletestandard.php?a=$row[0]'>Delete</a></td></tr>";
			;
		
		
	}
	
	
	
?>
</table></div></div>
<?php
include('afooter.php');
?>