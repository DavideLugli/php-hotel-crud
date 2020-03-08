<?php
include __DIR__.'/../database.php';

if (empty($_POST['id'])) {
  die('Id non inserito');
}
if (empty($_POST['room_number'])) {
  die('Non hai inserito il numero della stanza');
}
if (empty($_POST['floor'])) {
  die('Non hai inserito il numero del piano');
}
if (empty($_POST['beds'])) {
  die('Non hai inserito il numero dei letti');
}

$roomId = $_POST['id'];
$roomNumber = $_POST['room_number'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$sql = "SELECT * FROM `stanze` WHERE `id` = '$roomId'";

$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
  $room = $result->fetch_assoc();
}
else {
  die('ID non esistente');
}

$sql = "UPDATE `stanze` SET `room_number` = $roomNumber, `floor` = $floor, `beds` = $beds
WHERE `id` = $roomId";

$result = $conn->query($sql);
if ($result) {
  header("Location: $basePath/show/show.php?id=$roomId");
}
else {
  echo "KO";
}
$conn->close();
?>
