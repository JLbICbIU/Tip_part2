<?php
$t = true;
$f = false;
?>

<style>
    th,
    td {
        width: 100px;
        text-align: center;
    }
</style>

<table style="width:100%">
    <caption>
        <h3>
            7. Дайте ответ на вопрос, как работает оператор xor? В каких случаях он возвращает значение true, в каких – false? Для этого напишите скрипт, который выводит  значения операций со всеми возможными вариантами операндов (4 варианта). Чему равно $a xor $a для любых значений $a?
        </h3>
    </caption>
    <tr>
        <th>a</th>
        <th>b</th>
        <th>a xor b</th>
        <th>a xor a</th>
    </tr>
    <tr>
        <td><?php var_export($t) ?></td>
        <td><?php var_export($t) ?></td>
        <td><?php var_export($f) ?></td>
        <td><?php var_export($f) ?></td>
    </tr>
    <tr>
        <td><?php var_export($t) ?></td>
        <td><?php var_export($f) ?></td>
        <td><?php var_export($t) ?></td>
        <td><?php var_export($f) ?></td>
    </tr>
    <tr>
        <td><?php var_export($t xor $t) ?></td>
        <td><?php var_export($t xor $f) ?></td>
        <td><?php var_export($f xor $t) ?></td>
        <td><?php var_export($f xor $f) ?></td>
    </tr>
    <tr>
        <td><?php var_export($t xor $t) ?></td>
        <td><?php var_export($t xor $t) ?></td>
        <td><?php var_export($f xor $f) ?></td>
        <td><?php var_export($f xor $f) ?></td>
    </tr>
</table>