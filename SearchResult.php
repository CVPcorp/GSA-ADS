<?php include("Includes/fdaApi.php"); ?>
<?php $results = searchApi($_POST); ?>
<table border="1">
    <thead><tr>
        <td>S.No.</td>

        <td>Recall initiation Date</td>
        <td>State</td>
        <td>City</td>
        <td>Country</td>
        <td>Product Description</td>
    </tr></thead>
	<?php 
	$count = 1;

	foreach($results as $result) {?>
        <tr>
            <td><?php echo $count?></td>

            <td><?php echo $result->recall_initiation_date?></td>
            <td><?php echo $result->state?></td>
            <td><?php echo $result->city?></td>
            <td><?php echo $result->country?></td>
            <td><?php echo $result->product_description?></td>
        </tr>

	<?php $count++; }?>
</table>