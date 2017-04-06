
<?php include('db1.php'); ?>

<?php

	//$id = $_GET['id'];
	//$table = $_GET['id1'];

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

	//echo $idfiled;
	//echo $_GET['id'];
	//echo $_GET['id1'];


	

	$query = " SELECT * FROM ". $_GET['id1'] ." WHERE ". $idfiled ." = ". $_GET['id'] ;


	echo $query.'<br>';

	$result2 = $connect->query($query) or die($connect->error.__LINE__);

		
	$row2 = $result2->fetch_all(MYSQLI_ASSOC);



	$values =array();
	$fields = array();
	$tes =0;


	$qry = "";




	foreach ($row2 as $key => $value1) {
		foreach ($row1 as $key => $value) {

			if($tes == 0){
				$tes = 1;
				continue;
			}


			$fields[] = $value['Field']; 

			//echo $value1[$value['Field']];

			$values[]  = mysql_real_escape_string($_POST[$value['Field']]);



			$qry .= $value['Field'] ." = '". $_POST[$value['Field']] ."', ";
			//echo $value['Field'].'<br>';

			//$lastName = mysql_real_escape_string($_POST['lastName']);

		}

	}
	
	echo $qry.'<br>';


	
	$app =  substr($qry,0,-2);

	//$data = db_build_insert($values,1);
	//$field = db_build_insert($fields,0);
	echo $app;
	//$q = update("tablename", $values, $my_wheres);

	$updat = "UPDATE ". $_GET['id1'] ." SET ". $app ." WHERE ". $idfiled ." = ".  $_GET['id'] ;

	echo $updat.'<br>';



	$result23 = $connect->query($updat) or die($connect->error);



	

	$location = "tblview.php?id=".$_GET['id1'];

	header('Location:'. $location);
	exit;
		






	
		
				  	
		

	?>


	
	












	