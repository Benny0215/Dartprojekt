<?php
session_start();
require_once 'php/mysql.php';
$db= new DB();

// Auto Logout //
if ($db->isUserLoggedIn()===true)
  {
      if(isset($_SESSION["timestamp"]))
        {
        if(time() - $_SESSION["timestamp"] >600)  //subtract new timestamp from the old one
        {
          echo"<script>alert('10 Minutes inaktiv -- Timeout!');</script>";
          unset($_SESSION["timestamp"]);
          $db->logout();
        }
        }
        else
        {
          $_SESSION['timestamp']= time(); //set new timestamp
        }

}
////////////////

  if (isset($_GET["section"]))
  {
      $section=$_GET["section"];
  }
  else {
    $section="";
      }


 ?>



<html>
  <head>
      <title>Dartenbank</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/style.css"/>

       <!--Älterer Browser als Internet Explorer 9 -->
      <!--[if lt IE 9]>
        <script>
          document.createElement('header');
          document.createElement('nav');
          document.createElement('footer');
        </script>
      <![endif]-->
    </head>
    <body>
      <div id="wrapper" class="shadow">
          <header>
            HEADER
          </header>
          <div id="top-menü" class="shadow">
            <?php include("php/menu.php");?>
          </div>
          <div id="content">
          <?php include("php/sites.php") ?>
          </div>
    </div>
    <div id ="footer">
      <?php include("php/footer.php");?>
    </div>
  </body>
</html>
