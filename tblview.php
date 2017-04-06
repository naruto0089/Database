<?php include("includes/headerTemplate.php"); ?>
<?php include ("db1.php"); ?>


<?php
 $id = $_GET['id'];

 //echo $id;

 $display1 = "SHOW COLUMNS FROM ".$id;

 $result1 = $connect->query($display1) or die($connect->error);


 foreach ($row1 as $key => $value) {
	# code...
	if( $chk == 0){
		//echo $value['Field'];	
		$chk =1;
		$idfiled = $value['Field'];
		break;
	}
}

//print_r($result);


$row1 = $result1->fetch_all(MYSQLI_ASSOC);

//getting the id field here i'm supposing first column is id field
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


?>





<?php

//$fields = $row1['Field'];


 $id = $_GET['id'];

$display2 = "SELECT * FROM ".$id;

echo $display2;

$result2 = $connect->query($display2) or die($connect->error);

//$row2 = $result2->fetch_assoc();



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
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> <?php echo $_GET['id'] ; ?></a>
							</h2>
						</div><!-- End of Panel Heading -->

						
						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="panel panel-default"> <!-- Inner panel for form -->
									<div class="panel-body">


									<div class="panel panel-default"> <!-- Inner panel for Table -->
									 <h2>Content of Table</h2>
									     <div class="panel-body">
									     <div class="table-responsive"> 

									     <!-- Dispaly TABLE -->

									    <table class="table">
									   
									       <thead>
									          <tr>
									        <?php
									         //$head = array();
									         if($result1->num_rows > 0){
									         	foreach ($row1 as $row) {
									         		$headings ='<th>'.$row['Field'].'</th>';
									         		//$head .=$headings;

									         		echo  $headings;
									         	}
									        
									         }


									        ?>
									        
									        </tr> 
									       </thead>
									         
									           
									           <tbody>
									  
									             <?php
									               //check if atleast one row is found
									               if($result2->num_rows > 0){
									                 // loop
									               	

									                 while ($row2 = $result2->fetch_assoc()) {

									                 	$output  = '<tr>';

									                 	if($result1->num_rows > 0){

									                 		foreach ($row1 as $row) {

									                 		$output .='<td>'.$row2[$row['Field']].'</td>';
									                 	}
									                 }

									                 $output .='<td> <a href ="tbledit.php?id='.$row2[$idfiled].'&id1='.$id.'" class ="btn btn-info">Edit</td>';
									                 $output .='<td> <a href ="tbldeleterecord.php?id='.$row2[$idfiled].'&id1='.$id.'" class ="btn btn-danger">Delete</td>';

									                  	$output .='</tr>';

									                  	echo $output;
									                  	//echo '<pre>',print_r($row),'<pre>';

									                  }

									               }else{
									                 echo "no data";
									               }
									              ?>

									         </tbody>
									       </table>







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

