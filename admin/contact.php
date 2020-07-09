<?php
    include '../connect.php';

    $query_news=mysqli_query($mycon,"SELECT * FROM posts");
    $news=mysqli_num_rows($query_news);

    $query_landed=mysqli_query($mycon,"SELECT * FROM property where type='Landed'");
    $landed=mysqli_num_rows($query_landed);

    $query_land=mysqli_query($mycon,"SELECT * FROM property where type='Land'");
    $land=mysqli_num_rows($query_land);

    $query_contact=mysqli_query($mycon,"SELECT * FROM contact ");
    $contact=mysqli_num_rows($query_contact);
?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Uncle D - Admin Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="assets/bundles/flag-icon-css/css/flag-icon.min.css">
  <!-- Custom style CSS -->
  
  <link rel='shortcut icon' type='image/x-icon' href='../images/logo.png' />
  
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <?php include 'header.php'; include 'sidebar.php'?>


                    <!-- main content -->

                    <div class="main-content">
                        <section class="section">
                             <div class="section-header">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="section-header-breadcrumb-content">
                                            <h1>Contact us</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="section-title">Messages</h2>
                                <div class="row">
                                    <?php 
                                        include '../connect.php';
                                        $query=mysqli_query($mycon,"SELECT * FROM contact");
                                        while($row=mysqli_fetch_array($query))
                                        {

                                            echo 

                                            '<div class="col-12 col-md-6 col-lg-4">
                                                <div class="card card-success">
                                                    <div class="card-header">
                                                        <h4>Subject: '.$row['subject'].'</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <p> <b>Message</b> : '.$row['message'].'</p>
                                                        <p><b>Phone</b> : '.$row['phone'].'</p>
                                                        <p><b>Email</b> : '.$row['email'].'</p>
                                                        <p><b>Date</b> : '.$row['date'].'</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            ';

                                        }
                                    ?>
                                    
                                   
                                </div>
                                                
                            
                          
                        
                        </section>
                         
                    </div>
                    <!-- end main content -->



            <?php include 'footer.php' ?>
        </div>
    </div>


<!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/echart/echarts.js"></script>
  
  <!-- <script src="assets/bundles/chartjs/chart.min.js"></script> -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/bundles/jquery.sparkline.min.js"></script>
  
</body>

</html>