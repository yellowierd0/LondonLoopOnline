<?php

include_once("connect.php");

$con = new DB_CONNECT();


//$uid = $_REQUEST [‘uid’];
//$name = $_REQUEST [‘name’];
//$city = $_REQUEST [‘city’];

$walk_id = isset($_POST['WalkId']) ? $_POST['WalkId'] : ”;
$currently_walking = isset($_POST['CurrentlyWalking']) ? $_POST['CurrentlyWalking'] : ”;
$miles_walked = isset($_POST['MilesWalked']) ? $_POST['MilesWalked'] : ”;
$walk_time = isset($_POST['WalkTime']) ? $_POST['WalkTime'] : ”;
$walks_completed = isset($_POST['WalksCompleted']) ? $_POST['WalksCompleted'] : ”;

$flag ['code'] = 1;
$flag ['walk_id'] = $walk_id;
$flag ['currently_walking'] = $currently_walking;
$flag ['miles_walked'] = $miles_walked;
$flag ['walk_time'] = $walk_time;
$flag ['walks_completed'] = $walks_completed;

$result = mysql_query("UPDATE `Statistics` SET `CurrentlyWalking`='$currently_walking', `WalkTime`='$walk_time',`WalksCompleted`='$walks_completed',`MilesWalked`='$miles_walked' WHERE `WalkId`='$walk_id'");

if ($result) {
    $flag ['code'] = 0;
}

echo (json_encode ( $flag )) ;
mysql_close ( $con );

?>
