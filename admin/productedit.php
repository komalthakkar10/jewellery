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
                    </a>
</li>
<li class="panel ">
                    <a href="scategory.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav" class = "panel active">
                        <i class=" icon-align-left"> </i> SubCategory    
                    </a>
</li>
<li class="panel active">
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
                    <a href="manageuser.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-shopping-cart"> </i> Orders 
       
                        <span class="pull-right">

                         <!-- <i class="icon-angle-left"></i>-->
                        </span>
                       &nbsp;
                    </a>
                </li>
                <li class="panel ">
                    <a href="userorder.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
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
                        <h2> Edit SubCategory </h2>
                    </div>
                </div>

                <hr />
  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <!--<a href="addcat.php" class="btn btn-primary">Add Category</a>-->
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <form method="POST" action="productedit.php" enctype="multipart/form-data" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     
                                     <thead>
                                    <tr>
                                     <th>Product Id:</th>
                                     <th><input type="text" name="p_id" class="form-control" value='<?php echo $p_id=$_GET["p_id"]; ?>'></th>
                                     </tr>
                                      </thead>

                                       <thead>
                                     <tr>
                                     <th>product Name:</th>
                                     <th><input type="text" name="p_name" class="form-control" value='<?php echo $p_name=$_GET["p_name"]; ?>'></th>
                                     </tr>
                                      </thead>

                                       <thead>
                                     <tr>
                                     <th>Category name:</th>
                                     <th><select name=cat_id class="form-control">
                                 <option value="">-- Select Category -- </option>
                                    <?php
                                    mysql_connect("localhost","root","");
                                        mysql_select_db("jewells");

                                    $q="select * from category";
              
                                    $rs=mysql_query($q);   
                                    while($row=mysql_fetch_row($rs))
                                    {
                                    echo "<option value=".$row[0].">".$row[1]." </option>";
                                     }  
                                    ?>
                                     </select></th>
                                     </tr>
                                      </thead>

                                       <thead>
                                     <tr>
                                     <th>SubCategory Name:</th>
                                     <th>
                                      <select name=subcat_id class="form-control">
                                        <option value="">-- Select SubCategory -- </option>
                                    <?php
                                    include "connect.php";

                                    $q="select * from subcategory";
              
                                    $rs=mysqli_query($c,$q);   
                                    while($row=mysqli_fetch_row($rs))
                                    {
                                    echo "<option value=".$row[0].">".$row[1]." </option>";
                                     }  
                                     ?>
                                     </select></th>
                                     </tr>
                                      </thead>

                                    <thead>
                                     <tr>
                                     <th>Description:</th>
                                     <th><input type="text" name="description" class="form-control" value='<?php echo $description=$_GET["description"]; ?>'></th>
                                     </tr>
                                      </thead>

                                    <thead>
                                     <tr>
                                     <th>Price:</th>
                                     <th><input type="text" name="price" class="form-control" value='<?php echo $price=$_GET["price"]; ?>'></th>
                                     </tr>
                                      </thead>

                                    <thead>
                                     <tr>
                                     <th>RetailPrice:</th>
                                     <th><input type="text" name="rprice" class="form-control" value='<?php echo $rprice=$_GET["rprice"]; ?>'></th>
                                     </tr>
                                      </thead>

                                    <thead>
                                     <tr>
                                     <th>Shipping Cahrge:</th>
                                     <th><input type="text" name="hipings_charge" class="form-control" value='<?php echo $hipings_charge=$_GET["hipings_charge"]; ?>'></th>
                                     </tr>
                                      </thead>

                                    <thead>
                                      <tr>
                                     <th>product stock:</th>
                                     <th><input type="text" name="p_stock" class="form-control" value='<?php echo $p_stock=$_GET["p_stock"]; ?>'></th>
                                     </tr>
                                     </thead>

                                     <thead>
                                     <tr>
                                     <th>Brand ID:</th>
                                     <th><input type="text" name="brand_id" class="form-control" value='<?php echo $brand_id=$_GET["brand_id"]; ?>'></th>
                                     </tr>
                                      </thead>

                                     <thead>
                                     <tr>
                                     <th>image</th>
                                        <th><input type="file" name="image" id="file" value='<?php echo $image=$_GET["image"]; ?>'></th>                                
                                    </tr>
                                     </thead>

                                         <thead>
                                        <tr>
                                            <th colspan="2"><input type="submit" value="Edit" name="edit" class="btn btn-primary"></th>
                                        </tr>
                                         </thead>

                                   </table>
                                </div>
                        </div>
                    </div>

<?php

if(isset($_POST["edit"]))
{

 $p_id=$_POST["p_id"];
 $p_name=$_POST["p_name"];
 $cat_id=$_POST["cat_id"];
   $subcat_id=$_POST["subcat_id"];
    $description=$_POST["description"];
     $price=$_POST["price"];
     $rprice=$_POST["rprice"];
      $hipings_charge=$_POST["shiping_charge"];
       $p_stock=$_POST["p_stock"];
        $brand_id=$_POST["brand_id"];
 
// $image=$_POST["image"];

 include "connect.php";
 
move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
    $p="admin/upload/" . $_FILES["image"]["name"];
    echo "Stored in: " . "upload/" . $_FILES["image"]["name"];

$q = "UPDATE product SET p_name = '$p_name',cat_id =  '$cat_id',subcat_id = '$subcat_id',description =  '$description',price =  '$price',rprice =  '$rprice',hipings_charge =  '$hipings_charge',p_stock =  '$p_stock',brand_id =  '$brand_id',image =  '$p' WHERE  p_id = '$p_id'";
echo $q;  

$rs = mysqli_query($c,$q);
header("location:product.php");
}
?>
</form>
</div>
</div>

    </div>

     <!--END MAIN WRAPPER -->

  
</body>
     <!-- END BODY -->
</html>

