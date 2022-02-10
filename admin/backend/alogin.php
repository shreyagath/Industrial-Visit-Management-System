<?php

session_start();
include ('aconfig.php');

if(isset($_POST['login_btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $log_query = "SELECT * FROM admin_login WHERE username= '$username' AND password= '$password' LIMIT 1";

    $log_query_run = mysqli_query($con, $log_query);
     if(mysqli_num_rows($log_query_run) > 0) {
        foreach($log_query_run as $row) {
            $user_id =$row['aid'];
            $username =$row['name'];
        }

        $_SESSION['auth']= "$password";
        
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'username'=>$username,
        ];   
        
        $_SESSION['status']= "Logged In Successfully";
        header('location: registration.php');
    }
    else {
        $_SESSION['status']= "Invalid Email or Password";
        header('location:..\admin.html');
    }
}
else {
    $_SESSION['status']= "Access Denied";
    header('location:..\admin.html');
  
}

?>
