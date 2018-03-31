<body class="padTop53 " >

                <div class="row" style="margin-left: 10px;margin-right: 10px">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h5><label>Add New Product</label></h5> <!--<a href="addcat.php" class="btn btn-primary">Add Category</a>-->
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form action="productadd.php" method="POST" enctype="multipart/form-data">
                            <table class="table table-striped table-bordered table-hover" >
                             <thead>
<!--                                <tr>-->
<!--                                    <th>Product ID:</th>-->
<!--                                    <th><input type="text" name = "p_id" class="form-control"></th>-->
<!--                                </tr>-->
                                </thead>
                                <thead>
                                <th>Product Name:</th>
                                <th><input type = "text" name = "p_name" class="form-control"></th></tr>
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
                            <tr><th>Description:</th>
                                <th><input type = "text" name = "description" class="form-control"></th></tr>
                        </thead>  
                        
                        <thead>
                            <tr><th>Price:</th>
                                <th><input type = "text" name = "price" class="form-control"></th></tr>
                        </thead>  
                        <thead>
                            <tr><th>Retail Price:</th>
                                <th><input type = "text" name = "rprice" class="form-control"></th></tr>
                        </thead>  
                        
                        <thead>
                            <tr><th>Shipping Charge:</th>
                                <th><input type = "text" name = "hipings_charge" class="form-control"></th></tr>
                        </thead>  
                        <thead>
                            <tr><th>Product Stock:</th>
                                <th><input type = "text" name = "p_stock" class="form-control"></th></tr>
                        </thead>  
                        
                        <thead>
                            <tr><th>Brand ID:</th>
                                <th><input type = "text" name = "brand_id" class="form-control"></th></tr>
                        </thead>  
                        <thead>
                            <tr><th>Image:</th>
                                <th><input type="file" name="image" id="file" accept="image"></th></tr>
                        </thead>
                         <thead>
                            <tr>

                            <td align="left" colspan="2"><button type="submit" name="save" class="btn btn-success" ><i class="icon-plus"></i>&nbsp;Add New product</button></td>

                        </td></tr>
                        </thead>  
                                                 
                                
                                    
<?php

//$p_id=$_POST["p_id"];
$p_name=$_POST["p_name"];
$cat_id = $_POST["cat_id"];
$subcat_id = $_POST["subcat_id"];
$description = $_POST["description"];
$price = $_POST["price"];
$rprice = $_POST["rprice"];
$hipings_charge = $_POST["hipings_charge"];
$p_stock = $_POST["p_stock"];
$brand_id = $_POST["brand_id"];



if(isset($_POST["save"]))
{

include "connect.php";

if (file_exists("upload/" . $_FILES["image"]["name"]))
    {
               echo $_FILES["image"]["name"] . "  ";
    }
else


{
    move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
    $p="admin/upload/" . $_FILES["image"]["name"];
    echo "Stored in: " . "upload/" . $_FILES["image"]["name"];
    
    $q = "INSERT INTO product(p_name,cat_id,subcat_id,description,price,rprice,hipings_charge,p_stock,brand_id,p) VALUES ('$p_name','$cat_id' ,'$subcat_id','$description','$price','$rprice','$hipings_charge','$p_stock','$brand_id','$p')";

}

$rs = mysqli_query($c,$q);
    

header("location:product.php");
}


?>



                          </div>
                        </div>
                    </div>
</div>
</div>

    </div>

     <!--END MAIN WRAPPER -->

  
</body>
     <!-- END BODY -->
</html>