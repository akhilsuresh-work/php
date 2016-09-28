<?php

	$dbhost = 'localhost:3036';
   	$dbuser = 'akhil';
   	$dbpass = 'inapp';
   	$conn = mysql_connect($dbhost, $dbuser, $dbpass);

   	 if(! $conn ) {
      die('Could not connect: '. mysql_error());
   }

   echo 'Connected successfully';

  
  // $retmessg =mysql_query( $sql, $conn ); 
	
	
   mysql_close($conn);



?>