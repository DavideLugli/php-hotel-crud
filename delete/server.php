<?php
include __DIR__.'/../database.php';
if (empty($_POST['id'])) {
  die('no id');
}
$idRoom = $_POST['id'];

//controlliamo che l'id esiste
$sql = "SELECT * FROM `stanze` WHERE `id`='$idRoom'";

$result = $conn->query($sql);

if ($result && $result->num_rows == 0) {
  die('Id non corretto');
}

// se esiste -> delete
$sql = "DELETE FROM `stanze` WHERE `id` = '$idRoom'";
$result = $conn->query($sql);
if ($result) {
// echo "OK";
header("Location: $basePath?roomNumber=$idRoom");
}
else {
echo "non è ok";
}
$conn->close();
?>
