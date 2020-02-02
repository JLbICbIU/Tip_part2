<table style="width:100%">
    <caption>
        <h3>
            1. С помощью оператора echo выведите на страницу<br>
            2. Повторите вывод, заключив переменные в двойные кавычки (")<br>
            3. Повторите вывод, заключив переменные в одинарные кавычки (')<br>
        </h3>
    </caption>
    <?php $int = 228;
    $float = 22.8;
    $bool = false;
    $str = 'Строка';
    const CON = 'Константа'; ?>
    <tr>
        <th></th>
        <th>1. $var</th>
        <th>2. "$var"</th>
        <th>3. '$var'</th>
    </tr>
    <tr>
        <td>a) Целочисленную переменную:</td>
        <td><?php echo $int ?></td>
        <td><?php echo "$int" ?></td>
        <td><?php echo '$int' ?></td>
    </tr>
    <tr>
        <td>б) Переменную дробного типа:</td>
        <td><?php echo $float ?></td>
        <td><?php echo "$float" ?></td>
        <td><?php echo '$float' ?></td>
    </tr>
    <tr>
        <td>в) Переменную булевского типа:</td>
        <td>
            [<?php echo $bool ?>,
            <?php echo var_export((bool) $bool) ?>,
            <?php echo true == $bool ? 'true' : 'false' ?>]
        </td>
        <td>
            [<?php echo "$bool" ?>,
            <?php echo var_export((bool) "$bool") ?>,
            <?php echo true == "$bool" ? 'true' : 'false' ?>]
        </td>
        <td>
            [<?php echo '$bool' ?>,
            <?php echo var_export((bool) '$bool') ?>,
            <?php echo true == '$bool' ? 'true' : 'false' ?>]
        </td>
    </tr>
    <tr>
        <td>г) Строковую переменную:</td>
        <td><?php echo $str ?></td>
        <td><?php echo "$str" ?></td>
        <td><?php echo '$str' ?></td>
    </tr>
    <tr>
        <td>д) Константу:</td>
        <td><?php echo CON ?></td>
        <td><?php echo "CON" ?></td>
        <td><?php echo 'CON' ?></td>
    </tr>
</table>