<!-- query -->
<?php
include 'database.php';
if (empty($idRoom)) {
  die('no id');
}
$idRoom = $_POST['id'];
$sql = "DELETE FROM `stanze` WHERE `id` = $idRoom";
$result = $conn->query($sql);
if ($result) {
echo "OK";
}
else {
echo "non è ok";
}
$conn->close();
?>
