<body class="padTop53 " >

                <div class="row" style="margin-left: 10px;margin-right: 10px">
                <div class="col-lg-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h5><label>Add New Category</label></h5> <!--<a href="addcat.php" class="btn btn-primary">Add Category</a>-->
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <form action="categoryadd.php" method="post">
                            <label>Category Name:</label><br>
                            <input type = "text" name = "cat_name" class="form-control">
                            <p class="help-block">Enter text here.</p>
                            <br>
                              <button type="submit" name="insert" class="btn btn-success" value="insert"><i class="icon-plus"></i>&nbsp;Add New Category</button>
                                   
                                </table>
                        
                    <br>
                            
                                            
     <?php

          
if(isset($_POST["insert"]))
{


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

// $cat_id=$_POST["cat_id"];
// $cat_name=$_POST["cat_name"];
 
include "connect.php";

    $cat_name=$_POST["cat_name"];

  $q = "INSERT INTO category(cat_name) VALUES('$cat_name')";
  $rs = mysqli_query($c,$q);


 
 header("location:category.php");
}
    ?>
           </form>              
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