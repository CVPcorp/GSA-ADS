<?php
function searchApi($term) {
    //print_r($term);
    //plant+AND+recall_initiation_date:[20090601+TO+20140731]&limit=5
    $search = '';
    //if($term['SearchTerm']!=''){
        $search=$term['SearchTerm'];
        if($term['Firm']!=''){
        	if($search != '')
        		$search=$search.'+AND+';
        	$search=$search.'recalling_firm:'.$term['Firm'];
        }
        if($term['State']!=''){
        	if($search != '')
        		$search=$search.'+AND+';
        	$search=$search.'state:'.$term['State'];
        }
        if($term['RecalSTDate']!=''||$term['RecalENDate']!=''){
            if($term['RecalSTDate']=='')$term['RecalSTDate']=date('Ymd');
            if($term['RecalENDate']=='')$term['RecalENDate']=date('Ymd');
        	if($search != '')
        		$search=$search.'+AND+';
            $search=$search.'recall_initiation_date:['.date('Ymd',strtotime($term['RecalSTDate'])).'+TO+'.date('Ymd',strtotime($term['RecalENDate'])).']';
        }
    //}
    elseif($term['RecalSTDate']!=''||$term['RecalENDate']!=''){
        if($term['RecalSTDate']=='')$term['RecalSTDate']=date('Ymd');
        if($term['RecalENDate']=='')$term['RecalENDate']=date('Ymd');
        $search='recall_initiation_date:['.$term['RecalSTDate'].'+TO+'.$term['RecalENDate'].']';
    }
    //$search=$search.'&limit=4';
	$json = file_get_contents(str_replace(' ','%20','https://api.fda.gov/' . $term['Type'] . '/enforcement.json?api_key=Uv4W3UJHpj9uCAOLY7WQTJcmtDtrqGNTdYcw6Y2O&search=' . $search . '&limit=' . $term['Limit']));
	$obj = json_decode($json);
	
    if(is_object($obj->error)) echo '<b>No Search data found for the above criteria </b>';

    return $obj->results;
}