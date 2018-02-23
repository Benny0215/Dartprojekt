<h1>Login</h1>

<?php
  if($db->isUserLoggedIn()=== TRUE)
    {

      echo "Du bist bereits eingeloggt! :) - <a href='index.php?section=logout' alt='Ausloggen'>(ausloggen)</a>";
    }
  else
    {
    if(isset($_POST['einloggen']))
      {
        $benutzer=$_POST['benutzer'];
        $passwort=SHA1(($_POST['passwort']));

        if($db->login($benutzer, $passwort)===TRUE)
          {
            echo "Erfolgreich eingeloggt!";
          }
        else
          {
            echo "Einloggen fehlgeschlagen! Versuche es erneut!";
          }
      }
    else
    {
  ?>
              <form action="index.php?section=login" method="POST">
                <table>
                  <tr>
                    <td>
                        Benutzername:
                    </td>
                    <td>
                        <input type="text" name="benutzer" required />
                    </td>

                  </tr>
                  <tr>
                    <td>
                        Passwort:
                    </td>
                    <td>
                        <input type="password" name="passwort" required />
                    </td>
                    <tr>
                    <td>
                        <input type="submit" name="einloggen" value="Einloggen"  />
                    </td>
                    </tr>
                  </tr>
                </table>
              </form>
              <?php
                    }

                }
              ?>
