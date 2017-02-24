<?php
// Задача 1
$name = 'Юля';
$age = '29';
echo "Меня зовут $name ", '<br>';
echo "Мне $age лет", '<br>';
echo 'Особые символы: "\'!|\/\'"\\ ', '<br>';
echo '<hr>';

//Задача 2
/*Дана задача: На школьной выставке 80 рисунков.
 * 23 из них выполнены фломастерами, 40 карандашами, а остальные — красками.
 *Сколько рисунков, выполненные красками, на школьной выставке?
 */

$allItems = 80;
$feltItems = 23;
$pencilItems = 40;
$paintItems = $allItems - $feltItems - $pencilItems;

print <<<end
Дана задача: На школьной выставке $allItems рисунков.
 $feltItems из них выполнены фломастерами, $pencilItems карандашами, а остальные — красками.
 Сколько рисунков, выполненные красками, на школьной выставке? <br>
 Решение: $allItems - $feltItems - $pencilItems = $paintItems рисунков выполненых красками <br><hr>
end;

//Задача 3

define('light', 299792458);
if (defined('light') === true) {
    echo 'Константа опеределена. Скорость света ', light, 'км в секунду<br><hr>';
}

//Задача 4


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

/*Задание #6

Создайте массив $bmw с ячейками:
model
speed
doors
year
 Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”
Создайте   массивы   $toyota   и   $opel   аналогичные   массиву   $bmw   (заполните  данными)
Объедините три массива в один многомерный массив
Выведите значения всех трех массивов в виде:
CAR name
name ­ model ­speed ­ doors ­ year
Например:
CAR bmw
X5 ­120 ­ 5 ­ 2015
 */

$bmw = [];
$bmw['model'] = 'X5';
$bmw['speed'] = '120';
$bmw['doors'] = '5';
$bmw['year'] = '2015';

$toyota = [];
$toyota['model']='corolla';
$toyota['speed']='110';
$toyota['doors']='5';
$toyota['year']='2010';

$opel = [];
$opel['model']='zafira';
$opel['speed']='100';
$opel['doors']='5';
$opel['year']='2004';

$cars = [
    'bmw' => $bmw,
    'opel' => $opel,
    'toyota' => $toyota,
];
echo '<table border="1">';
foreach ($cars as $key => $value){

    echo "<tr><td>Car $key <br>";
    print implode(' ',$value);
    echo '</tr></td>';
}
echo '<br></table>';

/**
 * Created by PhpStorm.
 * User: July
 * Date: 2/23/2017
 * Time: 9:10 PM
 */