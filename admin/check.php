<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard | Modern Admin</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
    <script type="text/javascript" src="../../ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/blend/jquery.blend.js"></script>
  <script type="text/javascript" src="js/ui.core.js"></script>
  <script type="text/javascript" src="js/ui.sortable.js"></script>    
    <script type="text/javascript" src="js/ui.dialog.js"></script>
    <script type="text/javascript" src="js/ui.datepicker.js"></script>
    <script type="text/javascript" src="js/effects.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.pack.js"></script>
    <!--[if IE]>
    <script language="javascript" type="text/javascript" src="js/flot/excanvas.pack.js"></script>
    <![endif]-->
  <!--[if IE 6]>
  <link rel="stylesheet" type="text/css" href="css/iefix.css" />
  <script src="js/pngfix.js"></script>
    <script>
        DD_belatedPNG.fix('#menu ul li a span span');
    </script>        
    <![endif]-->
    <script id="source" language="javascript" type="text/javascript" src="js/graphs.js"></script>

</head>
<?php 
include "header.php";

?>

    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
    <div class="portlet">
        
    <div class="portlet-content nopadding"><br/><br/>
<body>
<h1> Change Password</h1>
<form method="POST" action="cpassword.php">
<center><table border=3>
<tr>
<td>Old Password</td>
<td><input type="password" name="oldpass"></td>
</tr>
<tr>
<td>New Password</td>
<td><input type="password" name="newpass"></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" name="confirmpass"></td>
</tr>

<tr>
<td align="center"><input type="submit" name="submit" value="submit" class="btn btn-primary">
<input type="submit" name="Cancle" value="Cancle" class="btn btn-primary"></td></tr>
</table></center>
<?php
      $c=mysql_connect("localhost","root","");
         mysql_select_db("city1");

if(isset($_POST["submit"]))
{
   $oldpass=$_POST["oldpass"];
   $newpass=$_POST["newpass"];
   $confirmpass=$_POST["confirmpass"];
  // $changpass=$_POST["changpass"];

$q="select * from adminlogin where Uname='ami' and Password='".$oldpass."'";
//echo $q;
$rs=mysql_query($q);
$recc=mysql_num_rows($rs);
  if($recc==1)
  {
    if($newpass==$confirmpass)
    {
    $up="update adminlogin set Password='$newpass' where Uname='ami'";
    mysql_query($up);
    }
    else
    {
    echo "check the password";
    }
  }
  else
  {
  echo "check your old password";
  }
//header("location:changepassword.php");
}

  
?>
</form>
</body>
</html> 