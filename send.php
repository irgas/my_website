<?php
  session_start();

  @$name = $_POST['name'];
  @$email = $_POST['email'];
  @$comment = $_POST['comment'];

  $title = "Wiadomość ze strony z Portfolio";

  if(mail('ireneuszgaslawski@gmail.com', 'witaj', 'oto funkcja maila')){

    $_SESSION['alert'] = '<div class="alert alert-success" style="position: absolute; top:0; left:0;">
          <strong>Success!</strong> Wiadomość została wysłana!
          </div>';

  }
  else{

    $_SESSION['alert'] = '<div class="alert alert-danger" style="position: absolute; top:0; left:0;">
          <strong>Error!</strong> Wiadomość nie została wysłana! Spróbuj ponownie lub skontaktuj się z administratorem.
          </div>';

  }
    
    header('location:index.php?id=contact');
 ?>
