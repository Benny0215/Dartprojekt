<?php
  if(!isset($_POST["benutzer"]))
    {
?>
<form action="index.php?section=registrieren" method="POST">
  <table>
    <tr>
      <td>
          Bitte wähle einen Benutzernamen: <br><br>
      </td>
      <td>
          <input type="text" name="benutzer" required />
      </td>

    </tr>
    <tr>
      <td>
          Bitte wählen Sie ein Passwort: <br><br>
      </td>
      <td>
          <input type="password" name="passwort1" required />
      </td>
    </tr>
      <tr>
        <td>
            Bitte wiederholen Sie Ihr Passwort: <br><br>
        </td>
        <td>
            <input type="password" name="passwort2" required />
        </td>
      </tr>
      <tr>
      <td>
          <input type="submit" name="registrieren" value="Registrieren"  />
      </td>
      </tr>
  </table>
</form>

<?php
  }
  else
    {
      $_benutzer = $_POST["benutzer"];
      $_pw1 = SHA1($_POST["passwort1"]);
      $_pw2 = SHA1($_POST["passwort2"]);

      if($db->isUserRegistrated($_benutzer)=== TRUE)  // isUserRegistrated
        {
          echo('Sie sind bereits registriert. <a href="index.php?section=login">Zum Login</a>');
        }
      else
        {
          //echo("Du bist noch nicht registriert!<br/><br/>");
          if($_pw1===$_pw2)
          {
            //echo("Passwort richtig wiederholt!");
            $db->Registrieren($_benutzer, $_pw1);
          }
          else
          {
            echo("Das Passwort wurde falsch wiederholt!");
          }
        }
    }
?>
