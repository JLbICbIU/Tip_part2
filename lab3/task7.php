<h3>
    7. Напишите функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку. 
</h3>

<?php
function space_to_under($str) {
    return preg_replace('/[[:space:]]+/', '_', $str);
}

$str = 'Какая-то строчка с пробелами.';
echo "$str<br>";
echo space_to_under($str);
?>