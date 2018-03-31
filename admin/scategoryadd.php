<body class="padTop53 " >

                <div class="row" style="margin-left: 10px;margin-right: 10px">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h5><label>Add New SubCategory</label></h5> <!--<a href="addcat.php" class="btn btn-primary">Add Category</a>-->
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form action="scategoryadd.php" method="post" enctype="multipart/form-data">
                                <table class="table table-striped table-bordered table-hover" >
                             <thead>
<!--                                        <tr>-->
<!--                                            <th>SubCategory ID :</th>-->
<!--                                            <th><input type="text" name="subcat_id" class="form-control"></th>-->
<!--                                        </tr>-->
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>SubCategory Name :</th>
                                            <th><input type="text" name="subcat_name" class="form-control" ></th>
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
                                           
                                    <tr>
                                            <th>Image :</th>
                                            <th>
                                        <input type="file" name="image" id="file" accept="image" style="max-width: 200px; max-height: 150px; line-height: 20px;"></th>
                                           
                   
                                        </tr>
                                    </thead>
                                     <thead>
                                        <tr>
                                 <td align="left" colspan="2"><button type="submit" name="insert" class="btn btn-success" value="insert"><i class="icon-plus"></i>&nbsp;Add New SubCategory</button></td>
                              </tr>
                          </thead>
                        
                                
                                    
<?php

error_reporting(E_ERROR);
$subcat_id=$_POST["subcat_id"];
$subcat_name=$_POST["subcat_name"];
$cat_id = $_POST["cat_id"];

if(isset($_POST["insert"]))
{

 include "connect.php";

if (file_exists("upload/" . $_FILES["image"]["name"]))
    {
               echo $_FILES["image"]["name"] . " already exists. ";
    }
else
{
    move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
    $p="admin/upload/" . $_FILES["image"]["name"];
    echo "Stored in: " . "upload/" . $_FILES["image"]["name"];
    
    $q = "INSERT INTO subcategory(subcat_name,cat_id,image) VALUES ('$subcat_name','$cat_id' ,'$p')";

}
$rs = mysqli_query($c,$q);
header("location:scategory.php");
}


?>
 
</table>
                                   
                            </form>
                        
                  
                            
            
                                </div>
                        </div>
                    </div>
</div>
</div>
</body>
     <!-- END BODY -->
</html>