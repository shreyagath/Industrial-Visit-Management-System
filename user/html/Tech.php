<?php

    include('../backend/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Visitro | Tech Mahindra Info</title>

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
                    <h1 class="uppercase">Tech Mahindra</h1>
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
                            <h2 class="intro-heading">Information about Tech Mahindra</h2>
                            <br>
                        
                            <p>Tech Mahindra is an Indian multinational information technology services and consulting company. Part of the Mahindra Group, the company is headquartered in Pune and has it Tech Mahindra is a US$5.2 billion company with 125,236 
                            employees across 90 countries. The company ranked #5 in India's IT firms and overall #47 in Fortune India 500 list for 2019.[8] On 25 June 2013, Tech Mahindra announced the completion of a merger with Mahindra Satyam.
                             Tech Mahindra has 973 active clients as of April 2020.</p>

                            <p>Mahindra & Mahindra started a joint venture with British Telecom in 1986 as a technology outsourcing firm. 
                            British Telecom initially had around 30 percent stake in Tech Mahindra. In December 2010, British Telecom
                             sold 5.5 per cent of its stake in Tech Mahindra to Mahindra & Mahindra for Rs 451 crore. </p>

                            <p>Tata Motors has auto manufacturing and vehicle plants in Jamshedpur, Pantnagar, Lucknow, Sanand, Dharwad, and Pune in India, as well as in Argentina, South
                             Africa, the United Kingdom, and Thailand.</p>
                             
                             <p>It has research and development centres in Pune, Jamshedpur,
                                Lucknow, and Dharwad, India and South Korea, the United Kingdom, and Spain.In August 2012,
                                British Telecom sold 14.1 per cent of its stake to institutional investors for about Rs 1,395 crore. In December 2012, British Telecom sold its remaining 9.1 per cent (11.6 million shares) shareholding to institutional investors for a total 
                              gross cash proceeds of Rs 1,011.4 crores. This sale marked the exit of British Telecom from Tech Mahindra </p>

                            <p>Tech Mahindra is an Indian multinational information technology services and consulting company. 
                            The company ranked #5 in India's IT firms and overall #47 in Fortune India 500 list for 2019.</p>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="btn-sec">
                            <?php

                                $query = "SELECT * FROM idetails WHERE iid = 7";

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