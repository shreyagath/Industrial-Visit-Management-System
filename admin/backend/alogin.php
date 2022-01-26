<?php

session_start();
include ('aconfig.php');

if(isset($_POST['login_btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $log_query = "SELECT * FROM admin_login WHERE name= '$username' AND password= '$password' LIMIT 1";

    $log_query_run = mysqli_query($con, $log_query);
    echo"hi";  
      if(mysqli_num_rows($log_query_run) > 0) {
        foreach($log_query_run as $row) {
            $user_id =$row['id'];
            $user_name =$row['name'];
        }

        $_SESSION['auth']= "$user_role";
        
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_name'=>$user_name,
        ];   
        echo"hello";
        header('location: registration.php');
    }
    else {
        header('location:registration.php');
        echo"hii";
    }
}
else {
    header('location:admin.html');
    echo"hi";

}

?>