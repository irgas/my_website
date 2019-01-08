<?php
switch (@$_GET['id']) {
    case 'about_me':
      require_once 'about_me.php';
      break;
    case 'projects':
      require_once 'projects.php';
      break;
    case 'contact':
      require_once 'contact.php';
      break;
    case 'home':
    default:
      require_once 'home.php';
      break;
}
?>
