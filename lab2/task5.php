<h3>
    5. С помощью рекурсии организуйте функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
</h3>

<?php 
function power($val, $power) {
    if ($power == 0) return 1;
    if ($power % 2 == 0) {
        if ($power == 2) return $val * $val;
        return power(power($val, $power / 2), 2);
    }
    return $val*power($val, $power-1);
}

$val = 2;
$power = rand(0, 20);

echo "val^(power) = $val^($power) = ".power($val, $power);