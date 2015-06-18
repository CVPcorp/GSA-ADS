<?php include("/Includes/fdaApi.php"); ?>
<?php $results = searchApi($_POST["SearchTerm"]); ?>
<ul>
	<?php 
	$count = 1;
	foreach($results as $result) {
		echo '<li>' . $count. " " . $result->reason_for_recall . '</li>';	
		$count++;
	}?>
</ul>