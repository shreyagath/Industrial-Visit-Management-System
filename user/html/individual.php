<?php

    include('../backend/config.php');

	if(isset($_GET['iid'])) {

		$id = $_GET['iid'];

		$query = "SELECT * FROM idetails WHERE iid='$id' LIMIT 1";
    	$query_run= mysqli_query($con, $query);

    	if(mysqli_num_rows($query_run) > 0) {
			foreach ($query_run as $row) {
				$industry_name = $row['iname'];
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Individual Registration</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/individual.css" rel="stylesheet">

</head>

<body>

	<header>
		<div class="wrapper">
			<nav class="navbar">
				<img src="../images/logo.jpg" class="logo">
				<ul>
					
					<li><a href="..\index.html">Home</a></li>
					<li><a href="industries.html">Industries</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="contactus.html">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div id="message-contact">
		<span>
			Hey!Nice to see you here
		</span>
	
	</div>
	<main id="general_page">
		<div class="margin_60_35 containerr">
			<div class="row">
				<div class="col-lg-8 left-bar">
					<div>

						<form method="post" action="../backend/individual.php" id="individual">
							<div class="row mb-3">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>First name</label>
										<input type="input" class="form-control styled" id="fname"
											name="fname" placeholder="Jhon">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label>Last name</label>
										<input type="input" class="form-control styled" id="lname"
											name="lname" placeholder="Doe">
									</div>
								</div>
							</div>
							<div class="row  mb-3">
								<div class="col-md-8 col-sm-6">
									<div class="form-group">
										<label>Phone number:</label>
										<input type="input" id="phone" name="phone"
											class="form-control styled" placeholder="00 44 5435435">
									</div>
								</div>
								<div class="col-md-2 col-sm-3">
									<div class="form-group">
										<label>Age:</label>
										<input type="number" id="age" name="age" class="form-control styled"
											placeholder="21">
									</div>
								</div>
								<div class="col-md-2 col-sm-3">
									<div class="form-group">
										<label>Gender:</label>
										<input type="input" id="gender" name="gender" class="form-control styled"
											placeholder="M/F">
									</div>
								</div>
							</div>

							<div class="row  mb-3">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Email Address</label>
										<input type="email" id="email_contact" name="email"
											class="form-control styled" placeholder="name@gmail.com">
									</div>

									<input type="hidden" name="iname" value="<?php echo $industry_name ?>">

									<p> <a href=""> <input type="submit" value="Proceed" class="btn btn-primary" id="submit-contact">  </a>									</p>
								</div>
							</div>

					</div>
				</div>

				<aside class="col-lg-4 d-flex flex-column ">
					<div class="box_style_2 mb-5 ">
						<h4>Please Enter the Visit Date</h4>

						<input type="date" id="date" name="date">

					</form>
					</div>
					<div class="box_style_2">
						<h4>Note</h4>
						<p>
							It is compulsory to carry your Vaccination Certificate of both the doses
						</p>

						<p>
							If the person is not found with the certificates He/She will not be permitted in the
							premises
						</p>
					</div>
				</aside>

			</div>

		</div>
		<br>
		<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		By Clicking the proceed button you agree that you have read all the instructions
	</main>

</body>

</html>