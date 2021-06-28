\<?php
	include('ahead.php');
?>
	
<br/><br/>
	<div style='width:600px;margin:auto'>
		<form method='post' action='addstudent1.php' enctype='multipart/form-data'>
		
			<table border='1' cellpadding='10' align='center' class='table table-bordered' cellspacing='0'>
				
<tr>
				
					<td>Standards Name</td>
					<td><select  class='form-control' name='se1'>
						<option value=''>Select Standards</option>
						<?php
							include('db.php');
							$r=mysqli_query($con,"select * from addstandard");
							while($row=mysqli_fetch_array($r))
								echo"<option value='$row[1]'>$row[1]</option>";
						
						?>
						
						</select></td>
							</tr>
							
				<tr>
					<td>BATCH NAME</td>
					<td><select  class='form-control'name='se2'>
					<option value=''>Select Batch</option>
						<option value='A'>A</option>
						<option value='B'>B</option>
						<option value='C'>C</option>
						<option value='D'>D</option>
						</select></td></tr>
						
				
				<tr>
				 <td>Student Name</td>
				 <td><input  class='form-control'type='text' required placeholder='Enter the name' name='nm' value=''></td>
				 </tr>
				 
				 
				 <tr>
				 <td>Father Name</td>
				 <td><input type='text' class='form-control' required placeholder='Enter the name'  name='nm1' value=''></td>
				 </tr>
				 
				 
				 <tr>
				 <td>Mother Name</td>
				 <td><input type='text' class='form-control' required placeholder='Enter the name' name='nm2' value=''></td>
				 </tr>
				 
				 <tr>
				 <td>Contact No</td>
				 <td><input type='number'  class='form-control'required placeholder='Enter the Number' name='num' value=''></td>
				 </tr>
				 
				 <tr>
				 <td>gender</td>
				 <td><input type='radio'  name='nm3' value='male'>male
					<input type='radio'  name='nm3' value='female'>female
																	</td>
				 </tr>
				 
				 <tr>
				 <td>Email</td>
				 <td><input type='email' class='form-control'required placeholder='Enter the email' name='nm4' value=''></td>
				 </tr>
				 
				 <tr>
				 <td>Address</td>
				 <td><textarea name='nm5' class='form-control' required placeholder='Enter the Address' rows='4' cols='30'>
				 
					</textarea></td>
				 </tr>
				 
				 <tr>
				 <td>Occupation</td>
				 <td><input type='text'  class='form-control' required placeholder='Enter the Occupation' name='nm6' value=''></td>
				 </tr>
				 <tr>
				 
				 <tr>
				 <td>Photo</td>
				 <td><input type='file' class='form-control' name='ph'></td>
				 </tr>
				 <tr>
				 <td>User name</td>
				<td><input  class='form-control'type='text' required placeholder='Enter the Username' name='user' value=''></td>
				 </tr>
				 
				 <tr>
				 <td>Password</td>
				 <td><input  class='form-control'type='password' required placeholder='Enter the Password' name='pass' value=''></td>
				 </tr>
				 
				 <td><input type='submit'  class='btn btn-primary'value='submit'></td>
				 </tr>
					</table>
					</div>
					</form>
				 			
<?php
	include('afooter.php');
?>							
				 
				 
				 