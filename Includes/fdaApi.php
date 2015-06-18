<?php
function searchApi($term) {
	$json = file_get_contents('https://api.fda.gov/drug/enforcement.json?search=' . $term . '&limit=4');
	$obj = json_decode($json);
	return $obj->results;
}
?>