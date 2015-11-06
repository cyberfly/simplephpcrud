<?php

$redirect = BASE_URL . '?page=manage_question';

if (isset($_POST) && !empty($_POST)) {	
	
	$question_title = $_POST['question_title'];
	$question_desc = $_POST['question_desc'];

	$error_count = 0;
	$error_message = 'No record inserted.';

	if (empty($question_title)) {
		$error_count++;
		$error_message .= ' Question title empty.';
	}

	if (empty($question_desc)) {
		$error_count++;
		$error_message .= ' Question desc empty.';
	}	

	if ($error_count>0) {
		$_SESSION['error_message'] = $error_message;
		header('Location: '.$redirect);
	}
	else
	{
		$data = array (
		    	'question_title' => $question_title,
		    	'question_desc' => $question_desc
		    	);

		$id = $db->insert ('tb_question', $data);

		if ($id)
		{
		    $_SESSION['success_message'] = 'The records have been sucessfully inserted';
		}
		else
		{
	 		$_SESSION['error_message'] = $db->getLastError();
	 	}

	 	header('Location: '.$redirect);
	}

	
}
else
{
	$_SESSION['error_message'] = 'No record inserted';
	header('Location: '.$redirect);
}


?>