<?php
session_start();
  if (isset($_GET["section"]))
  {
      $section=$_GET["section"];
  }
  else {
    $section="";
      }

  require_once 'php/mysql.php';
  $db= new DB();
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
