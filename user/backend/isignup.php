<?php  

session_start();

include('config.php');
	
$username="";
$email="";
$password="";
$cpass="";

$username=mysqli_real_escape_string($con,$_POST['username']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$cpass=mysqli_real_escape_string($con,$_POST['cpass']);

if($password!=$cpass)
{
	echo "<script>alert('You have entered wrong passsword during confirmation')</script>";
	header("refresh:0;url=../html/isignup.html");
}

else
{
$user_check="SELECT * FROM isignup WHERE username='$username' or email='$email'";
if(mysqli_num_rows(mysqli_query($con,$user_check)) > 0)
{
	echo "<script>alert('Email or Username exits already...')</script>";
	header("refresh:0;url=../html/isignup.html");
}
else
{
    $query="INSERT INTO isignup(username,email,password) VALUES('$username','$email','$password')";
    if(mysqli_query($con,$query))
	{
		$_SESSION['username']=$username;
		$_SESSION['success']="TRUE";
		header("Location:../html/idetails.html");
	}

}
}
?> 