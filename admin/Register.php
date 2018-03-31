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
    <title>BCORE Admin Dashboard Template | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/plugins/magic/magic.css" />
     
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
       <!--  <img src="assets/img/a2.png" id="logoimg" alt=" Logo" /> -->
    </div>
  
     <div class="tab-content" >
        <div id="login" class="tab-pane active">
            <form action="Register.php" class="form-signin" method="POST" enctype="multipart/form-data">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Please Fill All Field To Reset Your Password
                </p>
<thead><tr><th>
                <input type="text" placeholder="Enter UserName" class="form-control" name = "ad_name" value='<?php error_reporting(0); echo $ad_name=$_GET["ad_name"]; ?>'/></th></tr></thead>
                <thead><tr><th>
                <input type="email" placeholder="Enter Email" class="form-control" name = "Email" value='<?php echo $Email=$_GET["Email"]; ?>'/></th></tr></thead>
                <thead><tr><th>
                <input type="password" placeholder="Password" class="form-control" name="password" value='<?php echo $password=$_GET["password"]; ?>' /></th></tr></thead>
                <thead><tr><th>
                <input class="btn text-muted text-center btn-danger" type="submit" name = "regi" value="Reset">
                <!--<a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a>-->
            </form>
        </div>
    
<?php
if(isset($_POST["regi"]))
{

 // $ad_id=$_POST["ad_id"];
 $ad_name=$_POST["ad_name"];
 $Email=$_POST["Email"];
 $password=$_POST["password"];
 
 include "connect.php";

$q = "UPDATE alogin SET ad_name = '$ad_name',password = '$password' WHERE Email = '$Email'";
echo $q;  

mysqli_query($c,$q);
header("location:login1.php");

}
?>
</form>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
