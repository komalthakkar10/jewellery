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

 <div id="signup" class="tab-pane">
            <form action="login1.php" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Enter Your Email Address to Login </p>
                <input type="password" name="password" class="form-control" placeholder="Password" />
                <input type="password" name="confirmpass" class="form-control" placeholder="Conform Password" />
                
                <br>
                <button class="btn text-muted text-center btn-success" type="insert" name = "Register">Submit</button>
 <?php
     include "connect.php";

if(isset($_POST["insert"]))
{
   
   $password=$_POST["password"];
   $confirmpass=$_POST["confirmpass"];
  // $changpass=$_POST["changpass"];

$q="select * from alogin where ad_name='Ami' and password='$password'";
//echo $q;
$rs=mysqli_query($c,$q);
$recc=mysqli_num_rows($rs);
    if($recc==1)
    {
        if($password==$confirmpass)
        {
        $up="update alogin set password='$password' where ad_name='Ami'";
        mysqli_query($up);
        }
        else
        {
        echo "plz check your username";
        }
    }
    else
    {
    echo "Enter password";
    }
//header("location:changepassword.php");
}

  
?>



            </form>
        </div>
    </body>
        </html>
    