<?php
  switch ($section) {
    case 'login':
        include("php/login.php");
        break;
    case 'logout':
          include("php/logout.php");
          break;
    default:
      include("php/startseite.php");
      break;
  }
 ?>
