<?php
  switch ($section) {
    case 'login':
                if($db->isUserLoggedIn()=== True)
                {
                  include("php/startseite.php");
                }
                else
                {
                  include("php/login.php");
                }
          break;
    case 'logout':
                if($db->isUserLoggedIn()=== TRUE)
                {
                  include("php/logout.php");
                }
                else
                {
                  include("php/startseite.php");
                }
          break;
    case 'einrichten':
                if($db->isUserLoggedIn()=== TRUE)
                {
                  include("php/einrichten.php");
                }
                else
                {
                  include("php/startseite.php");
                }
          break;
    case 'start':
                if($db->isUserLoggedIn()=== TRUE)
                {
                  include("php/einrichten.php");
                }
                else
                {
                  include("php/startseite.php");
                }
          break;
    case 'registrieren':
                if($db->isUserLoggedIn()=== TRUE)
                {
                  include("php/registrieren.php");
                }
                else
                {
                  include("php/startseite.php");
                }
          break;
    default:
                include("php/startseite.php");
          break;
  }
 ?>
