<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Esercizio 2 slide 38 php</title>
  </head>
  <body>

<?php

  $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
  echo $testo;
  echo "<br>";
  $testoLenght = strlen($testo);
  echo "Lunghezza del testo: $testoLenght";
  echo "<br>";
  $badWord = $_GET['badword'];
  echo str_replace($badWord, '***', $testo);



 ?>




  </body>
</html>
