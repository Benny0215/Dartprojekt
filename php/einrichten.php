<?php
if(!isset($_POST['button_weiter1']))
    {
 ?>
<h1>Neues Spiel erstellen:</h1>
<main>
	<form action="index.php?section=einrichten" method="POST">
		<p>Geben Sie den Spieltyp an:</p>
		<div>
			<input type="radio"  name="Spieltyp" value="501">501<br>
			<input type="radio"  name="Spieltyp" value="301">301<br>
      <br>
      <p>Geben Sie die Anzahl der Spieler an:</p>
      <input type="text" name="anz_spieler" required />
      <br>
      <br>
      <input type="submit" name="button_weiter1" value="WEITER"/>
    </form>
<?php
    }
  else
    {
    ?>
    <form action="index.php?section=einrichten" method="POST">
      <div>
        <?php
          $anz_spieler=$_POST["anz_spieler"];
          echo "Geben Sie die Namen der ",$anz_spieler," Spieler an.<br/>";
          include("php/spieleranz.php"); //ausgelagerter Switch
  ?>
    <br><br>
    <input type="submit" name="button_weiter2" value="WEITER"/>
    </div>
	</form>
</main>
<?php
    }
    if (isset($_POST['Spieltyp']))
      {
        $_Spieltyp = $_POST['Spieltyp'];
      }
?>
