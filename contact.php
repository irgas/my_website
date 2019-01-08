<div id="content" class="container">
  <div id="form" class="row">

      <div class="mx-auto">

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
        <?php

          if (@$_GET['error'] == true) {
            echo '<div class="alert alert-success" style="position: absolute; top:0; left:0;">
                  <strong>Success!</strong> Wiadomość została wysłana!
                  </div>';
            unset($_GET['error']);
          }
          elseif (@$_GET['error'] == false) {
            echo '<div class="alert alert-danger" style="position: absolute; top:0; left:0;">
                  <strong>Error!</strong> Wiadomość nie została wysłana! Spróbuj ponownie lub skontaktuj się z administratorem.
                  </div>';
            unset($_GET['error']);
          }

         ?>

      </div>

    </div>
</div>
