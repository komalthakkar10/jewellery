<?php
session_start();
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Data Tables</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                   <a href="" class="navbar-brand" style="color: gray">
                        <h4 style="font-family: cursive;">Live the moment with Artificial Jewellery.</h4>
                   <!-- <img src="assets/img/a2.png" alt="" />-->
                        </a>
                </header>
                <!-- END LOGO SECTION -->
               <ul class="nav navbar-top-links navbar-right">

                   <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                           
                            
                            <li><a href="login1.php" data-toggle="tooltip" data-placement="left" title="are you sure? you want to logout?"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



       <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
               <a class="user-link" href="#">
                   <img  align = "center" class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/a2.png" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"><b style="color: green">Welcome:<?php error_reporting(E_ERROR);
echo $_SESSION["ad_name"];?></b></h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>


            <ul id="menu" class="collapse">

                   <li class="panel ">
                    <a href="index.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-th-large"> </i> DashBoard    
       
                        <span class="pull-right">

                         <!-- <i class="icon-angle-left"></i>-->
                        </span>
                       &nbsp;
                    </a>
                </li>
            



                <li class="panel active">
                    <a href="category.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav" class = "panel active">
                        <i class="icon-list"> </i> Category 
                         <span class="pull-right">

                         <!-- <i class="icon-angle-left"></i>-->
                        </span>  
                        </a> 
                    </li>
<li class="panel">
                    <a href="scategory.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class=" icon-align-left"> </i> SubCategory 
       
                        <span class="pull-right">

                         <!-- <i class="icon-angle-left"></i>-->
                        </span>
                       &nbsp;
                    </a>
                  
                </li>
<li class="panel">
                    <a href="product.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-ok-sign"> </i> Product 
       
                        <span class="pull-right">

                         <!-- <i class="icon-angle-left"></i>-->
                        </span>
                       &nbsp;
                    </a>
                  
                </li>

               <li class="panel ">
                    <a href="banner.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-check-empty"> </i> Banner 
       
                        <span class="pull-right">

                         <!-- <i class="icon-angle-left"></i>-->
                        </span>
                       &nbsp;
                    </a>
                </li>
                <li class="panel ">
                    <a href="cpassword.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-exchange"> </i> Change Password 
       
                        <span class="pull-right">

                         <!-- <i class="icon-angle-left"></i>-->
                        </span>
                       &nbsp;
                    </a>
                </li>
                 <li class="panel ">
                    <a href="userorder.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-shopping-cart"> </i> Orders 
       
                        <span class="pull-right">

                         <!-- <i class="icon-angle-left"></i>-->
                        </span>
                       &nbsp;
                    </a>
                </li>
                <li class="panel ">
                    <a href="manageuser.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-user"> </i> Manage User 
       
                        <span class="pull-right">

                         <!-- <i class="icon-angle-left"></i>-->
                        </span>
                       &nbsp;
                    </a>
                </li>
                <li class="panel ">
                    <a href="login1.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-signout"> </i> LogOut 
       
                        <span class="pull-right">

                         <!-- <i class="icon-angle-left"></i>-->
                        </span>
                       &nbsp;
                    </a>
                </li>
            </ul>

        </div>
       <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h3> TABLE INFORMATION </h3>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                            <div class="table-responsive">
                        <div style="text-align: center">
                           -------------
                            <a class="quick-btn" href="product.php">
                                <i class="icon-ok-sign icon-2x"></i>
                                <span> Products</span>
                                <span class="label label-danger"></span>
                            </a>
                            -------------
                            <a class="quick-btn" href="manageuser.php">
                                <i class="icon-user icon-2x"></i>
                                <span>User</span>
                                <span class="label label-success"></span>
                            </a>
                            -------------
                            <a class="quick-btn" href="category.php">
                                <i class="icon-list icon-2x"></i>
                                <span>Category</span>
                                <span class="label label-warning"></span>
                            </a>
                            -------------
                            <a class="quick-btn" href="scategory.php">
                                <i class="icon-align-left icon-2x"></i>
                                <span>SubCategory</span>
                                <span class="label btn-metis-2"></span>
                            </a>
                            -------------
                            <a class="quick-btn" href="userorder.php">
                                <i class="icon-shopping-cart icon-2x"></i>
                                <span>Orders</span>
                                <span class="label btn-metis-4"></span>
                            </a>
                            -------------
                        </div>

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                            <div class="table-responsive">
                            
							
                            <table class="table table-striped table-bordered table-hover" >
                            <thead>
                            <tr>
                			  <th>Table_No</th>
                                            <th >Table_Name</th>
                                            <th >Description</th>
                      		</tr>
                            </thead>
                            <thead>
                            <tr class="success">
                            <th>1</th>
                            <th>alogin</th>
                            <th>Description</th>
                            </tr>
                            </thead>
                            <thead>
                            <tr class="info">
                            <th>2</th>
                            <th>Category</th>
                            <th>Description</th>
                            </tr>
                            </thead>
                            	<thead>
                                        <tr class="warning">
                                            <th>3</th>
                                            <th>SubCategory</th>
                                            <th>Description</th>
                                        </tr>

                                        </thead>
                                        	<thead>
                                        <tr class="danger">
                                             <th>4</th>
                                            <th>Product</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        	<thead>
                                        <tr class="success">
                                            <th>5</th>
                                            <th>Cart</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        	<thead>
                                        <tr class="info">
                                             <th>6</th>
                                            <th>Wishlist</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        	<thead>
                                        <tr class="warning">
                                          <th>7</th>
                                            <th>Userorder</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        	<thead>
                                        <tr class="danger">
                                            <th>8</th>
                                            <th>User</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        	<thead>
                                         <tr class="success">
                                            <th>9</th>
                                            <th>Banner</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        	<thead>
                                        <tr class="info">
                                              <th>10</th>
                                            <th>Brand</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                               
</table>
    </div>
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
     <!-- END BODY -->
</html>
