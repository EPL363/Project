
<?php
if($_POST){
	$to_email = "akkous01@cs.ucy.ac.cy"; //Recipient email, Replace with own email here

	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		
		$output = json_encode(array( //create JSON data
			'type'=>'error', 
			'text' => 'Sorry Request must be Ajax POST'
		));
		die($output); //exit script outputting json data
    } 
	
	//Sanitize input data using PHP filter_var().
	$fname		= filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
	$femail		= filter_var($_POST["femail"], FILTER_SANITIZE_EMAIL);
	$fcompany	= filter_var($_POST["fcompany"], FILTER_SANITIZE_STRING);
   

	
	//additional php validation
	if(strlen($fname)<4){ // If length is less than 4 it will output JSON error.
		$output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
		die($output);
	}
	if(!filter_var($femail, FILTER_VALIDATE_EMAIL)){ //email validation
		$output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
		die($output);
	}
	if(strlen($fcompany)<4){ // If length is less than 4 it will output JSON error.
		$output = json_encode(array('type'=>'error', 'text' => 'Company is too short or empty!'));
		die($output);
	}
	
	//email body
	$message_body = "your password is:" ;
	
	//proceed with PHP email.
	$headers = 'From: '.$fname.'' . "\r\n" .
	'Reply-To: '.$femail.'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$subject='Password TEE';
	$send_mail = mail($femail, $subject, $message_body, $headers);
	
	if(!$send_mail)
	{
		//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
		$output = json_encode(array('type'=>'error', 'text' => 'Το μήνυμα δεν λεχει σταλεί. Παρακαλώ ξαναδωκιμάστε'));
		die($output);
	}else{
		$output = json_encode(array('type'=>'message', 'text' => ' Σας έχει σταλεί ο κωδικός σας στην διεύθυνση Ηλεκτρονικού Ταχυδρομείου που έχετε αναγράψει παραπάνω'));
		die($output);
	}
}
?>