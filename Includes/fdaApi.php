<?php
function searchApi($term) {
    //print_r($term);
    /*$queryString = array(
        'search'=>$term['SearchTerm'],
        'search'=>$term['SearchTerm'],
        );*/
	$json = file_get_contents('https://api.fda.gov/drug/enforcement.json?search=' . $term['SearchTerm'] . '&limit=4');
	$obj = json_decode($json);
    return $obj->results;
}

?>