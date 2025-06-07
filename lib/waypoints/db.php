<?php
$servername = "localhost";
$dbname = "myblog";

try {
  $conn = new PDO("sqlite:$dbname");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>