<?php
	include('ahead.php');
	
?>
	
		<br/><br/>
	<div style='width:500px;margin:auto'>

		<form method='post' action='addbatches1.php'>
			<table border='1' cellpadding='10' cellspacing='0' class='table table-bordered' align='center'>
				<tr>
					<td colspan='2' align='center'>
					ADD BATCH
					</td>
				</tr>
				<tr>
				<td>Standand name</td>
				<td>
					<select class='form-control'  name='se1'>
						<option value=''>Select Standand</option>
						<?php
							include('db.php');
							
							$r=mysqli_query($con,"select  * from addstandard");
							while($row=mysqli_fetch_array($r))
								echo "<option value='$row[1]'>$row[1]</option>";
						?>
					</select>
					
					</td>
						</tr>
				<tr>
					<td>Batch name</td>
					<td><select class='form-control' required placeholder='Enter the batch'  name='se2'>
						<option value=''>Select Batch</option>
						<option value='A'>A</option>
						<option value='B'>B</option>
						<option value='C'>C</option>
						<option value='D'>D</option>
						</select>
						</td></tr>
						<tr>
						<td colspan='2' align='center'><input type='submit' class='btn btn-primary' value='submit'>
						</td>
						</tr>
						
						</table>
						
						
		<?php
	include('db.php');
	$r=mysqli_query($con,"select * from addbatch");
	echo"		
	<table border='1' cellpadding='10' cellspacing='0' class='display' id='example'>";
	echo"<thead><tr><th>Id</th>";
	echo"<th>Standard Name</th>";
	echo"<th>Batch Name</th>
		<th>Action</th></tr></thead><tbody>";
		
		while($row=mysqli_fetch_array($r))
			
			{
				echo"<tr><td>",$row[0],"</td>";
				echo"<td>",$row[1],"</td>";
				echo"<td>",$row[2],"</td>
				<td> <a href='deletebatch.php?a=$row[0]'>Delete</a></td></tr>";
				
				
			}
?>
</tbody>
</table>
				
</div>
<?php
	include('afooter.php')
?>