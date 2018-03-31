<?php
session_start();
?>

<!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Data Tables</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
     
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   
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
            <div class="media user-media well-small" style="padding-left: 20px;padding-right: 
            20px;padding-bottom: 30px;padding-top: 30px">
               <a class="user-link" href="index.php">
                   <img  align = "center" class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/logo11.png" width="150" height="150" >
                </a>
        </div>
        <div id="left" style="padding-left: 15px" >
                <div class="media-body">
                    <h5 class="media-heading"><b style="color: green" align="left">Welcome:&nbsp;<?php error_reporting(E_ERROR);
echo $_SESSION["ad_name"];?></b></h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                            
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>


            <ul id="menu" class="collapse">

                   <li class="panel active">
                    <a href="index.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav" class = "panel active">
                        <i class="icon-th-large"> </i> DashBoard    
       
                        <span class="pull-right">

                         <!-- <i class="icon-angle-left"></i>-->
                        </span>
                       &nbsp;
                    </a>
                </li>
            



                <li >
                    <a href="category.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav" >
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
                <!-- <li class="panel ">
                    <a href="login1.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-signout"> </i> LogOut 
       
                        <span class="pull-right">

                          <i class="icon-angle-left"></i>
                        </span>
                       &nbsp;
                    </a>
                </li> -->
            </ul>

        </div>
       <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>DashBoard</h3>
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body">
                            <div class="table-responsive">
                        <div style="text-align: center">
                          
                            <a class="quick-btn" href="product.php">
                                <i class="icon-ok-sign icon-2x"></i>
                                <span> Products</span>
                                <span class="label label-danger"></span>
                            </a>
                           
                            <a class="quick-btn" href="manageuser.php">
                                <i class="icon-user icon-2x"></i>
                                <span>User</span>
                                <span class="label label-success"></span>
                            </a>
                          
                            <a class="quick-btn" href="category.php">
                                <i class="icon-list icon-2x"></i>
                                <span>Category</span>
                                <span class="label label-warning"></span>
                            </a>
                            
                            <a class="quick-btn" href="scategory.php">
                                <i class="icon-align-left icon-2x"></i>
                                <span>SubCategory</span>
                                <span class="label btn-metis-2"></span>
                            </a>
                         
                            <a class="quick-btn" href="userorder.php">
                                <i class="icon-shopping-cart icon-2x"></i>
                                <span>Orders</span>
                                <span class="label btn-metis-4"></span>
                            </a>
                           
                        </div>

                    </div>

                </div>

                  <hr/>

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
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script> 
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light1", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Kids Products"
    },
    axisY: {
        title: ""
    },
    data: [{        
        type: "column",  
        showInLegend: true, 
        legendMarkerColor: "grey",
        legendText: "",
        dataPoints: [      
            { y: 30, label: "Necklace" },
            { y: 26,  label: "Earrings" },
            { y: 16,  label: "Rings" },
            { y: 15,  label: "Braclete" },
            { y: 18,  label: "Chain" },
            { y: 18,  label: "Pendals" }
        ]
    }]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
