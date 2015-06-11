<?php

$arr = array();


include_once("connect.php");

$db = new DB_CONNECT();

$fetch = mysql_query("SELECT * FROM Statistics");


while($e = mysql_fetch_array($fetch, MYSQL_ASSOC)){
  $row_array['id'] = $e['Id'];
  $row_array['currently_walking'] = $e['CurrentlyWalking'];
  $row_array['miles_walked'] = $e['MilesWalked'];
  $row_array['walk_time'] = $e['WalkTime'];
  $row_array['app_time'] = $e['AppTime'];
  $row_array['walks_completed'] = $e['WalksCompleted'];
  $row_array['last_updated'] = $e['LastUpdated'];

  array_push($arr, $row_array);
}

echo json_encode(array('statistics' => $arr));


mysql_close();

?>
