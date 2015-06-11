<?php

$arr = array();

include_once("connect.php");

$fetch = mysql_query("SELECT * FROM Node");


while($e = mysql_fetch_array($fetch, MYSQL_ASSOC)){
  $row_array['node_id'] = $e['NodeID'];
  $row_array['name'] = $e['Name'];
  $row_array['latitude'] = $e['Latitude'];
  $row_array['longitude'] = $e['Longitude'];
 
  array_push($arr, $row_array); 
}

echo json_encode(array('nodes' => $arr));  


mysql_close();

?>
