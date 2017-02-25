<?php
// Задача 1
$name = 'Юля';
$age = '29';
echo "Меня зовут $name ", '<br>';
echo "Мне $age лет", '<br>';
echo 'Особые символы: "\'!|\/\'"\\ ', '<br>';
echo '<hr>';

//Задача 2


$allItems = 80;
$feltItems = 23;
$pencilItems = 40;
$paintItems = $allItems - $feltItems - $pencilItems;

// такой вывод мало кто используют в основном оборачивают в "" в дальнейшем не рекомендую такой использывать вобще
// только в качестве академического интереса 
print <<<end
Дана задача: На школьной выставке $allItems рисунков.
 $feltItems из них выполнены фломастерами, $pencilItems карандашами, а остальные — красками.
 Сколько рисунков, выполненные красками, на школьной выставке? <br>
 Решение: $allItems - $feltItems - $pencilItems = $paintItems рисунков выполненых красками <br><hr>
end;

//Задача 3

define('light', 299792458);
if (defined('light') === true) {
    echo '<p>Константа опеределена. Скорость света ' . light . 'км в секунду</p><hr>';
}

//Задача 4

// по идеи надо учитывать еще и 0 ведь это положительное число соответственно и возраст неизвестен
$age = random_int(1, 100);
echo $age, '<br>';

if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age < 18 && 1 < $age) {
    echo 'Вам еще рано работать';
}

if ($age > 100 && 1 > $age) {
    echo 'Неизвестный возраст';
}
echo '<br><hr>';

// Задача 5

$day = random_int(1, 7);

switch ($day) {
    case 1:
        echo 'Понедельник. ', 'Это рабочий день';
        break;
    case 2:
        echo 'Вторник. ', 'Это рабочий день';
        break;
    case 3:
        echo 'Среда. ', 'Это рабочий день';
        break;
    case 4:
        echo 'Четверг. ', 'Это рабочий день';
        break;
    case 5:
        echo 'Пятница. ', 'Это рабочий день';
        break;
    case 6:
        echo 'Суббота. ', 'Шаббат работать нельзя';
        break;
    case 7:
        echo 'Воскресенье. ', 'Это выходной день';
        break;
    default :
        echo 'Неизвестный день';
}
echo '<br><hr>';

//Задание 6

// можно было так же записать как 
// $bmw = ['model' => 'X5', 'speed' => 120]; это к справки
$bmw = [];
$bmw['model'] = 'X5';
$bmw['speed'] = '120';
$bmw['doors'] = '5';
$bmw['year'] = '2015';

$toyota = [];
$toyota['model'] = 'corolla';
$toyota['speed'] = '110';
$toyota['doors'] = '5';
$toyota['year'] = '2010';

$opel = [];
$opel['model'] = 'zafira';
$opel['speed'] = '100';
$opel['doors'] = '5';
$opel['year'] = '2004';

$cars = [
    'bmw' => $bmw,
    'opel' => $opel,
    'toyota' => $toyota,
];
echo '<table cellspacing="0" border="1" cellpadding="5" >';
foreach ($cars as $key => $value) {
    echo "<tr><td>Car $key<br>" . implode(' ', $value) . '</tr></td>';
}
echo '<br></table><hr>';

//Задание 7


echo 'Таблица умножения<br>' . "\n";

echo '<table cellspacing="0" border="1" cellpadding="5">' . PHP_EOL;

for ($i = 1; $i < 10; $i++) {
    echo "\t<tr>\n";
    for ($j = 1; $j < 10; $j++) {
        $sum = $i * $j;
        if ($i % 2 === 0 && $j % 2 === 0) {
            echo "\t\t<td>($sum)</td>\n";
        } elseif ($i % 2 === 1 && $j % 2 === 1) {
            echo "\t\t<td>[$sum]</td>\n";
        } else {
            echo "\t\t<td>$sum</td>\n";
        }
    }
    echo "\t</tr>\n";
}
echo '</table><hr>' . PHP_EOL;


//Задание 8

// на иврите?

$str = 'ахат штайм шалош арба хамеш шеш шева шмоне тейша эсэр';
print $str . '<br>';

$arr = explode(' ', $str);
print implode(' ', $arr) . '<br>';

$i = 0;
$count = count($arr);
$reversarr = [];
while ($i < $count) {
    $i++;
    $reversarr[$i] = $arr[$count - $i];

}

$reversStr = implode(',', $reversarr);
print $reversStr . '<hr>';
