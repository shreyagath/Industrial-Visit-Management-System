<?php  

session_start();

include('config.php');

$fname="";
$lname="";
$phone="";
$age="";
$persons="";
$email="";
$date="";
$iname ="";

$fname=mysqli_real_escape_string($con,$_POST['fname']);
$lname=mysqli_real_escape_string($con,$_POST['lname']);
// $phone=mysqli_real_escape_string($con,$_POST['phone']);
$phone= $_POST['phone'];
$age=mysqli_real_escape_string($con,$_POST['age']);
$persons=mysqli_real_escape_string($con,$_POST['persons']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$date=mysqli_real_escape_string($con,$_POST['date']);
$iname=mysqli_real_escape_string($con,$_POST['iname']);



if($fname==$lname)
{
	echo "<script>alert('You have entered wrong Name during confirmation')</script>";
	header("refresh:0;url=../html/organization.html");
}

else
{
$user_check="SELECT * FROM organization WHERE fname='$fname' or lname='$lname'";
if(mysqli_num_rows(mysqli_query($con,$user_check)) < 0)
{
	echo "<script>alert('Name exits already...')</script>";
	header("refresh:0;url=../html/organization.html");
}
else
{
	
    $query="INSERT INTO organization(fname,lname,phone,age,persons,email,date,iname) VALUES('$fname','$lname','$phone','$age','$persons','$email','$date','$iname')";
    if(mysqli_query($con,$query))
	{
		$_SESSION['fname']=$fname;
		$_SESSION['success']="TRUE";
		
		echo "<script>alert('Your Slot has been booked successfully!!')</script>";
    	header("refresh:0;url=..\index.html");
	}

}

}
?> 
