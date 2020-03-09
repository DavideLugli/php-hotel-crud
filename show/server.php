<!-- query -->
<?php
include 'database.php';
include __DIR__.'/../functions.php';

$idRoom = $_GET['id'];
$room = getById($conn, 'stanze', $idRoom);

$conn->close();
?>
