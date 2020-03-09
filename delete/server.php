<?php
include __DIR__.'/../database.php';
include __DIR__.'/../functions.php';

if (empty($_POST['id'])) {
  die('no id');
}
$idRoom = $_POST['id'];

//controlliamo che l'id esiste
$result = getById($conn, 'stanze', $roomId);
if ($result && $result->num_rows == 0) {
  die('Id non corretto');
}

// se esiste -> delete
$sql = "DELETE FROM `stanze` WHERE `id` = '$idRoom'";
$resultDelete = $conn->query($sql);

if ($resultDelete) {
header("Location: $basePath?roomNumber=$idRoom");
}
else {
echo "non è ok";
}
$conn->close();
?>
