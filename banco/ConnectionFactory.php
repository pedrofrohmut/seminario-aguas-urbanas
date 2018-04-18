<?php
require_once "config.php";
class ConnectionFactory {

  public static function getConnection() {
    try {
      $conn = new PDO($connectionString);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      return false;
    }
  }
}
