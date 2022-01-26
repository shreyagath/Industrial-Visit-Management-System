<?php

    include('../backend/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Visitro | Cognizant Info</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,400i,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/company.css">
    

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="relative">

    <!-- Navbar-->
    <div class="wrapper">
        <nav class="navbar"> 
            <img src="../images/logo.jpg" class="logo">
            <ul>
                
                <li><a href="..\index.html">Home</a></li>
                <li><a href="industries.html">Industries</a></li>
                <li><a href="about.html">About Us</a></li>			
                <li><a href="contactus.html">Contact Us</a></li>
                <li><a class="active" href="usignin.html">Login</a></li>
            </ul>
        </nav>  
    </div>

    <!-- Page Title -->
    <section class="page-title text-center bg-img overlay">
        <div class="container relative clearfix">
            <div class="title-holder">
                <div class="title-text">
                    <h1 class="uppercase">Cognizant</h1>
                </div>
            </div>
        </div>
    </section>

            <!-- Intro -->
            <section class="section-wrap intro pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 mb-50">
                            <br>
                            <br>
                            <h2 class="intro-heading">Information about Cognizant</h2>
                            <br>
                        
                            <p>Cognizant is an American multinational information technology services and 
                            consulting company. It is headquartered in Teaneck, New Jersey, United States. 
                            Cognizant is part of the NASDAQ-100 and trades under CTSH. It was founded as an 
                            in-house technology unit of Dun & Bradstreet in 1994,[5] and started serving external 
                            clients in 1996</p>

                            <p>Like many other IT services firms, Cognizant follows a global delivery model based on 
                            offshore software R&D and offshore outsourcing. The company has a number of offshore development centers   outside the United States and 
                            near-shore centers in the U.S., Europe and South America.</p>

                            <p> In its early years, Cognizant gained business from a
                            number of American and European companies with the help of the Dun & Bradstreet brand.The company's senior 
                            executives envisaged the firm as a provider of high-end customer services on-par with the six contemporary major system integrators (Accenture, 
                            BearingPoint, Capgemini, E&Y, Deloitte and IBM), but at lower prices</p>

                           <p>Cognizant CEO Brian Humphries received a total compensation of $13.8 million in 2020, according to the company's 2021 
                            proxy statement filing on the US SEC. It's less than the $15.9 million he received in 2019</p>

                            <p>Cognizant began as Dun & Bradstreet Satyam Software (DBSS), established with Satyam Computer Services as Dun & Bradstreet's in-house technology unit focused on implementing large-scale IT projects for Dun & Bradstreet 
                                businesses. In 1996, the company started pursuing customers beyond Dun & Bradstreet.</p>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="btn-sec">
                            <?php

                                $query = "SELECT * FROM idetails WHERE iid = 2";

                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0) {
                                foreach($query_run as $row) {

                            ?>

                                <a href="slot.php?iid=<?php echo $row['iid']; ?>"><button action="#" type="button"> Book Slot </button></a><br>
                                <?php 
                                            }
                                        }
                                ?>
                             
                             <br>
                                <a href="contactus.html"><button action="#" type="button"> Contact Us </button></a>    
                            </div>
                            
                        </div>
                    </div>
                    <hr class="mb-0">
                </div>
            </section>
            <!-- end intro -->


</body>

</html>