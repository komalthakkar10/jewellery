<?php

	 include "connect.php";

	$p_id = $_GET["p_id"];
   
    $q = "DELETE FROM product WHERE p_id ='$p_id'";

  	mysqli_query($c,$q);

  	header("location:product.php");

?>