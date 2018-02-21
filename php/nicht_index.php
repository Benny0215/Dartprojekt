<?php
  if(isset($_GET["section"]))
  {
      $section=$_GET["section"];
  }
  else {
    $section="";
  }
 ?>
 <html>
   <head>
       <title>Responsive Website</title>
       <meta charset="utf-8">
       <link rel="stylesheet" href="style.css"/>

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
           <div id="top-menü">
             Menü
           </div>
           <div id="content">
             INHALT bla bla <br />
             adsdsajfasfa
             aadasdsa <br />
             <br />
             <br />
             <br />
             adsdsajfasfa
           </div>
     </div>
     <div id ="footer">
       &copy Deutsche Telekom IT GmbH, 2018
     </div>
   </body>
 </html>
