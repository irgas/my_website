<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];
  $od  = 'From: tirek1993@gmail.com \r\n';
  $od .= 'MIME-Version: 1.0'."\r\n";
  $od .= 'Content-type: text/html; charset=iso-8859-2'."\r\n";
  $temat = "Wiadomość ze strony z Portfolio";

  if(mail('ireneuszgaslawski@gmail.com', 'witaj', 'oto funkcja maila')){
    $_GET['error'] = true;
  }
  else{
    $_GET['error'] = false;
  }
    $_GET['id'] = 'contact';
    require_once 'index.php';
 ?>
