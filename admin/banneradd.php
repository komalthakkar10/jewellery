<body class="padTop53 " >

                <div class="row" style="margin-left: 10px;margin-right: 10px">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h5><label>Add New Banner</label></h5> 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form action="banneradd.php" method="post" enctype="multipart/form-data">
                                <table class="table table-striped table-bordered table-hover" >
                             <thead>
<!--                                        <tr>-->
<!--                                            <th>Banner ID :</th>-->
<!--                                            <th><input type="text" name="banner_id" class="form-control"></th>-->
<!--                                        </tr>-->
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>Banner Title:</th>
                                            <th><input type="text" name="banner_title" class="form-control"></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>Banner SubTitle :</th>
                                            <th><input type="text" name="banner_subtitle" class="form-control"></th>
                                           
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>Image :</th>
                                            <th><input type="file" name="image" id="file"></th>
                                        </tr>
                                    </thead>
                                     <thead>
                                        <tr>
                                 <td align="left" colspan="2"><button type="submit" name="insert" class="btn btn-success" value="insert"><i class="icon-plus"></i>&nbsp;Add New banner</button></td>


                              </tr>
                          </thead>
                        
                                
                                    
<?php
error_reporting(E_ERROR);
//$banner_id=$_POST["banner_id"];
$banner_title=$_POST["banner_title"];
$banner_subtitle = $_POST["banner_subtitle"];

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
    
    $q = " INSERT INTO banner VALUES ( '$banner_title','$banner_subtitle' ,'$p')";

}

$rs = mysqli_query($c,$q);

header("location:banner.php");
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