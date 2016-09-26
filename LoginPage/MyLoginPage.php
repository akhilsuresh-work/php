<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8; encoding=utf-8" />
	</head>
	<body>


		<?php

			echo "You are seeing this just because you forgot the password. Do you need to change? <br>";
			echo "Password reset link has been sent your local pc.<br><br>";
			$filename = "Password.txt";
			$file = fopen($filename, "a");


			if ( $file == false) {

				echo ("Error in opening the file");
				exit();
			}
			else{
					echo "Writing Successfull";
			}

				$string = base64_encode("Password: What a fool??");
				echo $string;
				$string .= "\n";	
				fwrite($file,$string);
				//fputs()
				fclose($file);
			
			/*$to = "akhilsuresh.work@gmail.com";
			$subject = "Password reset link";

			$message = "<h1> Password reset link </h1> <br><br><hr>";
			$message .= "<p>This is a system generated mail. Please dont respond back to this.You can either click on thie link or copy paste the link to your browser window</p><br><br>";
			$message .= "<b>Password reset link:</b>"
			 $message .= "<a href = "http://localhost/PasswordResetLink.html">http://localhost/PasswordResetLink.html</a>;
			
			$header = "From:admin@aird.com \r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Content-type: text/html\r\n";

			$retval = mail ($to,$subject,$message,$header);

			if ($retval == true) {
				echo "Message sent successfully";
			}
			else {
				echo "Message could not be sent";
			}*/
			
		?>

	</body>
</html>