<?php
class ConnectionFactory {

  public static function getConnection() {
    // Connection Config
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "drc";

    // Create connection
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if ($mysqli->connect_error)
      // die("Connection failed: " . $mysqli->connect_error);
      return false;

    // SET The CharSet to 'utf8'
    $mysqli->set_charset("utf8");

    return $mysqli;
  }

}
