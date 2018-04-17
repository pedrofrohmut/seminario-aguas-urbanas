<?php
class ConnectionFactory {

  public static function getConnection() {
    // Connection Config
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "drc";

    // Create connection
    try {
      $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
      // set the PDO error mode to exception
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // Set the default fetch mode
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      // Set this so the LIMIT works
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

      return $pdo;
    }
    catch(PDOException $e) { // echo "Connection failed: " . $e->getMessage();
      return false;
    }
  }
}
