<?php include("includes/headerTemplate.php") ?>
<?php include ("db1.php"); ?>


<?php 

	$id = $_GET['id'];
	$table = $_GET['id1'];

	//echo $id;
	//echo $table;

	$display1 = "SHOW COLUMNS FROM ".$_GET['id1'];

	//echo $display1;

	$result1 = $connect->query($display1) or die($connect->error);

	$row1 = $result1->fetch_all(MYSQLI_ASSOC);

	$chk =0;
	$idfiled = "";
	foreach ($row1 as $key => $value) {
	# code...
	if( $chk == 0){
		//echo $value['Field'];	
		$chk =1;
		$idfiled = $value['Field'];
		break;
		}
	}

	echo $idfiled;


			  	
	$query = "SELECT * FROM $table WHERE $idfiled = $id";

	$result2 = $connect->query($query) or die($connect->error.__LINE__);

	$row2 = $result2->fetch_all(MYSQLI_ASSOC);



?>

<div id="page-wrapper">
	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-group" id="accordion">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h2 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">  <?php echo $_GET['id1'] ?></a>
							</h2>
						</div><!-- End of Panel Heading -->


						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="panel panel-default"> <!-- Inner panel for form -->
									<div class="panel-body">



									<!---- FROM TO ADD RECORD -->

									   <form role="form"  method ="post" action ="tblupdate.php?id=<?php echo $_GET['id'] ; ?>&id1=<?php echo $_GET['id1'] ; ?>" >
									     <div class="col-xs-4">
									            <div class="form-group">

									            <?php



									             $flag = 0;

									            	foreach ($row2 as $key => $value1) {
									            		foreach ($row1 as $key => $value) {
									            			
									            				if($flag == 0){
									            					$flag =1;


									            				}else {?>

									            				<label for="lName"><?php echo $value['Field'] ; ?>:</label>
									            			   <input type="text" class="form-control"  name="<?php echo $value['Field']; ?>" value ="<?php echo $value1[$value['Field']]; ?>" required="true" autofocus="" >
									            			   <?php
									            			   }
									            			}

									           		 }
									            ?>

									           
									                </div>
									       			
									            <button type="submit" class="btn btn-primary" value="Create">Update</button>
									       </div>    
									     </form>
									                    
									         </div> <!-- End of inner panel body for form-->
									</div> <!-- end of inner panel for form -->     

									

									</div> <! -- end of inner panel-body div -->
								</div> <! -- end of inner panel div -->
							</div> <! -- end of outer panel-body div -->
						</div>  <! -- end of collapsable part  div -->
					</div> <! -- end of outer pane div -->
				</div> <! -- end of panel gorup div -->
			</div>	<! -- end of size div -->
		</div>  <! -- end of div-row div -->
	</div> <! -- end of container fluid div -->
</div> <! -- end of Wraper div -->



<?php include("includes/footerTemplate.php") ?>
