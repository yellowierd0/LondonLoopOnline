<?php

$arr = array();


include_once("connect.php");

$db = new DB_CONNECT();

$fetch = mysql_query("SELECT * FROM Statistics");


while($e = mysql_fetch_array($fetch, MYSQL_ASSOC)){
  $row_array['id'] = $e['WalkId'];
  $row_array['currently_walking'] = $e['CurrentlyWalking'];
  $row_array['miles_walked'] = $e['MilesWalked'];
  $row_array['walk_time'] = $e['WalkTime'];
  $row_array['walks_completed'] = $e['WalksCompleted'];

  array_push($arr, $row_array);
}

echo json_encode(array('statistics' => $arr));


mysql_close();

?>
