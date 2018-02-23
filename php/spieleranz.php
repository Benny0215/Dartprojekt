<?php
  switch ($anz_spieler)
    {
      case '1':
        ?>
        <br>
        Spieler1: <input type="text" name="Spieler1" required />
        <br>
        <?php
      break;
      case '2':
        ?>
        <br>
        Spieler1: <input type="text" name="Spieler1" required />
        <br><br>
        Spieler2: <input type="text" name="Spieler2" required />
        <br>
        <?php
      break;
      case '3':
        ?>
        <br>
        Spieler1: <input type="text" name="Spieler1" required />
        <br><br>
        Spieler2: <input type="text" name="Spieler2" required />
        <br><br>
        Spieler3: <input type="text" name="Spieler3" required />
        <br>
        <?php
      break;
      case '4':
        ?>
        <br>
        Spieler1: <input type="text" name="Spieler1" required />
        <br><br>
        Spieler2: <input type="text" name="Spieler2" required />
        <br><br>
        Spieler3: <input type="text" name="Spieler3" required />
        <br><br>
        Spieler4: <input type="text" name="Spieler4" required />
        <br>
        <?php
      break;
      case '5':
        ?>
        <br>
        Spieler1: <input type="text" name="Spieler1" required />
        <br><br>
        Spieler2: <input type="text" name="Spieler2" required />
        <br><br>
        Spieler3: <input type="text" name="Spieler3" required />
        <br><br>
        Spieler4: <input type="text" name="Spieler4" required />
        <br><br>
        Spieler5: <input type="text" name="Spieler5" required />
        <br>
        <?php
      break;
      case '6':
        ?>
        <br>
        Spieler1: <input type="text" name="Spieler1" required />
        <br><br>
        Spieler2: <input type="text" name="Spieler2" required />
        <br><br>
        Spieler3: <input type="text" name="Spieler3" required />
        <br><br>
        Spieler4: <input type="text" name="Spieler4" required />
        <br><br>
        Spieler5: <input type="text" name="Spieler5" required />
        <br><br>
        Spieler6: <input type="text" name="Spieler6" required />
        <br>
        <?php
      break;
      case '7':
        ?>
        <br>
        Spieler1: <input type="text" name="Spieler1" required />
        <br><br>
        Spieler2: <input type="text" name="Spieler2" required />
        <br><br>
        Spieler3: <input type="text" name="Spieler3" required />
        <br><br>
        Spieler4: <input type="text" name="Spieler4" required />
        <br><br>
        Spieler5: <input type="text" name="Spieler5" required />
        <br><br>
        Spieler6: <input type="text" name="Spieler6" required />
        <br><br>
        Spieler7: <input type="text" name="Spieler7" required />
        <br>
        <?php
      break;
    default:
      if ($anz_spieler>7)
      {
        echo "Mehr als 7 Spieler sind nicht möglich!";
      }
      else
      {
        echo "Du hast ein ungültiges Zeichen eingegeben";
      }
      break;
  }
