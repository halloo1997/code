<?php
include('header.php');

  $p = (isset($_GET['p'])) ? $_GET['p'] : 'home';
  switch($p){
    case 'home':
      include('content-home.php');
      break;
    case 'mijn-werk':
      include('content-mijn-werk.php');
      break;
      case 'mijn-fotos':
      include('content-mijn-fotos.php');
      break;
    case 'contact':
      include('content-contact.php');
      break;
    case 'vaardigheden':
      include('content-vaardigheden.php');
      break;
    default:
      include('content-404.php');
  }

  include('footer.php');

?>
