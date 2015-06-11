<?php

class DB_CONNECT
{
  // constructor
  function __construct()
  {
    // connecting to db
    $this->connect();
  }

  function __destruct()
  {
    // close db connection
    $this->close();
  }

  function connect()
  {
    // import db connection variables
    $host = "localhost";
    $username = "root";
    $pass = "Loop1";
    $db_name = "loop1";

    // connecting to mysql db
    $con = mysql_connect($host, $username, $pass) or die(mysql_error());

    // selecting db
    $db = mysql_select_db($db_name) or die(mysql_error());

    // return connection cursor
    return $con;
  }

  function close() {
    mysql_close();
  }

}


?>
