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
		<title>insert</title>
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
		
		<div style="padding-top:100px;overflow:hidden;">
		
			<form method="post" action="insert.php" enctype="multipart/form-data">			
			
			<table align="center" border="1" bgcolor="white" width="50%" height="50%" style="padding:10px;">
				
				<tr>
					<td colspan="2" align="center"><b><h3>Insert Student Details</h3></b></td>
				</tr>
				
				<tr>
					<td>Roll no.:</td>
					<td><input type="text" placeholder="Enter roll no." name="roll_no" required></td>
				</tr>
				
				<tr>
					<td>Full name:</td>
					<td><input type="text" placeholder="Enter full name" name="name" required></td>
				</tr>
				
				<tr>
					<td>City:</td>
					<td><input type="text" placeholder="Enter city" name="city" required></td>
				</tr>
				
				<tr>
					<td>Parent contact no.:</td>
					<td><input type="text" placeholder="Enter parent contact no." name="parent_contact" required></td>
				</tr>
				
				<tr>
					<td>Standard:</td>
					<td><input type="text" placeholder="Enter standard" name="standard" required></td>
				</tr>
				
				<tr>
					<td>Image:</td>
					<td><input type="file" placeholder="Select image" name="image"></td>
				</tr>
				
				<tr>
					<td colspan="2" align="center"><input type="submit" value="Submit" name="submit"></td>
				</tr>
				
			</table>
			</form>
			
		</div>
		
	</body>

</html>


<?php

	include('dbcon.php');

	if(isset($_POST['submit']))
	{
		$rollno=$_POST['roll_no'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$pcon=$_POST['parent_contact'];
		$std=$_POST['standard'];
		$img=$_FILES['image']['name'];
		$tempname=$_FILES['image']['tmp_name'];
		
		move_uploaded_file($tempname,"dataimg/$img");
		
		$qry="INSERT INTO `student`(`roll_no`, `name`, `city`, `parent_contact`, `standard`, `image`) VALUES ('$rollno','$name','$city','$pcon','$std','$img')";
		$run=mysqli_query($con,$qry);
		
		if($run==true)
		{
			?>
				<script>
					alert("Inserted Data Successfully!");
					window.open('insert.php','_self');				
				</script>
			<?php
		}
		
	}                    

?>
