<?php
$servername = "sql6.freesqldatabase.com";
$username = "sql6465213";
$password = "n4SHwK2kDv";

try {
  $conn = new PDO("mysql:host=$servername;dbname=sql6465213", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>