function myFunction(){

	alert("Link Working");
}




function validateForm()

{

	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	
	if (username.length == 0) 
		{
			document.getElementById('head').innerText = "* Please provide username *"; // This segment displays the validation rule for all fields
			return false;	
		}
	

	 check = inputAlphabet(username);

	 if(check == false){
	 	return false;
	 }



	if (password.length == 0) 
	{
		document.getElementById('head').innerText = "* Please provide password *"; // This segment displays the validation rule for all fields
		return false;	

	}

check2 = passwordcheck(password);

if (check2 == false){
	return false;
}

function inputAlphabet(inputtext){
	var alphaExp = /^[a-zA-Z ]+$/;
	if(inputtext.match(alphaExp)){
		return true;
	}else{
			document.getElementById('head').innerText =  "* For username please use alphabets only *";
			return false;
		}
}


function passwordcheck(inputtext){
		if(inputtext.length<8){
			document.getElementById('head').innerText = "* password length insufficient*";
			return false;	
		}
		else {
			return true;
		}
}

		
	if ((username != null || username != "") && (password != null || password != ""))
	{
		
		return true;
/*window.location = "http://localhost/GitLocal/MVC_PHP/model/passVerification.php"; // Redirecting to other page.
return false;*/
	}

// Decrementing by one.

}