<?php
function searchApi($term) {
    //print_r($term);
    //plant+AND+recall_initiation_date:[20090601+TO+20140731]&limit=5
    $search = '';
    if($term['SearchTerm']!=''){
        $search=$term['SearchTerm'];
        if($term['RecalSTDate']!=''||$term['RecalENDate']!=''){
            if($term['RecalSTDate']=='')$term['RecalSTDate']=date('Ymd');
            if($term['RecalENDate']=='')$term['RecalENDate']=date('Ymd');
            $search=$search.'+AND+recall_initiation_date:['.date('Ymd',strtotime($term['RecalSTDate'])).'+TO+'.date('Ymd',strtotime($term['RecalENDate'])).']';
        }
    }
    elseif($term['RecalSTDate']!=''||$term['RecalENDate']!=''){
        if($term['RecalSTDate']=='')$term['RecalSTDate']=date('Ymd');
        if($term['RecalENDate']=='')$term['RecalENDate']=date('Ymd');
        $search='recall_initiation_date:['.$term['RecalSTDate'].'+TO+'.$term['RecalENDate'].']';
    }
    //$search=$search.'&limit=4';
	$json = file_get_contents('https://api.fda.gov/drug/enforcement.json?search=' . $search . '&limit=4');
	$obj = json_decode($json);

    if(is_object($obj->error)) echo '<b>No Search data found for the above criteria </b>';

    return $obj->results;
}