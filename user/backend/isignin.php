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
		$username="";
		$password="";
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{
			$query = "select * from isignup where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						session_start();
						$_SESSION['id'] = $user_data['id'];
						$_SESSION['username'] = $username;
	
						header("Location:../html/ihome.php");
						
					}
				}
			}
			
			echo "<script>alert('Wrong Username or Password!')</script>";
			header("refresh:0;url=../html/isignin.html");

		}else
		{
			echo "<script>alert('Wrong Username or Password!')</script>";
			header("refresh:0;url=../html/isignin.html");
		}
	}
}
?>