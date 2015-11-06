<?php

if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) {
	
?>

<div class="alert alert-success"><?php echo $_SESSION['success_message']; unset($_SESSION['success_message']); ?></div>

<?php } ?>

<?php

if (isset($_SESSION['error_message']) && !empty($_SESSION['error_message'])) {
	
?>

<div class="alert alert-danger"><?php echo $_SESSION['error_message']; unset($_SESSION['error_message']); ?></div>

<?php } ?>