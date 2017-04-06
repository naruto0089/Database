
<?php 
session_start();
define("TITLE", "Home | C-star ");
include("includes/headerTemplate.php");
include("db1.php");
//include("db.php");
?>

<?php
 $query = "Show tables";

     //get result

   $result = $connect->query($query) or die($connect->error.__LINE__);

?>


<div id="page-wrapper">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">

                <h2>Overview</h2>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                         <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Current Working Databases</a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                         <form class="form-inline" method="post" action="db.php">

                                    <div class="form-group">
                                        <label for="servername">Server Name: </label>
                                        <input type="text"class="form-control" name="servername" Value ="cs.okstate.edu" required = "true" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="serverusername">Server Username: </label>
                                        <input type="text"class="form-control" name="username" Value ="<?php echo $_SESSION['username']; ?>" required = "true"  readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label for="dbname">Server Password: </label>
                                        <input type="password"class="form-control" name="password" Value="<?php echo $_SESSION['password']; ?>" required = "true" readonly/>
                                    </div>

                                    <div class="form-group">
                                        <label for="dbname">Database Name:</label>
                                        <input type="text"class="form-control" name="databasename" Value=" <?php echo $_SESSION['databasename']; ?> " placeholder="< your database name >" required = "true" readonly>
                                    </div>
                                    
                                        <button type="submit" class="btn btn-info" disabled>
                                            <span class="glyphicon "></span> Select
                                        </button>
                                    </div>
                                    
                            </form>
                     </div>
                 </div>
             </div>

             <!--- List of Tables -->

             <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">List of Tables in Current Working Database</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body">
                 
               
                  <div class="table-responsive">
                    <table class=" table">
                      <tr>
                        
                      </tr>
                      <tbody class="col-xs-4">
                      <!-- Displaying tables -->
                      
                      

                       <?php
                        //check if atleast one row is found
                       $field ='Tables_in_'. $_SESSION['databasename'];
                       
                        if($result->num_rows > 0){
                          // loop
                          while ($row = $result->fetch_assoc()) {
                              //display
                            $output  = '<tr>';
                            $output .='<td scope="row"><h4><a href="viewtableproperties.php?id='.$row[$field].' ">'.$row[$field].'</a></h4></td>';
                            $output .='<td> <a href ="viewtableproperties.php?id='.$row[ $field].' " class ="btn btn-info">View Property</td>';
                            $output .='<td> <a href ="tblview.php?id='.$row[$field].'" class ="btn btn-success">View</td>';
                            $output .='<td> <a href ="tbladdrecords.php?id='.$row[$field].'" class ="btn btn-warning">Add Record</td>';
                            $output .='<td> <a href ="tbldelete.php?id='.$row[$field].'" class ="btn btn-danger">Delete</td>';
                            $output .='</tr>';

                            echo $output;
                          }

                        }else{
                          echo "no data";
                        }
                   
                       ?>
                       </tbody>
                      </table>

                  </div>
                    
                 </div>
             </div>
             </div>
         </div>
     </div>



     <div class="panel panel-primary">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Query</a>
        </h4>
        </div>
     <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
         <form method="post" action="querycreate.php">
           <div class="form-group col-xs-4">
             
             <textarea class="form-control" rows="5" id="comment" name="userquery" placeholder="<Enter Your query <display has not been implemented yet>"></textarea>
             <button type="submit" class="btn btn-primary btn-block">Submit Query</button>
           </div>
         </form>

        </div>
    </div>
    </div>


<?php include("includes/footerTemplate.php")?>
