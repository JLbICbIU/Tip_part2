<?php 
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
            $result = $arg1+$arg2;
        break;
        case '-':
            $result = $arg1-$arg2;
        break;
        case '*':
            $result = $arg1*$arg2;
        break;
        case '/':
            $result = ($arg2 == 0) ? INF : $arg1/$arg2;
        break;
        default:
            echo "Операция '$operation' не предусмотрена.";
    }
    return $result;
}


if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['operation'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $operation = $_POST['operation'];
    if ($a!=="" && $b!=="")
        $result = mathOperation($a, $b, $operation);
    else 
        $result = "Введены не все параметры"; 
} else {
    $result = ""; 
    $a = false;
    $b = false;
    $operation = false;
}
?> 

<html>
<head>
    <title>Галерея изображений</title>
</head>
<body>
    <a href="..">Назад</a>
    <form method="post"> 
        <input type="text" name="a" value="<?php echo ($a!==false) ? ($a===0) ? '0' : $a : false; ?>"/><?php if ($operation!="no") echo $operation; ?>
        <input type="text" name="b" value="<?php echo ($b!==false) ? ($b===0) ? '0' : $b : false; ?>"/> =
        <?php echo $result; ?> <br>
        <input name="operation" type="submit" value="+" />
        <input name="operation" type="submit" value="-" />
        <input name="operation" type="submit" value="*" />
        <input name="operation" type="submit" value="/" />
    </form>
</body>
</html>