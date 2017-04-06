<?php include ("db1.php"); ?>


<?php
//fuction to return value in array as query

  function db_build_insert($table,$array,$test1)
  {

    // $str = "insert into $table ";
     $str ="";

     $strn = "(";
     //$strv = " VALUES (";
     $strv = "(";
     while(list($name,$value) = each($array)) {

         if(is_bool($value)) {
                  $strn .= "$name,";
                  $strv .= ($value ? "true":"false") . ",";
                  continue;
          };

         if(is_string($value)) {
                  $strn .= "$name,";
                  if($test1 == 1){
                    $strv .= "$value,";
                  }else{
                     $strv .= "'$value',";
                  }
                 
                  continue;
          }
         if (!is_null($value) and ($value != "")) {
                  $strn .= "$name,";
                  $strv .= "$value,";
                  continue;
         }
     }
     $strn[strlen($strn)-1] = ')';
     $strv[strlen($strv)-1] = ')';
     $str .=  $strv;
     return $str;

  }
?>



<?php

  if($_POST){

  //for fields

   $display1 = "SHOW COLUMNS FROM ".$_GET['id'];

   //echo $display1;

   $result1 = $connect->query($display1) or die($connect->error);



  $row1 = $result1->fetch_all(MYSQLI_ASSOC);



  //geting id field
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



  if($idfiled['Key'] == 'MUL'){
    
  echo "asdf";

    $location = "tblview.php?id=".$_GET['id'];
    header('Location: '.$location);
    exit;

  }


  $fields = array();
  $test =0;
  foreach ($row1 as $key ) {
    if($test == 0){
      $test = 1;
      continue;
    }

   $fields[] = $key['Field'];

  } //end of foreach


  //echo '<pre>',print_r($row1),'</pre>';

  $fld = db_build_insert("asf",$fields,1);  //getting list of fields
  //echo $fld;  




   foreach ($row1 as $key) {
          $data[] = $key['Field'];
    }
      
  //echo $row1['Field'];
    // echo $data[0];

  //echo $_POST[$row1['Field']];

  //echo '<pre>',print_r($row1),'</pre>';

      $value = array();
      for( $i =1; $i<=sizeof($data);$i++){
         $value[] =  $_POST[$data[$i]];
      }

    //  echo sizeof($value);
    //for ($i=0;$i<sizeof($value);$i++){
      //echo $value[$i].'<br \>';
    //}

  //insertArr( $_GET['id'], $value);

  $aaa = db_build_insert("asf",$value,2);  // gettings values

  //echo  $aaa;




$queryinsert = "INSERT INTO ".$_GET['id'] .$fld. " VALUES " .$aaa;



    //  echo $_POST[$row1['Field']];$data = array();
     }

     if($insert = $connect->query($queryinsert)){

         //print_r($result);

         //$rows = $result->fetch_assoc();
         //echo '<pre>',print_r($rows),'</pre>';
         //echo "inserted";
     }

     else{
          die($connect->error);
         }


    $location = "tbladdrecords.php?id=".$_GET['id'];


  header('Location: '.$location);
  exit;
?>

   