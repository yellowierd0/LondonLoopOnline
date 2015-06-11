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
    require_once __DIR__ . '/config.php';

    // connecting to mysql db
    $con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

    // selecting db
    $db = mysql_select_db(DB_NAME) or die(mysql_error());

    // return connection cursor
    return $con;
  }

  function close() {
    mysql_close();
  }

}


?>
