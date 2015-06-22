<?php include('Includes/userFunctions.php'); ?>
<?php $result = submitUser($_POST); 
	if($result == "New record created successfully") {
		?>
			<script type="text/javascript">
				window.location="Login.php";
			</script>
		<?php
	}
	else {
		echo $result;
	}
?>