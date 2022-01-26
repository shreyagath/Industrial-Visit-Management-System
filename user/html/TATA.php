<?php

    include('../backend/config.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Visitro | TATA Motors Info</title>

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
                    <h1 class="uppercase">TATA Motors</h1>
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
                            <h2 class="intro-heading">Information about TATA Motors Pvt. Ltd</h2>
                            <br>
                        
                            <p>Tata Motors Limited is an Indian multinational automotive manufacturing company, headquartered in the city of Mumbai, India which is part of Tata Group. The company produces passenger cars, 
                                trucks, vans, coaches, buses, luxury cars, sports cars, construction equipment.</p>

                            <p>Formerly known as Tata Engineering and Locomotive Company (TELCO), the company was founded in 1945 as a manufacturer of locomotives. The company manufactured its first commercial vehicle in 1954 in a collaboration with Daimler-Benz AG,
                             which ended in 1969. Tata Motors entered the passenger vehicle market in 1988 with the launch of the TataMobile followed by the Tata Sierra in 1991, becoming the 
                             first Indian manufacturer to achieve the capability of developing a competitive indigenous automobile</p>

                            <p>Tata Motors has auto manufacturing and vehicle plants in Jamshedpur, Pantnagar, Lucknow, Sanand, Dharwad, and Pune in India, as well as in Argentina, South
                             Africa, the United Kingdom, and Thailand. It has research and development centres in Pune, Jamshedpur,
                              Lucknow, and Dharwad, India and South Korea, the United Kingdom, and Spain. </p>

                            <p>Tata Motors is listed on the BSE (Bombay Stock Exchange), where it is a constituent of the BSE SENSEX index, the National Stock Exchange of India, and the New York Stock Exchange. 
                                The company is ranked 265th on the Fortune Global 500 list of the world's biggest corporations as of 2019</p>
                     
                           <p>
                            It is a leading global automobile manufacturing company. Its diverse portfolio includes an extensive range of cars, sports utility vehicles, 
                            trucks, buses and defence vehicles. ... Part of the USD110 billion Tata group founded by Jamsetji Tata in 1868, Tata Motors is among the world's leading 
                            manufacturers of automobiles.</p>

                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="btn-sec">

                                <?php

                                    $query = "SELECT * FROM idetails WHERE iid = 4";
                                    
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