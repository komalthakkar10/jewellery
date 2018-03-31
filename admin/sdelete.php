<?php

 include "connect.php";

	$subcat_id = $_GET["subcat_id"];
   
    $q = "DELETE FROM subcategory WHERE subcat_id ='$subcat_id'";

  	mysqli_query($c,$q);

  	header("location:scategory.php");

?>