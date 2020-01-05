<html>

	<head>
		<title>home</title>
	</head>
	
	<body style="background-image:url(imgs/img1.jpg);background-repeat:no-repeat;background-size:cover;">
	
		<div align="right" style="padding-top:5px;padding-right:5px;overflow:hidden;">
			<button><a href="login.php">Admin LogIn</a></button>
		</div>
		
		<div align="center">
			<h1><b>Student Management System</b></h1>
		</div>
		
		<div style="padding-top:50px;overflow:hidden;">
		
			<form method="post" action="home.php" enctype="multipart/form-data">			
			
			<table align="center" border="1" bgcolor="white" width="30%" style="padding:10px;">
				
				<tr>
					<td colspan="2" align="center"><b><h3>Search Student Details</h3></b></td>
				</tr>
				
				<tr>
					<td>Roll no.:</td>
					<td><input type="text" placeholder="Enter roll no." name="roll_no"></td>
				</tr>
				
				<tr>
					<td>Standard:</td>
					<td><input type="text" placeholder="Enter standard" name="standard"></td>
				</tr>
				
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Show Info" name="show"></td>
				</tr>
				
			</table>
			</form>
			
		</div>
		
	</body>

</html>

<?php
	if(isset($_POST['show']))
	{
		$rollno=$_POST['roll_no'];
		$std=$_POST['standard'];
		
		include('dbcon.php');
		include('function.php');
		
		showinfo($rollno,$std);
	}
?>