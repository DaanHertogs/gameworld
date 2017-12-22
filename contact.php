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
 <div class="logo">
   <a href="index.php">Game World</a>
      <h1>-Contact</h1>

</div>
 <body>


     <nav class="main-nav">
       <?php
      include "inc/menu.php"
       ?>
      </nav>

      <html>
      <body>
        <div id= "form">
      <form action="" method="post">
      <p>Your Name: <input type="text" name="yourname" /><br />
      E-mail: <input type="text" name="email" /></p>
      <p>Do you like this website?
      <input type="radio" name="likeit" value="Yes" checked="checked" /> Yes
      <input type="radio" name="likeit" value="No" /> No
      <input type="radio" name="likeit" value="Not sure" /> Not sure</p>

      <p>Your comments:<br />
      <textarea name="comments" rows="10" cols="40"></textarea></p>

      <p><input type="submit" value="Send it!"></p>
      </form>

      </div>
      <div id="picture-box2">
        <img src="images/contactus.png" height="200px" >
      </div>
      <div id="footer2">
        <?php
        if(file_exists($footer))
          {
            include($footer);
          }

      ?>
      <p>Made by Daan Hertogs    |     ROC Ter AA     | © 2017</p>

</div>
      </body>
      </html>
