<h3>
    3. Реализуйте основные 4 арифметические операции (+, -, *, %)  в виде функций с двумя параметрами. Обязательно используйте оператор return.
</h3>

<?php 
function sum($a, $b) {
    return $a+$b;
}
function dif($a, $b) {
    return $a-$b;
}
function mult($a, $b) {
    return $a*$b;
}
function div($a, $b) {
    return ($b == 0) ? INF : $a/$b;
}

$a = rand(-10, 10);
$b = rand(-10, 10);

echo "a + b = $a + $b = ".sum($a, $b)."<br>";
echo "a - b = $a - $b = ".dif($a, $b)."<br>";
echo "a * b = $a * $b = ".mult($a, $b)."<br>";
echo "a / b = $a / $b = ".div($a, $b)."<br>";
?>

<h3>
   4. Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполните одну из арифметических операций (используйте функции из пункта 4) и верните полученное значение (используйте switch).
</h3>

<?php 
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'сумма':
            $result = sum($arg1, $arg2);
            echo "a + b = $arg1 + $arg2 = $result<br>";
        break;
        case 'разница':
            $result = dif($arg1, $arg2);
            echo "a - b = $arg1 - $arg2 = $result<br>";
        break;
        case 'умножение':
            $result = mult($arg1, $arg2);
            echo "a * b = $arg1 * $arg2 = $result<br>";
        break;
        case 'деление':
            $result = div($arg1, $arg2);
            echo "a / b = $arg1 / $arg2 = $result<br>";
        break;
        default:
            echo "Операция '$operation' не предусмотрена.";
    }
    return $result;
}
function chooseOperation($number) {
    switch ($number) {
        case 0:
            return 'сумма';
        case 1:
            return 'разница';
        case 2:
            return 'умножение';
        case 3:
            return 'деление';
        default:
            echo "Операции под номером $number не предусмотрено.";
            return null;
    }
}

$operation = rand(0, 3);
$operation = chooseOperation($operation);
$c = mathOperation($a, $b, $operation);
?>