<?php

	if(isset($_POST['submit']))
	{
		include('dbcon.php');
		
		$rollno=$_POST['roll_no'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$pcon=$_POST['parent_contact'];
		$std=$_POST['standard'];
		$id=$_POST['sid'];
			
		$img=$_FILES['image']['name'];
		$tempname=$_FILES['image']['tmp_name'];
			
		move_uploaded_file($tempname,"dataimg/$img");
			
		$qry="UPDATE `student` SET `roll_no`='$rollno',`name`='$name',`city`='$city',`parent_contact`='$pcon',`standard`='$std',`image`='$img' WHERE `id`='$id';";
		$run=mysqli_query($con,$qry);
			
		if($run==true)
		{
			?>
				<script>
					alert("Updated Data Successfully!");
					window.open('updateform.php?sid=$id','_self');				
				</script>
			<?php
		}                    
	}
?>
