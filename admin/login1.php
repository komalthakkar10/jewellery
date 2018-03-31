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
        <!-- <img src="assets/img/logo11.png" id="logoimg" alt=" Logo" width="100" height="100" > -->
    </div>
  
    <div class="tab-content" >
        <div id="login" class="tab-pane active">
            <form action="login1.php" class="form-signin" method="POST">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Admin Login
                </p>

                <input type="text" placeholder="Username" class="form-control" name = "ad_name">
                <input type="password" placeholder="Password" class="form-control" name="password" />
               <button class="btn text-muted text-center btn-success" type="submit" name="login">Sign in</button>
                &nbsp;&nbsp;&nbsp;<a class="text-muted" href="#forgot" data-toggle="tab" style="color:blue">Forgot Password</a>
            </form>
        </div>

         <?php
        include "connect.php";
        
        if(isset($_POST["login"]))
        {

        $ad_name=$_POST["ad_name"];
        $password=$_POST["password"];

        $q="select * from alogin where ad_name='$ad_name' and password='$password'";

        $rs=mysqli_query($c,$q);
        $count=mysqli_num_rows($rs);
        if($count==1)
        {
          $_SESSION["ad_name"]=$_POST["ad_name"];
          header("location:index.php");
        }
        else
        {

          echo "<script>alert('please check username and password')</script>";;
        }
        
      }
      
?>
        <div id="forgot" class="tab-pane">
            <form action="forgot.php" class="form-signin" method="POST">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
                <input type="email" name="Email" required="required" placeholder="Your E-mail"  class="form-control" />
                <br />
                <button class="btn text-muted text-center btn-success" type="submit" name="submit">Recover Password</button>
            </form>
        </div>
 <?php
        include "connect.php";
        if(isset($_POST["submit"]))
        {

        $Email=$_POST["Email"];
       // $password=$_POST["password"];

        $q="select * from alogin where Email='$Email'";

        $rs=mysqli_query($c,$q);
        $count=mysqli_num_rows($rs);
        if($count==1)
        {
          $_SESSION["email"]=$_POST["email"];
          header("location:changepass.php");
        }
        else
        {

          echo "<script>alert('please check username and password')</script>";
        }
        
      }
      
?>

  <div id="signup" class="tab-pane">
            <form action="forgot.php" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Enter Your Email Address to Login </p>
                <input type="text" name = "ad_name" placeholder="Username" class="form-control" />
                <input type="email" name = "email" placeholder="Your E-mail" class="form-control" />
                <input type="password" name = "password" placeholder="password" class="form-control" />
               
                <br>
                <button class="btn text-muted text-center btn-success" type="Register">Submit</button>
            </form>
        </div>
    <!--<div class="text-center">
        <ul class="list-inline">
          <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li></li>
          <li><a href="forgot.php" data-toggle="tab">Forgot Password</a></li>
        </ul>
    </div>-->
<div class="text-center">
        <ul class="list-inline">
         <!-- <li><a href="login1.php">login</a></li>-->
   <li></li>
</ul>
    </div>

</div>

     
    </form>
  
	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/js/login.js"></script>
 

</body>
    <!-- END BODY -->
</html>
