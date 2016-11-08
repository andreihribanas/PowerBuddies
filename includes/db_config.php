<?php


error_reporting(E_ALL); 
ini_set('log_errors','1'); 
ini_set('display_errors','0'); 
	
	$host = "localhost";
	$username = "root";
	$pass = "1234";
	$db = "test";


	$con = new mysqli($host, $username, $pass, $db);
    
$query = "SELECT * from staff";

    $result = $con->query($query);

  
	
	if (!$con) {
		echo "Unable to connect: " + mysql_error;
	}


while ($row = mysqli_fetch_array($result)) {
//    echo $row["staff_name"] . "<br>";   
    
}


?>