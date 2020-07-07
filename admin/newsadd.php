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
  <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
  
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
                                            <h1>Add News</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4> Add to news</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Title</label>
                                                <div class="col-sm-12 col-md-9">
                                                    <input type="text" class="form-control" required name="title">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Banner</label>
                                                <div class="col-sm-12 col-md-9">
                                                    <input type="file" class="form-control-file" required name="image">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Content</label>
                                                <div class="col-sm-12 col-md-9">
                                                    <textarea class="summernote" required name="content"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Poster</label>
                                                <div class="col-sm-12 col-md-9">
                                                    <input type="text" class="form-control" required name="poster">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2"></label>
                                                <div class="col-sm-12 col-md-7">
                                                    <button type="submit" name="addNews" class="btn btn-success">Upload News</button>
                                                </div>

                                                <?php 
                                                     include '../connect.php';
                                                     if(isset($_POST['addNews']))
                                                     {
                                                        $title=$_POST['title'];
                                                        $poster=$_POST['poster'];
                                                        $content=addslashes($_POST['content']);
                                                        $rand=rand(1000,9999);
                                                        $image=$rand.$_FILES['image']['name'];
                                                        $imageext = substr($image,strlen($image)-5,strlen($image));
                                                        $newimage=md5($image).$imageext;
                                                        
                                                        $addn=mysqli_query($mycon,"INSERT INTO posts values('','$title','$content','$newimage','$poster','',now())");
                                                            
         
                                                        if($addn)
                                                        {
                                                            move_uploaded_file($_FILES['image']['tmp_name'],"photos/".$newimage);
                                                            echo '<script>swal("Done!", "News has been uploaded ", "success");</script>'; 
                                                        }
                                                        else
                                                        {
                                                            echo mysqli_error($addn);
                                                        }
                                                        
                                                         
                                                          
                                                     }
                                                ?>
                                            </div></form>
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
  <script src="assets/bundles/summernote/summernote-bs4.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/sweetalert.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="assets/bundles/jquery.sparkline.min.js"></script>
  
</body>

</html>