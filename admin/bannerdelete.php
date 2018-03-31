<?php

	include "connect.php";
	$banner_id = $_GET["banner_id"];
   
    $q = "DELETE FROM banner WHERE banner_id ='$banner_id'";

  	mysqli_query($c,$q);

  	header("location:banner.php");

?>