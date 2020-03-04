<?php
include 'database.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dist/style.css">
  <title>Hotel Crud</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>N° Stanza</th>
              <th>Piano</th>
              <th>Letti</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (!empty($rooms)) {
            foreach ($rooms as $room) { ?>
              <tr>
                <td><?php echo $room['id']; ?></td>
                <td><?php echo $room['room_number']; ?></td>
                <td><?php echo $room['floor']; ?></td>
                <td><?php echo $room['beds']; ?></td>
                <td><a href="show/show.php?id=<?php echo $room['id']; ?>">View</a></td>
                <td><a href="#">Update</a></td>
                <td>DELETE</td>
              </tr>
            <?php }
             }
             ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
