<?php
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
<h1>-About us</h1>
 </div>

 <div id="about-container">
         <nav class="main-nav">
      <?php
      include ("inc/menu.php");
       ?>
         </nav>
    </div>
         <div id="text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
           <a href="contact.php">Click here if you want to contact us</a>

         </div>
         <div id="picture-box1">
                <img src="images/about.jpg" height="200px" width="300px">
          </div>
         <div class="footer">
           <?php
           if(file_exists($footer))
             {
               include($footer);
             }

         ?>
         <p>Made by Daan Hertogs   |     ROC Ter AA     | © 2017</p>

  </div>
</body>
</html>
