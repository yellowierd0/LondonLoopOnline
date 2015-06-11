<?php

$arr = array();

include_once("connect.php");

$fetch = mysql_query("SELECT * FROM Section");


while($e = mysql_fetch_array($fetch, MYSQL_ASSOC)){
  $row_array['section_id'] = $e['SectionID'];
  $row_array['start_node'] = $e['StartNode'];
  $row_array['end_node'] = $e['EndNode'];
  $row_array['description'] = $e['Description'];
  $row_array['length'] = $e['Length'];
  $row_array['image'] = $e['Image'];
 
  array_push($arr, $row_array); 
}

echo json_encode(array('sections' => $arr));  


mysql_close();

?>
