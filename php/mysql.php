<?php
  class DB {
      static private $_db_username  ="root";
      static private $_db_password  ="";
      static private $_db_host      ="localhost";
      static private $_db_name      ="Dartenbank";
      static private $_db;

      function __construct()
      {
        try
        {
          self::$_db = new PDO("mysql:host=" . self::$_db_host . ";dbname=" . self::$_db_name, self::$_db_username , self::$_db_password);
        }    catch(PDOException $e)
             {
                echo "Verbindung zur Datenbank konnte leider nicht aufgebaut werden!";
                die();
             }
      }
      function isUserLoggedIn()
      {
          $stmt= self::$_db->prepare("SELECT User_ID FROM users WHERE Session=:sid");
          $sid = session_id();
          $stmt->bindParam(":sid", $sid);
          $stmt->execute();

          if($stmt->rowCount()===1)
            {
              return true;
            }
          else
            {
              return false;
            }
      }
      function login($benutzer, $pw)
      {
        $stmt=self::$_db->prepare("SELECT User_ID FROM users WHERE Benutzer=:benutzer AND Password=:pw");
        $stmt->bindParam(":benutzer",$benutzer);
        $stmt->bindParam(":pw",$pw);
        $stmt->execute();

        if($stmt->rowCount()===1)
        {
          $stmt=self::$_db->prepare("UPDATE users SET Session=:sid WHERE Benutzer=:benutzer AND Password=:pw");
                $sid= session_id();
          $stmt->bindParam(":sid", $sid);
          $stmt->bindParam(":benutzer",$benutzer);
          $stmt->bindParam(":pw",$pw);
          $stmt->execute();

          return true;
        }
            else
            {
              return false;
            }
      }

    function logout()
      {
        $stmt=self::$_db->prepare("UPDATE users SET Session='' WHERE Session=:sid");
        $sid= session_id();
        $stmt->bindParam(":sid", $sid);
        $stmt->execute();
      }
    function isUserRegistrated($_benutzer)
    {
      $stmt=self::$_db->prepare("SELECT benutzer FROM users WHERE benutzer=:benutzer");
      $stmt->bindParam(":benutzer",$_benutzer);
      $stmt->execute();

      if($stmt->rowCount()===1)
        {
          return true;
        }
      else
        {
          return false;
        }
    }
    function Registrieren($_benutzer, $_pw1)
      {
        $stmt=self::$_db->prepare("INSERT INTO users (benutzer, Password) VALUES (:benutzer, :Password)");
        $result=$stmt->execute(array('benutzer'=>$_benutzer, 'Password'=>$_pw1));
        if($result)
          {
            echo 'Du wurdest erfolgreich registriert. <a href="index.php?section=login">Zum Login</a>';
          }
        else
          {
            echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
          }
      }
  }
 ?>
