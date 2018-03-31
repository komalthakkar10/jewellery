<?php 

include "connect.php";

$banner_id = $_REQUEST['banner_id'];

$sel = "SELECT * FROM banner 
where banner_id='".$banner_id."' ";

$result = mysqli_query($c,$sel);

while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) 
{
 $banner_id=$row["banner_id"];
 $banner_title=$row["banner_title"];
 $banner_subtitle=$row["banner_subtitle"];
     }
  
?>

<body class="padTop53 " >
                <div class="row" style="margin-left: 10px;margin-right: 10px">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h5><label>Edit Banner</label></h5><!--<a href="addcat.php" class="btn btn-primary">Add Category</a>-->
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <form method="POST" action="banneredit.php" enctype="multipart/form-data" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     
    
                                    <thead>
                                        <tr>
                                            <th>Banner Id:</th>
                                            <th><input type="text" name="banner_id" class="form-control" value='<?php echo $banner_id; ?>'></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                        <th>Banner Title:</th>
                            <th><input type="text" class="form-control" name="banner_title" value='<?php echo $banner_title; ?>'></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                        <th>Banner SubTitle:</th>
                            <th><input type="text" class="form-control" name="banner_subtitle" value='<?php echo $banner_subtitle; ?>'></th>
                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                                        <th>Image</th>
                                        <th><image src='<?php echo $_GET["image"];?>'></image>
                            <input type="file" name="image"  id = "file" value='<?php echo $image; ?>'></th>
                                        </tr>
                                    </thead>
                                      <thead>
                                        <tr>
                                            <th colspan="2"><input type="submit" value="edit" name="edit" class="btn btn-primary">
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
     $banner_id=$_POST["banner_id"];
 $banner_title=$_POST["banner_title"];
 $banner_subtitle=$_POST["banner_subtitle"];
 


move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
    $p="admin/upload/" . $_FILES["image"]["name"];
    echo "Stored in: " . "upload/" . $_FILES["image"]["name"];


$q = "UPDATE banner SET banner_title = '$banner_title', banner_subtitle = '$banner_subtitle',image = '$image' WHERE banner_id ='$banner_id'";
echo $q;  

$rs = mysqli_query($c,$q);
header("location:banner.php");
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
