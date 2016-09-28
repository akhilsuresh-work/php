<?php
	
		$username =  $password = "";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$username = clean_input($_POST["username"]);
			$password = clean_input($_POST{"password"});
						echo $username;
						echo $password;

		}


		function clean_input($data){

			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}



?>