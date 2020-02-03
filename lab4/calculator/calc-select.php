<?php 
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'sum':
            $result = $arg1+$arg2;
        break;
        case 'dif':
            $result = $arg1-$arg2;
        break;
        case 'mult':
            $result = $arg1*$arg2;
        break;
        case 'div':
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
        <select name="operation">
            <option value="sum">+</option>
            <option value="dif">-</option>
            <option value="mult">*</option>
            <option value="div">/</option>
        </select>
        <input type="text" name="b" /> 
        <input type="submit" value="=" /> <?php echo $result; ?> 
    </form>
</body>
</html>