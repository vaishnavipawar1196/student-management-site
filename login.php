<!DOCTYPE html>

<?php
	session_start();
	
		if(isset($_SESSION['uid']))
		{
			header('location:admindash.php');	
		}
?>

<html>

	<head>
		<title>login</title>
	</head>
	
	<body style="background-image:url(imgs/img1.jpg);background-repeat:no-repeat;background-size:cover;">
		
		<div style="padding-top:150px;">
		
			<form method="post" action="login.php">
			<table align="center" border="1" bgcolor="white" style="padding:50px;">
				
				<tr>
					<td colspan="2" align="center"><b><h3>LogIn System</h3></b></td>
				</tr>
				
				<tr>
					<td>Username:</td>
					<td><input type="text" placeholder="Enter Your Username" name="username"></td>
				</tr>
				
				<tr>
					<td>Password:</td>
					<td><input type="password" placeholder="Enter Your Password" name="password"></td>
				</tr>
				
				<tr>
					<td colspan="2" align="center"><input type="submit" value="LogIn" name="login"></td>
				</tr>
				
			</table>
			</form>
			
		</div>
		
	</body>

</html>

<?php

	include('dbcon.php');

	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
		$run=mysqli_query($con,$qry);
		$rows=mysqli_num_rows($run);
		
		if($rows<1)
		{
			?>
				<script>
					alert("Username or Password not matched!");
					window.open('login.php','_self');				
				</script>
			<?php
		}
		else
		{
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			
			session_start();
			
			$_SESSION['uid']=$id;
			header('location:admindash.php');
		}
		
	}                    

?>