<?php 
$x = 10; 
$y = 15;
?>

<html>

<head>
  <title>Task11</title>
</head>

<body>
  <?php 
    echo "x = $x<br>y = $y<br>";
    echo "Первый способ:<br>";
    list($x,$y) = array($y,$x);
    echo "x = $x<br>y = $y<br>";
    echo "Второй способ:<br>";
    $x=$x+$y;
    $y=$x-$y;
    $x=$x-$y;
    echo "x = $x<br>y = $y<br>";

  ?>
</body>