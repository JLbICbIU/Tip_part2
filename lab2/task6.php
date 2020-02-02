<h3>
    Напишите функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: <br>22 часа 15 минут <br>21 час 43 минуты <br>итд. 
</h3>

<?php 
function str_minute($minute) {
    if ($minute>5 && $minute<20)
        return 'минут';
    if ($minute[strlen($minute)-1]==1) 
        return 'минута';
    elseif ($minute[strlen($minute)-1]<5)
        return 'минуты';
    else 
        return 'минут';
}

function str_hour($hour) {
    if ($hour>5 && $hour<20)
        return 'часов';
    elseif ($hour[strlen($hour)-1]==1) 
        return 'час';
    elseif ($hour[strlen($hour)-1]>1 && $hour[strlen($hour)-1]<5)
        return 'часа';
    else
        return 'часов';
}

date_default_timezone_set('Europe/Moscow');
$hour = date('H');
$minute = date('i');
echo "$hour ".str_hour($hour)." $minute ".str_minute($minute);