<?php
include 'server.php';
include 'partials/header.php';
 ?>
<?php if (!empty($_GET['roomNumber'])) { ?>
  <div class="alert alert-danger">
    Hai Cancellato la stanza con ID <?php echo $_GET['roomNumber'] ?>
  </div>
<?php } ?>

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
              <td>
                <form action="delete/delete.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                  <input class="btn btn-danger" type="submit" value="Delete">
                </form>
              </td>
            </tr>
            <?php }
             }
             ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php include 'partials/footer.php'; ?>
