<?php
	session_start();
	
	if(isset($_SESSION['uid']))
	{
		echo '';
	}
	else
	{
		header('location:login.php');
	}
?>

<html>

	<head>
		<title>update</title>
	</head>
	
	<body style="background-image:url(imgs/img2.jxr);background-repeat:no-repeat;background-size:cover;">
	
		<div>	
			<ul style="list-style:none">
			<li style="float:left;"><button><a href="admindash.php">AdminDashBoard</a></button></li>
			<li style="float:right;padding-right:30px;"><button><a href="logout.php">Logout</a></button></li>	
			</ul>
		</div>
				
		<div align="center">
			<h1><b>Student Management System</b></h1>
		</div>
		
		<div>
		
			<form method="post" action="update.php">			
			
			<table align="center" style="padding:10px;">
				
				<tr>
					<th>Roll no.:</td>
					<td><input type="text" placeholder="Enter roll no." name="roll_no" required></td>
					
					<th>Standard:</td>
					<td><input type="text" placeholder="Enter standard" name="standard" required></td>
		
					<td colspan="2" align="center"><input type="submit" value="Search" name="search"></td>
				</tr>
				
			</table>
			</form>
			
		</div>
		
		<div>			
			
			<table align="center" border="1" bgcolor="yellow" style="padding:10px;width:80%;text-align:center;">
				
				<tr>
					<th>Sr No:</th>
					<th>Image:</th>
					<th>Roll no.:</th>
					<th>Name:</th>
					<th>Update:</th>
				</tr>
				
				<?php

					include('dbcon.php');

					if(isset($_POST['search']))
					{
						$rollno=$_POST['roll_no'];
						$std=$_POST['standard'];
						
						$qry="SELECT * FROM `student` WHERE `roll_no`='$rollno' AND `standard`='$std'";
						$run=mysqli_query($con,$qry);
						
						if($rows=mysqli_num_rows($run)<1)
						{
							echo "<tr><td colspan='5'>No records found!</td></tr>";
						}
						else
						{
							$count=0;
							
							while($data=mysqli_fetch_assoc($run))
							{
								$count++;
								?>
									<tr>
										<td><?php echo $count; ?></td>
										<td><img src="dataimg/<?php echo $data['image']; ?>" style="max-width:100px;" /></td>
										<td><?php echo $data['roll_no']; ?></td>
										<td><?php echo $data['name']; ?></td>
										<td><a href="updateform.php?sid=<?php echo $data['id'] ?>">Update</a></td>
									</tr>
								<?php
							}
						}
						
					}                    

				?>
				
			</table>
			
		</div>
		
	</body>

</html>
