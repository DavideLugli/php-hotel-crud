<?php
include 'env.php';
// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn && $conn->connect_error) {
 echo "Errore di connessione: " . $conn->connect_error;
 die();
 }

 $sql = "SELECT *, floor FROM `stanze`";
 $result = $conn->query($sql);
 if ($result && $result->num_rows > 0) {

 }
 elseif ($result) {
 echo "non ci sono risultati";
 } else {
 echo "query error";
 }
$conn->close();
 ?>
