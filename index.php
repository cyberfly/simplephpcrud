<?php 

include("config/config.php");
require_once (APP_FUNCTIONS_PATH. '/MysqliDb.php');

$db = new MysqliDb (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

session_start();

?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Simple Question Bank</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<script type="text/javascript" src="<?php echo BASE_URL . 'assets/jquery-1.11.3.min.js'; ?>"></script>
</head>
<body>
	<?php include(APP_BASE_PATH . "/template/header.php"); ?>
	<div id="content">
		<div id="right">
			
			<?php

			if (isset($_GET['page']) && $_GET['page']=='manage_question') {
				
				include(APP_BASE_PATH . "/question/manage_question.php");

			}

			if (isset($_GET['page']) && $_GET['page']=='add_question') {
				
				include(APP_BASE_PATH . "/question/add_question.php");

			}

			if (isset($_GET['action']) && $_GET['action']=='save_question') {
				
				include(APP_BASE_PATH . "/question/save_question.php");

			}

			if (isset($_GET['page']) && $_GET['page']=='edit_question') {
				
				$question_id = $_GET['id'];

				include(APP_BASE_PATH . "/question/edit_question.php");

			}

			if (isset($_GET['action']) && $_GET['action']=='update_question') {
				
				include(APP_BASE_PATH . "/question/update_question.php");

			}

			if (isset($_GET['action']) && $_GET['action']=='delete_question') {
				
				include(APP_BASE_PATH . "/question/delete_question.php");

			}

			?>			
		</div>

		<?php include(APP_BASE_PATH . "/template/sidebar.php"); ?>	

	</div>
</body>
</html>
<script type="text/javascript">
	
	$( document ).ready(function() {
	    
	    // letak code jQuery atau javascript di dalam ni

	    $( ".delete" ).click(function(e) {
	      
	    	e.preventDefault();

	    	var delete_url = $(this).attr('href');

	    	var choice = confirm("Delete this record?");

    		if (choice){
    			window.location = delete_url;
    		}
    		else{
    			return false;
    		}

	    	

	    });


	});

</script>