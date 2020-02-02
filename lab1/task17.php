<?php
$t = true;
$f = false;
?>

<style>
    th, td {
        width: 100px;
        text-align: center;
    }
</style>

<html>
    <head>
        <title>Task11</title>
    </head>
    <body>
        <table>
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
    </body>