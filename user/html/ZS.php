<?php

    include('../backend/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Visitro | ZS Associates Info</title>

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
                    <h1 class="uppercase">ZS Associates</h1>
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
                            <h2 class="intro-heading">Information about ZS Associates</h2>
                            <br>
                        
                            <p>ZS Associates is a management consulting and professional services firm focusing on consulting, software, and technology, headquartered in Evanston, Illinois that provides services for clients in healthcare, private equity, and technology. The firm was founded in 1983 by two professors at Northwestern University who developed sales 
                            force alignment models using the world’s first personal-computer-aided territory mapping system.</p>

                            <p>It continues to offer sales force alignment service to this day, in addition to a range of professional services, many of which are supported by advanced analytics.
                                The firm employs more than 10,000 employees  in 25 offices in North America, South America, Europe and Asia.
                              </p>

                            <p>  The company was chosen by Forbes magazine as one of America’s best management and consulting firms in 2019  and has been awarded for its company culture by Consulting magazine for several years in a row.
                                The company has also been recognized by the Human Rights Campaign  Foundation for earning 100 percent on their Annual Corporate Equality Index for LGBTQ workplace equality. </p>

                            <p>ZS operates as a strategic, long-term advisor to its clients, basing its offerings on clients’ needs and challenges across the following industries:                           
                                Pharmaceuticals and Biotech,
                                Medical Technology,
                                Health Plans,
                                Travel and Hospitality,
                                Industrials and Business Services,
                                High-Tech and Telecommunications,
                                Financial Services,
                                Private Equity</p>
                    
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="btn-sec">
                                
                            <?php

                                $query = "SELECT * FROM idetails WHERE iid = 1";

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