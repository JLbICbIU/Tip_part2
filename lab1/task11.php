<?php
  $int = 228;
  $float = 22.8;
  $bool = false;
  $str = 'ТИП';
  const CON = 'Константа';
?>
<html>
<head>
  <title>Task11</title>
</head>
<body>
  <ol type='a'>
    <li>Целочисленную переменную<br>
    <?php echo $int ?>
    <li>Переменную дробного типа<br>
    <?php echo $float ?>
    <li>Переменную булевского типа<br>
    <?php echo $bool ?><br>
    <?php echo var_export((bool)$bool) ?><br>
    <?php echo true == $bool ? 'true' : 'false'?>
    <li>Строковую переменную<br>
    <?php echo $str ?>
    <li>Константу<br>
    <?php echo CON ?>
  </ol>
</body>