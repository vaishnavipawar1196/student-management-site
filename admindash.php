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
		<title>admin dashboard</title>
	</head>
	
	<body style="background-image:url(imgs/img1.jpg);background-repeat:no-repeat;background-size:cover;">
		
		<div>	
			<ul style="list-style:none">
			<li style="float:left;"><button><a href="home.php">Home</a></button></li>
			<li style="float:right;padding-right:30px;"><button><a href="logout.php">Logout</a></button></li>	
			</ul>
		</div>
				
		<div align="center">
			<h1><b>Student Management System</b></h1>
		</div>
		
		<div  style="padding-top:50px;">
			<table align="center" bgcolor="white">
				<tr>
					<td><h3>1.</h3></td>
					<td><h3><a href="insert.php">Insert Student Details</a></h3></td>
				</tr>
				
				<tr>
					<td><h3>2.</h3></td>
					<td><h3><a href="delete.php">Delete Student Details</a></h3></td>
				</tr>
				
				<tr>
					<td><h3>3.</h3></td>
					<td><h3><a href="update.php">Update Student Details</a></h3></td>
				</tr>
			</table>
		</div>
		
	</body>
	
</html>	
	