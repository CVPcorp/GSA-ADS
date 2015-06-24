<?php
error_reporting(0);
include("Includes/fdaApi.php"); ?>
<?php  $results = searchApi($_POST);
$firm =[];
$mapData=[];
$i=1;
foreach($results as $result) {
    if(!in_array($result->recalling_firm,$firm)){
    $url = "http://maps.google.com/maps/api/geocode/json?address=".$result->city.','.$result->state.','.$result->country.'&'."sensor=false";
    $json = file_get_contents(str_replace('&amp;','&',$url));
    $obj= json_decode($json);

        //echo $firm[] = $result->recalling_firm;
        $mapData[] = array(
            $result->recalling_firm,
            $obj->results[0]->geometry->location->lat,
            $obj->results[0]->geometry->location->lng,

            $i++
        );
    }
    //print_r($firm);


}
echo json_encode($mapData);