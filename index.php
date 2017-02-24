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

define ('light',299792458);
if (defined('light')===true) {
    echo 'Константа опеределена. Скорость света ', light, 'км в секунду<br><hr>';
}

//Задача 4


$age=random_int(1,100);
echo $age,'<br>';

if ($age >= 18 && $age <= 65){
    echo 'Вам еще работать и работать';
} elseif ($age > 65){
    echo 'Вам пора на пенсию';
} elseif ($age < 18 && 1 < $age){
    echo 'Вам еще рано работать';
}

if ($age > 100 && 1 > $age){
    echo 'Неизвестный возраст';
}
echo '<br><hr>';

/**
 * Created by PhpStorm.
 * User: July
 * Date: 2/23/2017
 * Time: 9:10 PM
 */