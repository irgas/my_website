<?php
  session_start();
?>

<div id="content" class="container">
  <div id="form" class="row">

      <div class="mx-auto">
        <?php

        if(isset($_SESSION['alert'])){
          echo $_SESSION['alert'];
          unset($_SESSION['alert']);
        }
        
        ?>
        <form action="send.php" method="post">
          <div class="form-group">
              <label for="name">Imię i Nazwisko:</label>
              <input type="text" class="form-control form-control" name="name" value="">
              <label for="email">Email:</label>
              <input type="text" class="form-control form-control" name="email" value="">
              <label for="comment">Treść:</label>
              <textarea class="form-control" rows="5" name="comment" placeholder="Napisz tu wiadomość..."></textarea>
              <button class="btn btn-outline-success" id="button" type="submit" name="button">Wyślij</button>
          </div>

        </form>


      </div>

    </div>
</div>
