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


if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['operation'])) 
    $result = mathOperation($_POST['a'], $_POST['b'], $_POST['operation']);
else 
    $result = ""; 
?> 

<html>
<head>
    <title>Галерея изображений</title>
</head>
<body>
    <a href="..">Назад</a>
    <form method="post"> 
        <input type="text" name="a" />
        <input type="text" name="b" /> =
        <?php echo $result; ?> <br>
        <input name="operation" type="submit" value="+" />
        <input name="operation" type="submit" value="-" />
        <input name="operation" type="submit" value="*" />
        <input name="operation" type="submit" value="/" />
    </form>
</body>
</html>