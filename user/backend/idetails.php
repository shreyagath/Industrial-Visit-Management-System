<?php

session_start();

include('config.php');
	

$iname="";
$city="";
$state="";
$start="";
$end="";


$iname=mysqli_real_escape_string($con,$_POST['iname']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$state=mysqli_real_escape_string($con,$_POST['state']);
$start=mysqli_real_escape_string($con,$_POST['start']);
$end=mysqli_real_escape_string($con,$_POST['end']);

if($city==$state)
{
	echo "<script>alert('You have entered wrong details!!')</script>";
	header("refresh:0;url=../html/idetails.html");
}

else
{
$user_check="SELECT * FROM idetails WHERE iname='$iname' or city='$city'";
if(mysqli_num_rows(mysqli_query($con,$user_check)) < 0)
{
	echo "<script>alert('Name exits already...')</script>";
	header("refresh:0;url=../html/idetails.html");
}
else
{
    $query="INSERT INTO idetails(iname,city,state,start,end) VALUES('$iname','$city','$state','$start','$end')";
    if(mysqli_query($con,$query))
	{
		$_SESSION['iname']=$iname;
		$_SESSION['success']="TRUE";
		echo "<script>alert('Details saved successfully!!')</script>";
		header("refresh:0;url=..\index.html");
	}

}
}

?> 
