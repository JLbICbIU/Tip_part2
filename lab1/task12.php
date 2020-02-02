<?php
  $int = 228;
  $float = 22.8;
  $bool = true;
  $str = 'ТИП';
  define("CON1", "Константа1");
  const CON2 = 'Константа2';
?>
<html>
<head>
  <title>Task11</title>
</head>
<body>
  <ol type='a'>
    <li>Целочисленную переменную<br>
    <?php echo "$int" ?>
    <li>Переменную дробного типа<br>
    <?php echo "$float"?>
    <li>Переменную булевского типа<br>
    <?php echo "$bool" ?><br>
    <?php echo var_export((bool)"$bool") ?><br>
    <li>Строковую переменную<br>
    <?php echo "$str" ?>
    <li>Константу<br>
    <?php echo "CON1"?><br>
    <?php echo "CON2"?>
  </ol>
</body>