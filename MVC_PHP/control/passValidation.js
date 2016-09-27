function myFunction(){

	alert("Link Working");
}




function validateForm()

{

	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;


	function userfieldempty(){
	if (username.length == 0) 
		{
			document.getElementById('head').innerText = "* Please provide username *"; // This segment displays the validation rule for all fields
			return false;	

		}
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




function inputAlphabet(inputtext){
	var alphaExp = /^[a-zA-Z]+$/;
	if(inputtext.match(alphaExp)){
		return true;
	}else{
			document.getElementById('head').innerText =  "* For username please use alphabets only *";
			return false;
		}
}












		
	if ( (username != null || username != "") && (password != null || password != ""))
	{
		alert ("Login successfully");
		return true;
/*window.location = "http://localhost/GitLocal/MVC_PHP/model/passVerification.php"; // Redirecting to other page.
return false;*/
	}

// Decrementing by one.

}