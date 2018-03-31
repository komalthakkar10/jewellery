<?php 
include "connect.php";

$cat_id = $_REQUEST['cat_id'];

$sel = "SELECT * FROM category 
where cat_id='".$cat_id."' ";

$result = mysqli_query($c,$sel);

while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $cat_id = $row['cat_id'];
    $cat_name = $row['cat_name'];
}
  
?>

<body class="padTop53 " >

                <div class="row" style="margin-left: 10px;margin-right: 10px">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h5><label>Edit Category</label></h5> <!--<a href="addcat.php" class="btn btn-primary">Add Category</a>-->
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <form method="POST" action="edit.php" enctype="multipart/form-data" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     
    
                                    <thead>
                                        <tr>
                                            <th>Category Id:</th>
                                            <th><input type="text" class="form-control" name="cat_id" 
                                                value='<?php echo $cat_id; ?>'></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                        <th>Category Name:</th>
                            <th><input type="text" name="cat_name" class="form-control" 
                                value='<?php echo $cat_name; ?>'></th>
                                        </tr>
                                    </thead>
                                      <thead>
                                        <tr>
                                            <th colspan="2"><input type="submit" value="Edit" name="edit" class="btn btn-primary btn-lm">
                                             </th>
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

 $cat_id=$_POST["cat_id"];
 $cat_name=$_POST["cat_name"];

 $q = "UPDATE category SET cat_name = '$cat_name' WHERE cat_id ='$cat_id'";
//echo $q;  

mysqli_query($c,$q);
header("location:category.php");
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
