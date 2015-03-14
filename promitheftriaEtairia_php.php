
<?php
if($_POST){

		$output = json_encode(array('type'=>'message', 'text' => ' Το μήνημά σας έχει σταλεί Επιτυχώς '));
		die($output);
	}
}

?>