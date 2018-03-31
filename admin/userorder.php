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
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    </head>
    <body class="padTop53 " >
<div id="wrap">
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
                             <!-- <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online -->
                           
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
            


                <li class="panel ">
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
                <li class="panel active ">
                    <a href="userorder.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-shopping-cart"> </i> Orders 
       
                        <span class="pull-right">

                         <!-- <i class="icon-angle-left"></i>-->
                        </span>
                       &nbsp;
                    </a>
                </li>
                <li class="panel">
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
        <!--END MENU SECTION -->

        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">

                        <h2> Manage UserOrder </h2>

                    </div>
                </div>

                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            

                            <table class="table table-striped table-bordered table-hover" >
                            <tr>
                <th width="136" scope="col">OrderID</th>
                <th width="102" scope="col">User FullName</th>
                <th width="109" scope="col">ProductID</th>
                <th width="129" scope="col">Quantity</th>
                <th width="129" scope="col">Checkout</th>
                <th width="129" scope="col">Order Date</th>
                <th width="129" scope="col">Check Date</th>
                <th width="129" scope="col">Trans No</th>
                <th width="129" scope="col">Payment Type</th>
               
                
                
                                        </tr>
                                          </thead>
                               <tbody>
<?php
      
                 include "connect.php";
              $q="select * from userorder";
             // echo $q;
              $rs=mysqli_query($c,$q);

             while($row=mysqli_fetch_row($rs))
              {
                  
                $x=strstr($row[9],"upload");
                echo "<tr>
                      
                      <td>".$row[0]."</td>
                      <td>".$row[1]."</td>
                      <td>".$row[2]."</td>
                      <td>".$row[3]."</td>
                      <td>".$row[4]."</td>
                      <td>".$row[5]."</td>
                      <td>".$row[6]."</td>
                      <td>".$row[7]."</td>
                      <td>".$row[8]."</td>
              </tr>";
}
?>
</tbody>
</table>
</form>

    </div>

     <!--END MAIN WRAPPER -->

  
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
     <script src="js/productload.js"></script>
</body>
     <!-- END BODY -->
</html>
