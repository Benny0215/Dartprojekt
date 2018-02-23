<ul>
  <li><a href="index.php?section=startseite">Startseite</a></li>
<?php
    if ($db->isUserLoggedIn()===FALSE)
      {
?>
    <li><a href="index.php?section=login"=>Login</a></li>
<?php
      }
?>
<?php
  if ($db->isUserLoggedIn()===TRUE)
    {
?>
    <li><a href="index.php?section=logout"=>Logout</a></li>
<?php
    }
?>
<?php
    if ($db->isUserLoggedIn()===TRUE)
      {
?>
    <li><a href="index.php?section=einrichten"=>Neues Spiel erstellen</a></li>
<?php
      }
?>
<?php
    if ($db->isUserLoggedIn()===FALSE)
      {
?>
    <li><a href="index.php?section=registrieren"=>Registrieren</a></li>
<?php
      }
?>
</ul>
