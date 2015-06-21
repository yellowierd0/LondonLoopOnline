<?php

include_once("connect.php");

$con = new DB_CONNECT();


//$uid = $_REQUEST [‘uid’];
//$name = $_REQUEST [‘name’];
//$city = $_REQUEST [‘city’];

$walk_id = isset($_POST['WalkId']) ? $_POST['WalkId'] : ”;
$currently_walking = isset($_POST['CurrentlyWalking']) ? $_POST['CurrentlyWalking'] : ”;

$flag ['code'] = 1;
$flag ['walk_id'] = $walk_id;
$flag ['currently_walking'] = $currently_walking;

$result = mysql_query("UPDATE `Statistics` SET `CurrentlyWalking`='$currently_walking' WHERE `WalkId`='$walk_id'");

if ($result) {
    $flag ['code'] = 0;
}

echo (json_encode ( $flag )) ;
mysql_close ( $con );

?>
