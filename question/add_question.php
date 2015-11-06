<h1>Add Question</h1>

<form action="<?php echo BASE_URL . '?action=save_question'; ?>" method="post">
	
	<p>Question Title</p>

	<p>
		<input type="text" name="question_title" value="" />
	</p>

	<p>Question Desc</p>

	<p>		
		<textarea name="question_desc" rows="5" cols="40" ></textarea>
	</p>

	<p>
		
		<input class="btn btn-success" type="submit" value="Submit Form" />
		<a class="btn btn-primary" href="<?php echo BASE_URL . '?page=manage_question'; ?>">Go Back</a>

	</p>


</form>