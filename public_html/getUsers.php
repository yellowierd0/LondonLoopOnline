<?php

$arr = array();


include_once("connect.php");

$db = new DB_CONNECT();

$fetch = mysql_query("SELECT * FROM Users");

while($e = mysql_fetch_array($fetch, MYSQL_ASSOC)){
  $row_array['user_id'] = $e['UserID'];
  $row_array['facebook_id'] = $e['FacebookId'];
  $row_array['email'] = $e['Email'];
  $row_array['miles_walked'] = $e['MilesWalked'];
  $row_array['time_taken'] = $e['TimeTaken'];
  $row_array['walks_completed'] = $e['WalksCompleted'];
  $row_array['last_updated'] = $e['LastUpdated'];

  array_push($arr, $row_array);
}

echo json_encode(array('users' => $arr));


mysql_close();

?>
