<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .jumbotron {
      background-color: white;
    }
  </style>
    <title>Industry Database</title>
</head>
<style>
    
    .table{
        padding: 10px;
        /* margin:10px ; */
    }
    table{
            border: 2px solid #dddddd;
        position: inherit;
        border-collapse:collapse ;
        width: 80%;
        color: #588c7e;
        font-family:sans-serif ;
        font-size: 15px;
        text-align: center;
        box-sizing: 5px;
    }
    td{
        border: 2px solid #dddddd;
        padding: 5px 5px;
        margin: 5px;
    }
    th{
        padding: 5px 5px;
        background-color: #588c7e;
        color:white;
        border: 1px solid #dddddd;
    }
    tr:nth-child(even){background-color: #f2f2f2;border: 2px solid #dddddd;}
</style>
<body>
  
<nav class="navbar navbar-expand-sm bg-dark navbar-dark"  >
  <a class="navbar-brand" href="registration.php" style="margin-right: 870px;">Homepage</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="details.php" >Industry Details Database</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="contact.php" >Contact Database</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="islot.php" >Individual  Database</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="oslot.php" >Organization  Database</a>
      </li>

     <li class="nav-item">
        <a class="nav-link" href="registration.php" >Registration Database</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../admin.html" >Logout</a>
      </li>
    </ul>
  </div>  
</nav><br><br>
  
     
<div class="table">
    <h3><a>4. Industry Database</a></h3>
        <table>
            <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            </tr>
            </div>   
            
        <?php
        
        $con = mysqli_connect('localhost','root','','VISITRO',3308);
        
        $ans = mysqli_select_db($con,"VISITRO");
        if(!$ans)
        {
            die("<script>alert('Woops! Error connecting to database.')</script>");
        }
    
        $sql="SELECT * FROM `isignup` ";
    
        $result=$con->query($sql);
    
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                 echo "<tr><td>"
                 .$row["id"]."</td><td>"
                 .$row["username"]."</td><td>"
                 .$row["email"]
                 ."</td></tr>";
            }
            echo "</table>";
        }
    
        else
        {
            echo "<script> alert('NO DATA AVAILABLE.')</script> <br/>" ;
        }
        $con->close();
        ?>
    </table>  

    
<div class="jumbotron text-center" style="margin-bottom:0" >
  <p> ©Visitro 2021-2022 </p>
</div>

</body>
</html>