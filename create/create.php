<?php
include __DIR__.'/../partials/header.php';
 ?>

 <body>
   <div class="container">
     <div class="row">
       <div class="col-12">
         <form action="server.php" method="POST">
         <div class="form-group">
           <label for="room_number">Numero Stanza</label>
           <input class="form-control" type="text" name="room_number" placeholder="Inserisci numero stanza" value="">
         </div>
         <div class="form-group">
           <label for="floor">Numero Piano</label>
           <input class="form-control" type="text" name="floor"
           placeholder="Inserisci il piano" value="">
         </div>
         <div class="form-group">
           <label for="beds">Numero Letti</label>
           <input class="form-control" type="text" name="beds"
           placeholder="Inserisci numero letti" value="">
         </div>
         <div class="form-group">
           <input class="form-control btn bg-info text-white" type="submit" value="Salva">
         </div>
         </form>
       </div>
     </div>
   </div>
   
 <?php
include __DIR__.'/../partials/footer.php';
  ?>
