<?php

$redirect = BASE_URL . '?page=manage_question';

if (isset($_GET['id']) && !empty($_GET['id'])) {	
	
	$question_id = $_GET['id'];

	$db->where ('id', $question_id);

	$result = $db->delete  ('tb_question', $data);

	if ($result)
	{
	    $_SESSION['success_message'] = 'The records have been sucessfully deleted';
	}
	else
	{
 		$_SESSION['error_message'] = $db->getLastError();
 	}

 	header('Location: '.$redirect);
	
}
else
{
	$_SESSION['error_message'] = 'No record was deleted';
	header('Location: '.$redirect);
}


?>