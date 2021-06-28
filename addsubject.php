<?php
	include('ahead.php');
?>

	<html>
		<body>
		<br/><br/>
			<div style='width:400px;margin:auto'>
			<form method='post' action='addsubject1.php'>
			
			<table border='1' class='table table-bordered' cellpadding='10' cellspacing='0'>
			<tr>
				<td colspan='2' align='center'>
					Add Subject
				</td>
			</tr>
			<tr>
			
				<td>Standard Name</td>
				<td><select name='s1' class='form-control'>
				<option value=''>Select Standard</option>
				<?php
					include('db.php');
					$r=mysqli_query($con,"select * from addstandard");
					while($row=mysqli_fetch_array($r))
						echo"<option value='$row[1]'>$row[1]</option>";
					
					
				?>
				</select></td></tr>
				
				<tr>
				<td>Subject Name</td>
				<td><input class='form-control' type='text'placeholder='Enter Subject Name' name='nm' value=''></td>
				</tr>
				<tr>
				<td colspan='2' align='center'><input type='submit' class='btn btn-primary' value='submit'>
				</td>
				</tr>
				</table>
				</body>
				</form>
				</div>
				<html>
					
				
					<?php
					
						include('afooter.php');
				?>