<?php
// $host = 'localhost';
// $user = 'root';
// $pass = 'badbd2515';
// $dbname = 'pdoposts';
//
// // Set DSN
// $dsn = 'mysql:host='.$host.';dbname='.$dbname;
// // Create PDO instance
// $pdo = new PDO($dsn, $user, $pass);

require_once "../banco/ConnectionFactory.php";

// Get pdo connection
$pdo = ConnectionFactory::getConnection();

// Set the default fetch mode
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
// Set this so the LIMIT works
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$stm = $pdo->query("SELECT * FROM inscricao");

echo "<ul>";
while ($inscricao = $stm->fetch(PDO::FETCH_OBJ)) {
  echo "<li>"; print_r($inscricao); echo "</li>";
}
echo "</ul>";

// PDO Query
// $stm = $pdo->query('SELECT * FROM posts');
// Assoc array
// while($row = $stm->fetch(PDO::FETCH_ASSOC)) {
//   echo $row['title'] . '<br>';
// }
// Object way
// while($row = $stm->fetch(PDO::FETCH_OBJ)) {
//   echo $row->title . '<br>';
// }
?>
