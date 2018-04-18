<?php
require_once "config.php";
class ConnectionFactory {

  // public static function getConnection() {
  //   // Connection Config
  //   $dbhost = "localhost";
  //   $dbuser = "root";
  //   $dbpass = "";
  //   $dbname = "drc";
  //
  //   // Create connection
  //   try {
  //     $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
  //     // set the PDO error mode to exception
  //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //     // Set the default fetch mode
  //     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  //     // Set this so the LIMIT works
  //     $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  //
  //     return $pdo;
  //   }
  //   catch(PDOException $e) { // echo "Connection failed: " . $e->getMessage();
  //     return false;
  //   }
  // }

  public static function getConnection() {
    // $host = "ec2-54-83-204-6.compute-1.amazonaws.com";
    // $database = "d68qibg32f3fit";
    // $user = "udrraepvpvfnyx";
    // $port = "5432";
    // $password = "3536b8b6b3a5d887eaf7e979a7a0809565036e7a9f7bc0ce008e742cf6a2539c";
    // $uri = "postgres://udrraepvpvfnyx:3536b8b6b3a5d887eaf7e979a7a0809565036e7a9f7bc0ce008e742cf6a2539c@ec2-54-83-204-6.compute-1.amazonaws.com:5432/d68qibg32f3fit";
    // $herokuCli = "heroku pg:psql postgresql-cubic-10865 --app protected-stream-34303";
    // $connectionString = "pgsql:host={$host};port={$port};dbname={$database};user={$user};password={$password}";


    try {
      $conn = new PDO($connectionString);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Heroku PostgreSQL Connected Successfully";
      return $conn;
    } catch (PDOException $e) {
      // echo "Connection failed: {$e->getMessage()}";
      return false;
    }
  }
}
