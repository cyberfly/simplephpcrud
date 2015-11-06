<h1 class="dark">Question List</h2>

<?php include(APP_BASE_PATH . "/template/notice.php"); ?>

<a href="<?php echo BASE_URL . '?page=add_question'; ?>" class="btn btn-primary">Click to Add Question</a>

<table cellspacing="0" class="" >

	<thead>
	
	<tr>
		<th>Question ID</th>
		<th>Title</th>
		<th>Description</th>
		<th>Action</th>

	</tr>

	</thead>

	<tbody>

	<?php	

	$questions = $db->get('tb_question');

	// var_dump($questions);

	// check if there is any question in the array

	if (!empty($questions)) {
		
		// loop through the array

		foreach ($questions as $key => $value) {

	?>

	<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['question_title']; ?></td>
		<td><?php echo $value['question_desc']; ?></td>
		<td>
			<a class="btn btn-primary" href="<?php echo BASE_URL . '?page=edit_question&id='.$value['id']; ?>">Edit</a>
			<a class="btn btn-danger delete" href="<?php echo BASE_URL . '?action=delete_question&id='.$value['id']; ?>">Delete</a>
		</td>
	</tr>

	<?php

		} //end foreach 

	} //end of not empty

	?>

	</tbody>


</table>

