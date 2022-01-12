<?php
require_once('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM bookstores WHERE id=:id";
$query = $conn->prepare($sql);
if ($query->execute([':id' => $id])) {
  header('Location:index.php');
}
