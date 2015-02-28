<meta charset="utf-8">
<?php
if($_POST){
	$to_email = "epapak02@cs.ucy.ac.cy"; //Recipient email, Replace with own email here

	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		
		$output = json_encode(array( //create JSON data
			'type'=>'error', 
			'text' => 'Sorry Request must be Ajax POST'
		));
		die($output); //exit script outputting json data
    } 
	
	//Sanitize input data using PHP filter_var().
	$Reason		= filter_var($_POST["Reason"], FILTER_SANITIZE_STRING);
	$companyName		= filter_var($_POST["companyName"], FILTER_SANITIZE_STRING);
   

	
	//additional php validation
	if(strlen($Reason)<4){ // If length is less than 4 it will output JSON error.
		$output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
		die($output);
	}
	if(strlen($companyName)<4){ // If length is less than 4 it will output JSON error.
		$output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
		die($output);
	}
	
	//email body
	$message_body = "Ο λόγος που μασ ώθησε σε αλλαγές είναι:".$Reason ;
	
	//proceed with PHP email.
	$headers = 'From: '.$companyName.'' . "\r\n" .
	'Reply-To: '.'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$subject='Reason For Changes';
	$send_mail = mail($to_email, $subject, $message_body, $headers);
	
	if(!$send_mail)
	{
		//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
		$output = json_encode(array('type'=>'error', 'text' => 'Το μήνυμα δεν εχει σταλεί. Παρακαλώ ξαναδωκιμάστε'));
		die($output);
	}else{
		$output = json_encode(array('type'=>'message', 'text' => ' Το μήνημά σας έχει σταλεί Επιτυχώς '));
		die($output);
	}
}
?>