<?php include('db1.php') ?>
<?php
	 $id = $_GET['id']; 

	   $droptable = "DROP TABLE $id";


            if($insert = $connect->query($droptable)){

                //print_r($result);

                //$rows = $result->fetch_assoc();
                //echo '<pre>',print_r($rows),'</pre>';
                //echo "inserted";
            }

            else{
                 die($connect->error);
                }


                

            header('Location: dashboard.php');
            exit;
      
?>