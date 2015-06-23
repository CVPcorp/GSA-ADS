<?php
error_reporting(0);
include("Includes/fdaApi.php"); ?>
<?php $results = searchApi($_POST);?>
<table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Recall Firm</th>
                <th>Date</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
                <th>Product Description</th>
              </tr>
            </thead>
            <tbody>
	<?php 
	$count = 1;

	foreach($results as $result) {?>
        <tr>
            <td><?php echo $result->recalling_firm ?></td>
            <td><?php echo $result->recall_initiation_date?></td>
            <td><?php echo $result->state?></td>
            <td><?php echo $result->city?></td>
            <td><?php echo $result->country?></td>
            <td><?php echo $result->product_description?></td>
        </tr>

	<?php $count++; }?>
		</tbody>
</table>