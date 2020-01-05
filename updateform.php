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

<?php
	include('dbcon.php');
	
	$sid=$_GET['sid'];
	
	$qry="SELECT * FROM `student` WHERE `id`='$sid'";
	$run=mysqli_query($con,$qry);
	
	$data=mysqli_fetch_assoc($run);
?>

<html>

	<head>
		<title>updateform</title>
	</head>
	
	<body bgcolor="cyan">
	
		<div style="background-color:blue;margin=0px;padding:0px;overflow:hidden;">	
			<ul style="list-style:none">
			<li style="float:left;"><button><a href="admindash.php">AdminDashBoard</a></button></li>
			<li style="float:right;padding-right:30px;"><button><a href="logout.php">Logout</a></button></li>	
			</ul>
		</div>
				
		<div align="center" style="background-color:blue;margin=0px;padding:0px;overflow:hidden;">
			<h1><b>Student Management System</b></h1>
		</div>
		
		<div style="padding-top:100px;overflow:hidden;">
		
			<form method="post" action="updatedata.php" enctype="multipart/form-data">			
			
			<table align="center" border="1" bgcolor="white" width="50%" height="50%" style="padding:10px;">
				
				<tr>
					<td>Roll no.:</td>
					<td><input type="text" value="<?php echo $data['roll_no']; ?>" name="roll_no" required></td>
				</tr>
				
				<tr>
					<td>Full name:</td>
					<td><input type="text" value="<?php echo $data['name']; ?>" name="name" required></td>
				</tr>
				
				<tr>
					<td>City:</td>
					<td><input type="text" value="<?php echo $data['city']; ?>" name="city" required></td>
				</tr>
				
				<tr>
					<td>Parent contact no.:</td>
					<td><input type="text" value="<?php echo $data['parent_contact']; ?>" name="parent_contact" required></td>
				</tr>
				
				<tr>
					<td>Standard:</td>
					<td><input type="text" value="<?php echo $data['standard']; ?>" name="standard" required></td>
				</tr>
				
				<tr>
					<td>Image:</td>
					<td><input type="file" value="<?php echo $data['image']; ?>" name="image"></td>
				</tr>
				
				<tr>
					<td colspan="2" align="center">
					<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
					<input type="submit" value="Update" name="submit">
					</td>
				</tr>
				
			</table>
			</form>
			
		</div>
		
	</body>

</html>