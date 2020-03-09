<?php
include __DIR__. '/../database.php';


if (empty($_POST['room_number'])) {
  die('Non hai inserito il numero della stanza');
}
if (empty($_POST['floor'])) {
  die('Non hai inserito il numero del piano');
}
if (empty($_POST['beds'])) {
  die('Non hai inserito il numero dei letti');
}

$roomNumber = $_POST['room_number'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$sql = "INSERT INTO `stanze` (`room_number`, `floor`, `beds`, `created_at`, `updated_at`) VALUES (?,?,?, NOW(), NOW())";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $roomNumber, $floor, $beds);
$stmt->execute();

if(isset($stmt->insert_id)) {
  header("Location: $basePath/show/show.php?id=$stmt->insert_id");
} else {
  echo 'KO';
}

 ?>
