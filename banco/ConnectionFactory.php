<?php
class ConnectionFactory {

  public static function getConnection() {
    $db = parse_url(getenv("DATABASE_URL"));

    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));

    if ($pdo) {
      return $pdo;
    } else {
      return false;
    }
  }
}
