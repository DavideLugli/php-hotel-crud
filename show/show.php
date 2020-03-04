<?php
include __DIR__.'/../partials/header.php';
 ?>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
    <div class="card">
      <ul class="list-unstyled">
        <?php
        include 'server.php';
         ?>
        <li><h3>Stanza <?php echo $room['room_number'] ?></h3></li>
        <li>ID: <?php echo $room['id'] ?></li>
        <li>N° Stanza: <?php echo $room['room_number'] ?></li>
        <li>Piano: <?php echo $room['floor'] ?></li>
        <li>Letti: <?php echo $room['beds'] ?></li>
      </ul>
    </div>
    </div>
    </div>
    </div>


  </body>
</html>
