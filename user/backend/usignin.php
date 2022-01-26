<?php
session_start();
$con = mysqli_connect('localhost','root','','VISITRO',3308); 
if(!$con)
{
    echo "Connection not established...";
    exit();
}
else
{
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email="";
		$password="";
		
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{
			$query = "select * from usignup where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['uid'] = $user_data['uid'];
						$_SESSION['email']=$email;
	
						header("Location:../html/industries.html");
						
					}
				}
			}
			
			echo "<script>alert('Wrong Email or Password!')</script>";
			header("refresh:0;url=../html/usignin.html");

		}else
		{
			echo "<script>alert('Wrong Email or Password!')</script>";
			header("refresh:0;url=../html/usignin.html");
		}
	}
}
?>