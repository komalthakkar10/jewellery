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
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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
            <form action="forgot.php" class="form-signin" method="POST">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Please Enter your email address
                </p>
                <input type="email" placeholder="Enter Email" class="form-control" name = "Email"/><br>
               
                <input class="btn text-muted text-center btn-danger" type="submit" name = "submit" value="Submit">
               
            </form>
        </div>
        
      
   <!--  <div class="text-center">
        <ul class="list-inline">
          <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li></li>
          <li><a href="forgot.php" data-toggle="tab">Forgot Password</a></li>
        </ul>
    </div>
    --> 


    <?php
        include "connect.php";
        
        if(isset($_POST["submit"]))
        {

        $Email=$_POST["Email"];
    

        $q="select * from alogin where Email='$Email'";

        $rs=mysqli_query($c,$q);
        $count=mysqli_num_rows($rs);
        if($count==1)
        {
          $_SESSION["Email"]=$_POST["Email"];
          header("location:Register.php");
        }
        else
        {

          echo "<script>alert('please check email address')</script>";;
        }
        
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
