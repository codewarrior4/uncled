<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Uncle D Properties - Property and Real Estate Management">
    <meta name="keywords" content="home, house, apartment, agents, business, properties, real estate, real estate agent, residence, single house, single property, villa, rent, land, sell">


    <!-- Title -->
    <title> Uncle D real Estate Properties - Blog</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/log.png">



    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/superfish.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/spacing.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body>

    <div id="preloader">
        <div id="status"></div>
    </div>

    <div class="page-wrapper">

        <!-- Top Bar Start -->
        <?php include 'header.php' ?>
        <!-- Header End -->

      <!-- Page Banner Start -->
      <div class="slide-single slide-single-page">
            <div class="overlay"></div>
            <div class="text text-page">
                <div class="this-item">
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
        <!-- Page Banner End -->
        <!-- Blog Start -->
        <section class="blog">
            <div class="container">
                <div class="row">
                    <div class=" col-md-offset-2 col-md-8">

                        <!-- Blog Classic Start -->
                        <div class="blog-grid">
                            <div class="row">
                                <div class="col-md-12">

                                        <?php   
                                            include 'connect.php';
                                            if (isset($_GET['pageno']))
                                            {
                                            $pageno = $_GET['pageno'];
                                            }
                                            else 
                                            {
                                            $pageno = 1;
                                            }

                                            // sets number of page here 
                                            $no_of_records_per_page = 10;
                                            $offset = ($pageno-1) * $no_of_records_per_page;
                                            $total_pages_sql = "SELECT COUNT(*) FROM posts";
                                            $result = mysqli_query($mycon,$total_pages_sql);
                                            $total_rows = mysqli_fetch_array($result)[0];
                                            $total_pages = ceil($total_rows / $no_of_records_per_page);

											
											$query=mysqli_query($mycon,"SELECT * FROM posts order by id desc limit $offset, $no_of_records_per_page ");
											while($row=mysqli_fetch_array($query))
											{
                                                $content=strip_tags($row['content']);


                                                echo 
                                                '
                                                  <div class="post-item">
                                                        <div class="image-holder">
                                                            <img class="img-responsive" src="admin/photos/'.$row['image'].'" alt="">
                                                            
                                                        </div>
                                                        <div class="text">
                                                            <h3><a href="blog-single.php?id='.$row['id'].'">'.$row['title'].'</a></h3>
                                                            <ul class="status">
                                                                <li><i class="fa fa-user"></i>Author: <a href="#"> '.$row['poster'].'</a></li>
                                                                <li>-</li>
                                                                <li><i class="fa fa-calendar"></i> '.$row['fulldate'].'</li>
                                                            </ul>
                                                            <p> '.implode(' ', array_slice(explode(' ', $content), 0, 40)).'...</p>
                                                            <p class="button">
                                                                <a href="blog-single.php?id='.$row['id'].'">Read More</a>
                                                            </p>
                                                        </div>
                                                    </div>


                                                ';
                                            }

										?>
                                    <!-- Post Item Start -->
                                   
                                    <!-- Post Item End -->

                                  


                                </div>

                              <center>
                              <div class="col-md-12">
                                    <div class="pagination">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item " style="margin-right: 5px;;"><a class="page-link"  href="?pageno=1" title="First">1</a></li>
                                        <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; }?>">
                                        <a title="Next" class="page-link"href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">&raquo;</a>
                                        </li>
                                        <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                        <a title="Previous" class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">&laquo;</a>
                                        </li>
                                        <li class="page-item">
                                        <a class="page-link" title="End" href="?pageno=<?php echo $total_pages; ?>">End</a>
                                        </ul>
                                    </div>
                                </div>
                              </center>

                            </div>
                        </div>
                        <!-- Blog Classic End -->

                    </div>
                   




                </div>
            </div>
        </section>
        <!-- Blog End -->

        <!--Our Partner End-->
         <!-- Appointment Start -->
         <div class="appointment-v1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="left">
                            <p>You can book an appointment with Our Company.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="right">
                            <a href="contact.php">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->

        <!-- Footer Main Start -->
        <?php include 'footer.php'?>



        <a href="#" class="scrollup">
            <i class="fa fa-angle-up"></i>
        </a>

    </div>


    <!-- Scripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.animate.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
