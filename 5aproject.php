<!DOCTYPE html>
<html>
<body>

<?php

$y = 2;
$x = 2;

while($x + $y < 1000) {
  if ($x == 6) {
    $x+=2;
    continue;
  }
   if ($x == 18) {
    break; }
  echo "The numbers are: $x and $y <br>";
  $x+=2;
  $y*=2;

}
?>

</body>
</html>
