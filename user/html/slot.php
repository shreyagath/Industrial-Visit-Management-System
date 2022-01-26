<?php

    include('../backend/config.php');

	if(isset($_GET['iid'])) {

		$id = $_GET['iid'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Slot</title>
    <link rel="stylesheet" href="../css/slot.css">
	<link rel="stylesheet" href="../css/nav1.css">
</head>

<body>
	<div class="wrapper">
			<nav class="navbar"> 
        		<img src="../images/logo.jpg" class="logo">
				<ul>
					<li><a href="about.html">About Us</a></li>			
					<li><a href="contactus.html">Contact Us</a></li>
				</ul>
			</nav>
			
			<div class="center">
				<h3>Book your slot as an</h3>
					<div class="button">
						<a href="individual.php?iid=<?php echo $id ?>" class="ab">Individual</a>
						<a href="organization.php?iid=<?php echo $id ?>" class="ac">Organization</a>
					</div>
			</div>
			<div class="vac">
				Have you completed both your Vaccination Doses? <input type="checkbox">
		    </div>
	
		</div>

</body>
</html>