<?php
    $phone=$_POST["phone"];

	if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/",$phone)){
	
		include("validephone.html"); 
	}		
	else {
		include("invalide.html");
	}
?>