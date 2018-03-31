<?php

	 include "connect.php";

	$order_id = $_GET["order_id"];
   
    $q = "DELETE FROM userorder WHERE order_id ='$order_id'";

  	mysqli_query($c,$q);

  	header("location:userorder.php");

?>