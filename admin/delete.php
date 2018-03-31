<?php

 include "connect.php";

	$cat_id = $_GET["cat_id"];
   
    $q = "DELETE FROM category WHERE cat_id ='$cat_id'";

  	mysqli_query($c,$q);

  	header("location:category.php");

?>