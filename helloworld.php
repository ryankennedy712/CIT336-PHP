<!DOCTYPE html>
<html>
<body>

<?php
  $txt = "PHP";
  echo "Don't hate " . $txt . " yet.";
  echo "<br>";
  echo "<br>";

  $t = date("s");
  #if ($t[0] = "0") I figured I had todo something like this.
  #$second = substr($t, -1); apprently PHP is very forgiving with varible types.
  if ($t > "30")
  {
      echo "You are over halfway through!";
  }
  else
  {
      echo "Unlucky :(";
  }
  $timeleft = abs($t - 60);
  echo "<br>";
  echo "Time left in this minute: " . $timeleft;


?>


</body>
</html>
