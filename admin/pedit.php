<?php 
include "connect.php";

$p_id = $_REQUEST['p_id'];

$sel = "SELECT * FROM product 
where p_id='".$p_id."' ";

$result = mysqli_query($c,$sel);

while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

   $p_id=$row["p_id"];
 $p_name=$row["p_name"];
 $cat_id=$row["cat_id"];
   $subcat_id=$row["subcat_id"];
    $description=$row["description"];
     $price=$row["price"];
     $rprice=$row["rprice"];
      $hipings_charge=$row["hipings_charge"];
       $p_stock=$row["p_stock"];
        $brand_id=$row["brand_id"];
      $p = $row['image'];
}
  
?>


<body class="padTop53 " >

                <div class="row" style="margin-left: 10px;margin-right: 5px">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h5><label>Edit Product</label></h5> <!--<a href="addcat.php" class="btn btn-primary">Add Category</a>-->
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <form method="POST" action="pedit.php" enctype="multipart/form-data" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     
    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                        <th><input type="text" name="p_id" value='<?php echo $p_id; ?>' class="form-control"></th>
                                        </tr>
                                    </thead>
                                   <thead>
                                        <tr>
                                            <th>Product Name:</th>
                                        <th><input type="text" name="p_name" value='<?php echo $p_name; ?>' class="form-control"></th>
                                        </tr>
                                    </thead>
                                   <thead>
                                        <tr>
                                    <th>Category Name:</th>
                                     <th> <select name=cat_id class="form-control">
                                 <option value="">-- Select Category -- </option>
                                <?php
                                    include "connect.php";

                                    $q="select * from category";
              
                                    $rs=mysqli_query($c,$q);   
                                    while($row=mysqli_fetch_row($rs))
                                    {
                                    echo "<option value=".$row[0].">".$row[1]." </option>";
                                     }  
                                 ?>
                             </select></th>
                                        </tr>
                                    </thead>
                       <thead>
                                        <tr>
                                        <th>SubCategory ID:</th>
                                     <th> <select name=subcat_id class="form-control">
                                 <option value="">-- Select SubCategory -- </option>
                                <?php
                                     include "connect.php";
                                    $q="select * from subcategory";
              
                                    $rs=mysqli_query($c,$q);   
                                    while($row=mysqli_fetch_row($rs))
                                    {
                                    echo "<option value=".$row[0].">".$row[1]." </option>";
                                     }  
                                 ?>
                             </select></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>Description:</th>
                                        <th><input type="text" name="description" value='<?php echo $description; ?>' class="form-control"></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>Price:</th>
                                        <th><input type="text" name="price" value='<?php echo $price; ?>' class="form-control"></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>RetailPrice:</th>
                                        <th><input type="text" name="rprice" value='<?php echo $rprice; ?>' class="form-control"></th>
                                        </tr>
                                    </thead>
                                   <thead>
                                        <tr>
                                            <th>Shipping Charge:</th>
                                        <th><input type="text" name="hipings_charge" value='<?php echo $hipings_charge; ?>' class="form-control"></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>Product Stock:</th>
                                        <th><input type="text" name="p_stock" value='<?php echo $p_stock; ?>' class="form-control"></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                     <tr>
                                     <th>Brand ID:</th>
                                     <th><input type="text" name="brand_id" class="form-control" value='<?php echo $brand_id; ?>' class="form-control" ></th>
                                     </tr>
                                      </thead>
                                      <thead>
                                     <tr>
                                     <th>image</th>
                                        <th><input type="file" name="image" id="file" value='<?php echo $image; ?>' class="form-control"></th>                                
                                    </tr>
                                     </thead>
                                      <thead>
                                        <tr>
                                            <th colspan="2"><input type="submit" value="Edit" name="edit" class="btn btn-primary"></th>
                                        </tr>
                                         </thead>
                                    </tbody>
                                </table>
                                </div>
                        </div>
                    </div>
                           
<?php

if(isset($_POST["edit"]))
{

 $p_id=$_POST["p_id"];
 $p_name=$_POST["p_name"];
 $cat_id=$_POST["cat_id"];
   $subcat_id=$_POST["subcat_id"];
    $description=$_POST["description"];
     $price=$_POST["price"];
     $rprice=$_POST["rprice"];
      $hipings_charge=$_POST["hipings_charge"];
       $p_stock=$_POST["p_stock"];
        $brand_id=$_POST["brand_id"];


move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
    $p="admin/upload/" . $_FILES["image"]["name"];
    echo "Stored in: " . "upload/" . $_FILES["image"]["name"];


$q = "UPDATE product SET p_name = '$p_name',cat_id =  '$cat_id',subcat_id = '$subcat_id',description =  '$description',price =  '$price',rprice =  '$rprice',hipings_charge =  '$hipings_charge',p_stock =  '$p_stock',brand_id =  '$brand_id',image =  '$p' WHERE  p_id = '$p_id'";
//echo $q;  

$rs = mysqli_query($c,$q);
header("location:product.php");
}
?>
</form>
</div>
</div>


    </div>

     <!--END MAIN WRAPPER -->

  
</body>
     <!-- END BODY -->
</html>
