<?php 
include "connect.php";

$subcat_id = $_REQUEST['subcat_id'];

$sel = "SELECT * FROM subcategory 
where subcat_id='".$subcat_id."' ";

$result = mysqli_query($c,$sel);

while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $subcat_id = $row['subcat_id'];
    $subcat_name = $row['subcat_name'];
      $p = $row['image'];
}
  
?>
<body class="padTop53 " >

                <div class="row" style="margin-left: 10px;margin-right: 10px">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h5><label>Edit SubCategory</label></h5><!--<a href="addcat.php" class="btn btn-primary">Add Category</a>-->
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <form method="POST" action="sedit.php" enctype="multipart/form-data" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     
    
                                    <thead>
                                        <tr>
                                            <th>SubCategory Id:</th>
                                            <th><input type="text" class="form-control" name="subcat_id" value='<?php echo $subcat_id; ?>'></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                        <th>SubCategory Name:</th>
                                     <th><input type="text" class="form-control" name="subcat_name" value='<?php echo $subcat_name; ?>'></th>
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
                                            <th>image</th>
                                        <th><input type="file" name="image" id="file" value='<?php echo $p; ?>'></th>
                                        </tr>
                                    </thead>
                                      <thead>
                                        <tr>
                                            <td colspan="2"><input type="submit" value="Edit" name="edit" class="btn btn-primary">
                                             </td>
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

 $subcat_id=$_POST["subcat_id"];
 $subcat_name=$_POST["subcat_name"];
 $cat_id=$_POST["cat_id"];


move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
    $p="admin/upload/" . $_FILES["image"]["name"];
    echo "Stored in: " . "upload/" . $_FILES["image"]["name"];

$q = "UPDATE subcategory SET  subcat_name =  '$subcat_name',
cat_id =  '$cat_id', image = '$p' WHERE subcat_id ='$subcat_id'";
echo $q;  

$rs = mysqli_query($c,$q);
header("location:scategory.php");
}
?>
</form>
</div>
</div>
</div>
</body>
     <!-- END BODY -->
</html>
