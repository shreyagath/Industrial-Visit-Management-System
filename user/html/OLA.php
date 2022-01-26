<?php

    include('../backend/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Visitro | OLA Electrics Info</title>

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
                    <h1 class="uppercase">OLA Electrics</h1>
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
                            <h2 class="intro-heading">Information about OLA Electrics Pvt Ltd</h2>
                            <br>
                        
                            <p>Ola Electric was established in 2017 as a wholly-owned subsidiary of ANI Technologies, the parent entity of Ola Cabs. The company was started to reduce emission and fuel dependency of Ola's cab fleet, and shift to mass electric mobility; 
                            a pilot program was launched in Nagpur in May 2017 by setting up charging stations across the city and procuring electric cabs, e-buses, and e-rickshaws from OEM partners.
                             In April 2018, it announced that it aims to have 1 million electric vehicles in its fleet by 2022.</p>

                            <p>Between December 2018 and January 2019, founder Bhavish Aggarwal bought a 92.5% stake in Ola Electric from ANI Technologies at a valuation of ₹1 lakh (US$1,300), and Ola Electric was spun-off as a separate entity.
                             ANI Technologies continued to hold a 7.5% stake in Ola Electric for allowing the use of "Ola" brand name.
                            In February 2019, Ola Electric raised US$56 million from Tiger Global and Matrix India</p>

                            <p>The company announced on 6 May 2019 that Ratan Tata had invested an undisclosed amount in Ola Electric as part of its Series A round of funding.[10] It raised $250 million from SoftBank during Series B round funding in July 2019, at a
                             valuation of over $1 billion. </p>

                             <p> Ola Electric raised more than $200 million from Falcon Edge, SoftBank Group and others at a valuation of $3 billion valuation in September 2021.[12] In December the same year, it raised $53 million in an investment 
                            round led by Singaporean holding company, Temase.The factory spread in 500 acre, fully-automated factory located in Pochampalli town in the Krishnagiri district of Tamil Nadu, The company claims it will be the largest two wheeler factory in the world with an annual production capacity of 10 million units. The factory named the Ola FutureFactory produced its first electric two-wheeler on 
                            15 August 2021.In january 2022 it is manufacturing 1000 Electric scooters per day</p>

                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="btn-sec">
                            <?php

                                $query = "SELECT * FROM idetails WHERE iid = 5";

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