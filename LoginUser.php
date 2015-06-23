<?php include('Includes/userFunctions.php'); ?>
<?php $result = loginUser($_POST); ?>
<?php 
	if($result == "Logged In") {
		?>
			<script type="text/javascript">
				window.location = "index.php";
			</script>
		<?php
	}
	else echo $result;
?>