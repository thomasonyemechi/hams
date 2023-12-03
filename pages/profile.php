<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="https://w3crm.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
    <!-- PAGE TITLE HERE -->
	<title>Index Page</title>
    <?php include('styles.php') ?>

    </head>

    <body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">
    <!--**********************************
        Nav header start
    ***********************************-->
  <?php include('nav.php') ?>
    <!--**********************************
        Nav header end
    ***********************************-->
    <!--**********************************
        Header start
    ***********************************-->
   <?php include('header.php') ?>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
      <?php include('sidebar.php') ?>	
    <!--**********************************
        Sidebar end
    ***********************************-->
    
    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
    <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Student</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Update Profile</a></li>
					</ol>
                </div>
        <!-- row -->	
        <div class="container-fluid">
        <div class="row">
					<div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Full name</label>
                                                <input type="text" class="form-control" placeholder="First Name">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Matric_number</label>
                                                <input type="text" class="form-control" placeholder="Matric_number">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>Phone No.</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Department</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label class="form-label">Level</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label class="form-label">Gender</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
    </div>
</div>
</div>
    
    <!--**********************************
        Content body end
    ***********************************-->
	
    
    <!--**********************************
        Footer start
    ***********************************-->
    <?php include('footer.php') ?>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->
    
    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<?php include('scripts.php') ?>

</body>
</html>