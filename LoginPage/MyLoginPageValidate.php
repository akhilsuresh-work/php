<!DOCTYPE html>
<html>
<body>
	<?php
		$dbhost = 'localhost:3036';
   		$dbuser = 'akhil';
   		$dbpass = 'inapp';
		$dbname = "passVerification";



   			$conn = mysql_connect($dbhost, $dbuser, $dbpass);

   			if(!$conn) {

   				die("Connection failed: ").mysql_error();
	   			} else {

	   				echo "Connection Successfull...";
	   			}


   			/*$sql = 'CREATE DATABASE passVerification';
   			$status = mysql_query($sql, $conn);
 			if ($status){  			
   				echo "Database created successfully";
   			} else {
   				echo "Error creating database: ".mysql_error($conn);
   			}*/
			mysql_select_db($dbname);


   			//mysql_close($conn);

   			$sql = "CREATE TABLE Person (

   						id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   						firstname VARCHAR(30) NOT NULL,
   						lastname VARCHAR(30) NOT NULL,
   						email VARCHAR(30) NOT NULL,
   						password VARCHAR(30) NOT NULL)";
   			if (mysql_query($sql, $conn)){
   					echo "Table Person created";
   			} else {

   				echo "Error creating table: ".mysql_error($conn);
   			}	

   			mysql_close($conn);
   		
   	?>
   	</body>
 <html>