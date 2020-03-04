<?php
include 'env.php';
// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn && $conn->connect_error) {
 echo "Errore di connessione: " . $conn->connect_error;
 die();
 }

 $sql = "SELECT * FROM `stanze`";
 $result = $conn->query($sql);
 if ($result && $result->num_rows > 0) {
   $rooms = [];
    while($row = $result->fetch_assoc()) {
    //echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
    $rooms[] = $row;
    }
 }
 elseif ($result) {
 echo "non ci sono risultati";
 } else {
 echo "query error";
 }
$conn->close();
 ?>
