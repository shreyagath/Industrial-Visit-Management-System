<?php

    include('../backend/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Visitro | Amul Info</title>

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
                    <h1 class="uppercase">Amul</h1>
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
                            <h2 class="intro-heading">Information about Amul Dairy Plant</h2>
                            <br>
                        
                            <p>Amul (The Kaira District Co-operative Milk Producers’ Union) is an Indian dairy cooperative society, based 
                            at Anand in the Indian state of Gujarat. Formed in 1946, it is a cooperative brand managed by a 
                            cooperative body, the Gujarat Co-operative Milk Marketing Federation Ltd. (GCMMF), which today is jointly
                             owned by 3.6 million (3.6 million) milk producers in Gujarat, and the apex body of 13 District Milk Unions, spread across 13,000 villages of Gujarat. Amul spurred
                             India's White Revolution, which made the country the world's largest producer of milk and milk products</p>

                            <p>Kaira Union introduced the brand “Amul” for marketing its product range. The word “Amul” is derived from 
                            Sanskrit word ‘Amulya’ which means ‘priceless’ or precious(a name proposed by then founding leader of Agriculture College, Dr. Maganbhai Patel) was founded in 1946
                            through the efforts of Tribhuvandas Kishibhai Patel. Amul's foundation was a significant contributor to the white revolution in India.</p>

                            <p>Tribhuvandas Kishibhai Patel under the guidance of Sardar Vallabhbhai Patel became the founding chairman of the organization and led it until his retirement in the 70s. 
                            He hired Dr. Verghese Kurien in 1949. He convinced Dr. Kurien to stay and help with the mission. </p>

                           <p>Under the chairmanship of Tribhuvandas,
                            Dr. Kurien was initially the general manager and helped guide the technical and marketing efforts of  Amul. Dr. Kurien was the 
                            chairman of Amul briefly after Tribhuvandas Kishibhai Patel died in 1994.</p>

                            <p>Amul cooperative was registered on 19 December 1946, as a response to the exploitation of marginal milk producers by traders and agents in small cities. The prices of milk were arbitrarily determined at the time. The government had 
                            given Polson an effective monopoly in milk collection from Kaira and its subsequent supply to Mumba</p>
                            
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="btn-sec">
                            <?php

                                $query = "SELECT * FROM idetails WHERE iid = 3";

                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0) {
                                foreach($query_run as $row) {

                            ?>
                          
                                <a href="slot.php?iid=<?php echo $row['iid']; ?>"><button action="#" type="button"> Book Slot </button></a>
                                <?php 
                                            }
                                        }
                                ?>
                                <br>       <br>
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

<?php

    if(isset($_POST["submit"]))
    {
        header("location:slot.php?id=3");
    }
?>