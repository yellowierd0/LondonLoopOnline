<?php

include_once("connect.php");

$db = new DB_CONNECT();


$sql = "UPDATE Statistics SET CurrentlyWalking=1 WHERE Id=1";

if (db->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . db->error;
}
echo json_encode(array('sections' => $arr));


mysql_close();

?>
