    <?php 
        include("db1.php");
    // $connect = new mysqli('cs.okstate.edu', 'asimn','Mother9841','asimn');


        if($_POST){
            //Get variables from post array
            //$sql =trim(preg_replace('/\s\s+/',' ', ''));
            $userquery =  mysql_real_escape_string($_POST['userquery']);

            if($insert = $connect->query($userquery)){

                //print_r($result);

                //$rows = $result->fetch_assoc();
                //echo '<pre>',print_r($rows),'</pre>';
                //echo "inserted";
            }

            else{
                 die($connect->error);
                }
                
            header("Location: dashboard.php");
      
        }
          
    ?>