<?php
  //initializing variables
  $temperature = floatval($_POST["temp-entered"]);
  $message = "";
  //if/then statement: if temperature is greater or equal to 15 degrees
  if ($temperature >= 15) {
    $message = "It is relatively hot out! You probably won't need a jacket, but you might want to wear sunscreen or a baseball cap.";
  }
  //else represents a temperature less than 15 degrees
  else {
    $message = "It is pretty chilly out! We suggest you wear some kind of jacket to stay warm.";
  }
  //displaying the correct message to the screen
  echo "$message";
?>
