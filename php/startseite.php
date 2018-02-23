<article>
  <h1> Willkommen auf der Startseite </h1>
<?php
  if($db->isUserLoggedIn()=== TRUE)
    {
      echo "Du bist  eingeloggt! <br><br> Tritt einem bestehendem Spiel bei oder
            erstelle selbst eins!";
    }
  else
    {
        echo"Bitte logge dich ein um fortzufahren!";
    }
?>
</article>
