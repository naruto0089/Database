	<?php
	

	
	$servername= "cs.okstate.edu";
	$username = "";
	$password = "";
	$databasename ="";




	

	session_start();
	$_SESSION ['servername']= $servername;
	$_SESSION ['username'] = $username;
	$_SESSION ['password'] = $password;
	$_SESSION ['databasename'] = $databasename;

	$connect = new mysqli( $servername, $username,$password,$databasename);


// Check connection
	if($connect->connect_errno) {
	    echo $connect->connect_error;
	  //  die("Some problem Occured");
	}
	else{
	  
	}



?>

