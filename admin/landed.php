<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Uncle D - Admin Dashboard </title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  
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
                                            <h1> Landed Properties</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section-body">
                                <div class="row">
                                    <div class="col-12">

                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Landed Properties</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Location</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        include '../connect.php';
                                                        $count=1;
                                                        $query=mysqli_query($mycon,"SELECT * FROM property where type='Landed'");
                                                        while($row=mysqli_fetch_array($query))
                                                        {
                                                            echo 
                                                            '
                                                            <tr>
                                                                <td>'.$count++.'</td>
                                                                <td>'.$row['title'].'</td>
                                                                <td><img height="55" width="65" src="photos/'.$row['banner'].'"></td>
                                                                <td>'.$row['location'].'</td>
                                                                <td><del>N</del> '.$row['price'].'</td>
                                                                <td><a href="deleteproperty.php?id='.$row['id'].'" class="btn btn-danger"><i class="fa fa-trash"></i></></td>
                                                            </tr>
                                                            ';
                                                        }

                                                    ?>
                                                
                                                    
                                                 
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
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
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="assets/bundles/jquery.sparkline.min.js"></script>
  
</body>

</html>