<?php include('Includes/userFunctions.php'); ?>
<?php $result = loginUser($_POST); ?>
<?php 
	if($result == "Logged In") {
		?>
			<script type="text/javascript">
				window.location = "Index.php";
			</script>
		<?php
	}
	else echo $result;
?>