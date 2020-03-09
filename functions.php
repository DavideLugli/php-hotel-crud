<?php
function getById($conn, $table, $id) {
  $sql = "SELECT * FROM `$table` WHERE `id`='$id'";

  $resultQuery = $conn->query($sql);

  if ($resultQuery && $resultQuery->num_rows > 0) {
    $result = $resultQuery->fetch_assoc();
  } elseif ($result) {
    $result = [];
  } else {
    $result = false;
  }


  return $result;
}
 ?>
