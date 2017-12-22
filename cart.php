<?php
// cart.php

function daan($var)
{
  echo "<pre>";
  var_dump($var);
  echo "</pre>";

}

session_start();

//daan($_POST);

if($_SERVER['REQUEST_METHOD'] == "POST")
{


 foreach ($_POST['selectedId'] as $key => $value) {
   # code...

 //  echo "the key is " . $key . "  and the value is " . $value;
 //  echo "<br />";
   $_SESSION['spelId'][] = $value;

 }
}


header("location:checkout.php");

?>
