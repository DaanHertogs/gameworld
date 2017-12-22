<?php
$menu ="menu.php";
$footer = "inc/footer.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
    <meta name="description" content="Game World">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <title>GameWorld</title>
 </head>
<body>
   <div class="logo">
     <a href="index.php">Game World</a>
   </div>

   <?php
   if(file_exists($menu))
     {
       include($menu);
     }

 ?>

   <div id="main-container">
     <div class="centered"><marquee>Welcome to Game World</marquee></div>
           <nav class="main-nav">
        <?php
        include ("inc/menu.php");
         ?>
           </nav>
    </div>
<div class="ps4-box">
<a class="cat-block" href="games.php?gameCategoryId=1"></a>
</div>
<div class="xbox-box">
<a class="cat-block" href="games.php?gameCategoryId=3"></a>
</div>
<div class="pc-box">
<a class="cat-block" href="games.php?gameCategoryId=2"></a>  
</div>
<div class="footer">
  <?php
  if(file_exists($footer))
    {
      include($footer);
    }

?>
<p>Made by Daan Hertogs    |     ROC Ter AA   | © 2017</p>
</div>
</body>
</html>
