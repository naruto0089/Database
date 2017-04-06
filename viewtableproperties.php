<?php include("includes/headerTemplate.php") ?>
<?php include('db1.php');
?>

<?php
 $id = $_GET['id'];

 //echo $id;

 $display = "SHOW COLUMNS FROM ".$id;

//echo $display;

$result = $connect->query($display) or die($connect->error);

//print_r($result);

//$row = $result->fetch_assoc();

//echo $row['Field'];

 
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
                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Properties of table <?php echo $_GET['id'] ; ?></a>
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
                    <table class="table-condensed">
                      <thead>
                      <tr>
                          <th>Field</th>
                          <th>Type</th>
                          <th>NULL</th>
                          <th>Key</th>
                          <th>Default</th>
                          <th>Extra</th>
                        
                      <!-- <th>&nbsp;</th>
                        <th>&nbsp;</th>  -->
                       
                      </tr>
                      </thead>
                      <tbody>


                      <?php
                        //check if atleast one row is found
                        if($result->num_rows > 0){
                          // loop
                          while ($row = $result->fetch_assoc()) {

                           	$output  = '<tr>';
                           	//$output .='<td scope="row">'.$row[''].'</td>';
                           	$output .='<td>'.$row['Field'].'</td>';
                           	$output .='<td>'.$row['Type'].'</td>';
                           	$output .='<td>'.$row['Null'].'</td>';
                           	$output .='<td>'.$row['Key'].'</td>';
                           	$output .='<td>'.$row['Default'].'</td>';
                           	$output .='<td>'.$row['Extra'].'</td>';
                           /*	$output .='<td> <a href ="edit.php?id='.$row['staffId'].'" class ="btn btn-info">Edit</td>';
                           	$output .='<td> <a href ="delete.php?id='.$row['staffId'].'" class ="btn btn-danger">Delete</td>'; */
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
                  </div> <!--- end of  responsive table -->
                  </div>
                  </div> <!-- end of table inner pannel -->

<?php include("includes/footerTemplate.php")?>