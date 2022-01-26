<?php 

    session_start();

    include('config.php');
	
	$Fname="";
	$Lname="";
	$Phone="";
	$Email="";
	$Message="";

	$Fname = $con->real_escape_string($_POST['firstname']);
	$Lname = $con->real_escape_string($_POST['lastname']);
	$Phone = $con->real_escape_string($_POST['phone']);
	$Email = $con->real_escape_string($_POST['email']);
	$Message = $con->real_escape_string($_POST['message']);

	$sql="INSERT INTO contactus (firstname, lastname, phone,email,message) VALUES
	('$Fname','$Lname','$Phone','$Email','$Message')";
	$result=mysqli_query($con,$sql);
	
	if($result)
	{
		echo "<script>alert('Thank you! Your message has been submitted.')</script>";
		header("refresh:0;url=../html/contactus.html");
	}
	else
	{
		echo "<script>alert(Couldn't submit. Please try again later')</script>";
	}

?>