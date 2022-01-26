<?php
	session_start();

	if(isset($_SESSION['username'])){
		$user = $_SESSION['username'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Industry Home</title>
    <link rel="stylesheet" href="../css/slot.css">
	<link rel="stylesheet" href="../css/nav1.css">
</head>

<body>
	<div class="wrapper">
			<nav class="navbar"> 
        		<img src="../images/logo.jpg" class="logo">
			</nav>
			
			<div class="center">
				<h3>View User's Slot Booking Databases</h3>
					<div class="button">
						<a href="../backend/viewislot.php?iname=<?php echo $user ?>" class="ac">Individual </a>
					&nbsp;&nbsp;&nbsp;&nbsp;	
					<a href="../backend/viewoslot.php?iname=<?php echo $user ?>" class="ab">Organization </a>
					</div>
			</div>
			
		</div>

</body>
</html>