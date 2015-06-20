<?php
function searchApi($term) {
    print_r($term);
	$json = file_get_contents('https://api.fda.gov/drug/enforcement.json?search=' . $term['SearchTerm'] . '+AND+report_date=' .  $term['SearchDate']  . '&limit=4');
	$obj = json_decode($json);
    return $obj->results;
}
?>