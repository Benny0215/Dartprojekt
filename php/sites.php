<?php
  switch ($section) {
    case 'login':
                include("php/login.php");
          break;
    case 'logout':
                include("php/logout.php");
          break;
    case 'einrichten':
                include("php/einrichten.php");
          break;
    case 'start':
                include("php/start.php");
          break;
    case 'registrieren':
                include("php/registrieren.php");
          break;
    default:
                include("php/startseite.php");
          break;
  }
 ?>
