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
                                            <h1>Dashboard</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="card card-sales-widget bg-success">
                                            <div class="card-icon shadow-primary bg-blue">
                                            <i class="fas fa-comment-alt"></i>
                                            </div>
                                            <div class="card-wrap pull-right">
                                            <div class="card-header">
                                                <h3>1,437</h3>
                                                <h4>News Uploaded</h4>
                                            </div>
                                            </div>
                                            <div class="card-chart">
                                            <div id="chart-1"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="card card-sales-widget bg-success">
                                            <div class="card-icon shadow-primary bg-warning">
                                            <i class="fas fa-home"></i>
                                            </div>
                                            <div class="card-wrap pull-right">
                                            <div class="card-header">
                                                <h3>2,021</h3>
                                                <h4> House Properties</h4>
                                            </div>
                                            </div>
                                            <div class="card-chart">
                                            <div id="chart-2"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="card card-sales-widget bg-success">
                                            <div class="card-icon shadow-primary bg-hibiscus">
                                            <i class="fas fa-landmark"></i>
                                            </div>
                                            <div class="card-wrap pull-right">
                                            <div class="card-header">
                                                <h3>5,124</h3>
                                                <h4> Land Properties</h4>
                                            </div>
                                            </div>
                                            <div class="card-chart">
                                            <div id="chart-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="card card-sales-widget bg-success">
                                            <div class="card-icon shadow-primary bg-hibiscus">
                                            <i class="fas fa-landmark"></i>
                                            </div>
                                            <div class="card-wrap pull-right">
                                            <div class="card-header">
                                                <h3>5</h3>
                                                <h4>  Contact us message</h4>
                                            </div>
                                            </div>
                                            <div class="card-chart">
                                            <div id="chart-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
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