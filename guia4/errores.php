<?php
if (count($errors) > 0) {
  echo "<div class='error'>";
  foreach ($errors as $error) {
    echo "<p>$error</p>";
  }
  echo "</div>";
}

function writeMessage($a, $b = 100)
{
  echo "Gracias por usar el programa";
  return "Gracias por usar el programa, hasta la próxima!";
}
