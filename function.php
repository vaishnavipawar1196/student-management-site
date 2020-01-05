<?php
	function showinfo($rollno,$std)
	{
		include('dbcon.php');
		
		$qry="SELECT * FROM `student` WHERE `roll_no`='$rollno' AND `standard`='$std'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)>0)
		{
			$data=mysqli_fetch_assoc($run);
			
			?>
				<table border="1" bgcolor="white" align="center" width="60%" style="text-align:center;">
					<tr><th colspan="3">Student Details</th></tr>
					
					<tr>
						<td rowspan="5"><img src="dataimg/<?php echo $data['image']; ?>" style="max-width:100px" /></td>
						
						<th>Roll No.:</th>
						<td><?php echo $data['roll_no']; ?></td>
					</tr>
					
					<tr>
						<th>Name:</th>
						<td><?php echo $data['name']; ?></td>
					</tr>
					
					<tr>
						<th>City:</th>
						<td><?php echo $data['city']; ?></td>
					</tr>
					
					<tr>
						<th>Patent Contact no.:</th>
						<td><?php echo $data['parent_contact']; ?></td>
					</tr>
					
					<tr>
						<th>Standard:</th>
						<td><?php echo $data['standard']; ?></td>
					</tr>
					
				</table>
			<?php
		}
		else
		{
			echo "<script>alert('No Student Record!');</script>";
		}
	}
?>