<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Uncle D Properties - Property and Real Estate Management">
    <meta name="keywords" content="home, house, apartment, agents, business, properties, real estate, real estate agent, residence, single house, single property, villa, rent, land, sell">


    <!-- Title -->
    <title> Uncle D real Estate Properties - Blog Details</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/logo.png">



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
					<h2>Blog - Detail</h2>
				</div>
			</div>			
		</div>
		<!-- Page Banner End -->
						
		<!-- Blog Start -->
		<section class="blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						
						<!-- Blog Classic Start -->
						<div class="blog-grid">
							<div class="row">
								<div class="col-md-12">
									
										<?php  
											include 'connect.php';
											$id=$_GET['id'];
											$query=mysqli_query($mycon,"SELECT * FROM posts where id='$id'");
											$row=mysqli_fetch_array($query);
											

										?>
									<!-- Post Item Start -->
									<div class="post-item">
										<div class="image-holder">
											<img class="img-responsive" src="admin/photos/<?php echo $row['image'] ?>" alt="">
											
										</div>
										
										<div class="text">
											<h3><?php echo $row['title'] ?></h3>
											<ul class="status">
												<li><i class="fa fa-user"></i>Author: <a href=""><?php echo $row['poster'] ?></a></li>
												<li>-</li>
												<li><i class="fa fa-calendar"></i><a href=""><?php echo $row['fulldate'] ?></a></li>
												
											</ul>
											<p>
											<?php echo $row['content'] ?>
											</p>
										</div>
									</div>
									<!-- Post Item End -->

								</div>

							</div>
						</div>
						<!-- Blog Classic End -->
						


					</div>
					<div class="col-md-offset-1 col-md-3">
						
						<!-- Sidebar Container Start -->
						<div class="sidebar">
							
							<div class="widget">
								<h4>Recent Posts</h4>
								<ul>
								<?php  
									
									$query=mysqli_query($mycon,"SELECT * FROM posts order by rand() limit 20");
									while($row=mysqli_fetch_array($query))
									{
										echo 
										'
										<li><a href="blog-single.php?id='.$row['id'].'">'.$row['title'].'</a></li>
										';
									}
									

								?>
								</ul>
							</div>
							
						</div>
						<!-- Sidebar Container End -->
					
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
