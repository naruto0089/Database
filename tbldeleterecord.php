<?php include('db1.php') ?>
<?php
	 


	 $display1 = "SHOW COLUMNS FROM ".$_GET['id1'];

	 //echo $display1;

	 //echo $id;
	 //echo $_GET['id1'];
	 
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



	   $droptable = "DELETE FROM ". $_GET['id1'] ." WHERE ". $idfiled ." = ". $_GET['id'] ;


            if($insert = $connect->query($droptable)){

                //print_r($result);

                //$rows = $result->fetch_assoc();
                //echo '<pre>',print_r($rows),'</pre>';
                //echo "inserted";
            }

            else{
                 die($connect->error);
                }


                
	$location = "tblview.php?id=".$_GET['id1'];

	header('Location:'. $location);
	exit;
      
?>