
<h3>Занятие №4. Работа с конструкциями if-else и switch-case:</h3>

<?php
/* echo "hello, world \n";
$a = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
var_dump($a);
$a = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
echo $a[3]; //выведет 'ср'


$arr = ['Привет, ', 'мир', '!'];
echo $arr[0].$arr[1].$arr[2], "\n";

$arr = [
    'ru'=>['голубой', 'красный', 'зеленый'],
    'en'=>['blue', 'red', 'green'],
];
echo $arr['ru'][0];
*/


echo "Примеры решения задач:", "   <br/> \n";
echo "Task - 2", "   <br/> \n";
// $min равна от 0 до 59
$min = 56;
if ($min >= 0 and $min <= 14) {
    echo '$min находится в первой четверти';
}if ($min >= 15 and $min <= 29) {
    echo '$min находится в второй четверти';
}if ($min >= 30 and $min <= 44) {
    echo '$min находится в третьей четверти';
}if ($min >= 45 and $min <= 59) {
    echo '$min находится в четвертой четверти';
}
echo "   <br/> \n";


echo "Task - 3", "   <br/> \n";
// Задача. Переменная $lang может принимать два значения: 'ru' и 'en'.
//Если она имеет значение 'ru', то в переменную $arr запишем массив дней недели
// на русском языке, а если имеет значение 'en' – то на английском. Решите задачу
// через 2 if, через switch-case и через многомерный массив без ифов и switch.

$arr = [];
$lang = 'ru';
if ($lang == 'ru') {
    $arr = ['Понедельник', 'Вторник', 'Среда'];
}
if ($lang == 'en') {
    $arr = ['Monday', 'Tuesday', 'Wednesday'];
}
echo $arr[0], "   <br/> \n";

switch ($lang) {
    case 'ru':
        $arr = ['Понедельник', 'Вторник', 'Среда'];
        break;
    case 'en':
        $arr = ['Monday', 'Tuesday', 'Wednesday'];
        break;
    default:
        echo 'переменная $lang не заданна или задана не верно';
        break;
}
echo $arr[1], "   <br/> \n";

$arr = [
    'ru'=>['пн', 'вт', 'ср','чт', 'пт', 'сб', 'вс'],
    'en'=>['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
];

//var_dump($arr[$lang]);
echo '<hr><br>';


echo "Работа с if-else:", "   <br/> \n";
echo "Tasks - 1, 2, 3, 4, 5, 8", "   <br/> \n";

$a = 0;
if ($a == 0) {
    echo 'Verno!', "   <br/> \n";
} else {
    echo 'Neverno!', "   <br/> \n";
}

echo "2 ...   <br/> \n";
if ($a > 0) {
    echo 'Verno';
} else {
    echo 'Neverno';
}
echo "   <br/> \n";


echo "3 ...   <br/> \n";
if ($a < 0) {
    echo 'Verno!';
} else {
    echo 'Neverno!';
}
echo "   <br/> \n";


echo "4 ...   <br/> \n";
if ($a >= 0) {
    echo 'Verno';
} else {
    echo 'Neverno';
}
echo "   <br/> \n";


echo "5 ...   <br/> \n";
if ($a <= 0) {
    echo 'Verno!';
} else {
    echo 'Neverno!';
}
echo "   <br/> \n";


echo "6 ...   <br/> \n";
if ($a != 0) {
    echo 'Verno';
} else {
    echo 'Neverno';
}
echo "   <br/> \n";


echo "7 ...   <br/> \n";
$a = 'test';
if ($a == 'test') {
    echo 'Verno!';
} else {
    echo 'Neverno!';
}
echo "   <br/> \n";


echo "8 ...   <br/> \n";
$a = 1;
if ($a === '1') {
    echo 'Verno';
} else {
    echo 'Neverno';
}
echo '<hr><br>';


echo "Работа с empty и isset:", "   <br/> \n";
echo "Tasks - 9, 10, 11, 12", "   <br/> \n";

$a = null;
if (empty($a)) {echo 'Verno!';} else {echo 'Neverno!';}
echo "   <br/> \n";


echo "10 ...   <br/> \n";
if (!empty($a)) {echo 'Verno';} else {echo "Neverno";}
echo "   <br/> \n";


echo "11 ...   <br/> \n";
if (isset($a)) {echo 'Verno!';} else {echo 'Neverno!';}
echo "   <br/> \n";


echo "12 ...   <br/> \n";
if (!isset($a)) {echo 'Verno!';} else {echo 'Neverno!';}
echo '<hr><br>';


echo "Работа с логическими переменными:", "   <br/> \n";
echo "Tasks - 13, 14", "   <br/> \n";

$var = false;
if ($var == true) {echo 'Verno';} else {echo 'Neverno';}
echo "   <br/> \n";
if ($var == true) echo 'Verno'; else echo 'Neverno';
echo "   <br/> \n";

echo "12 ...   <br/> \n";
if ($var != true) {echo 'Verno';} else {echo 'Neverno';}
echo "   <br/> \n";
if ($var != true) echo 'Verno'; else echo 'Neverno';
echo '<hr><br>';


echo "Работа с OR и AND:", "   <br/> \n";
echo "Tasks - 15, 16, 17, 18", "   <br/> \n";

$a = 2;
if ($a > 0 and $a < 5) echo 'Verno'; else echo 'Neverno';
echo "   <br/> \n";

echo "16 ...   <br/> \n";
$a = 2;
if ($a == 0 or $a == 2) $a += 7; else $a /= 10;
echo $a, "   <br/> \n";

echo "17 ...   <br/> \n";
$a = 0;
$b = 6;
if ($a <= 1 and $b >= 3) {echo $a + $b;} else {echo $a - $b;}
echo "   <br/> \n";

echo "18 ...   <br/> \n";
if (($a > 2 and $a < 11) or ($b >=6 and $b <14)) {
    echo 'Verno!';
} else {echo 'Neverno!';}
echo '<hr><br>';


echo "Работа с switch-case:", "   <br/> \n";
$num = 2;
switch ($num) {
    case 1:
        echo 'zima';
        break;
    case 2:
        echo 'vesna';
        break;
    case 3:
        echo 'leto';
        break;
    case 4:
        echo 'osen';
        break;
    default:
        echo 'не верно задано значение $num';
        break;
}
echo '<hr><br>';


echo "Tasks - 20...26", "   <br/> \n";

$day = 31;
if ($day >= 1 and $day <= 10) {
    echo 'переменная $day лежит в первой декаде месяца';
} elseif ($day >= 11 and $day <= 20) {
    echo 'переменная $day лежит в второй декаде месяца';
} elseif ($day >= 21 and $day <= 31) {
    echo 'переменная $day лежит в третьей декаде месяца';
} else {
    echo 'переменная $day задана не верно';
}
echo "   <br/> \n";


echo "21 ...   <br/> \n";
$month = 7;
if ($month > 0 and $month < 4) {echo 'Zima';}
elseif ($month > 3 and $month < 7) {echo 'Vesna';}
elseif ($month > 6 and $month < 10) {echo 'Leto';}
elseif ($month > 9 and $month < 13) {echo 'Osen';}
else {echo 'переменная $month задана не верно';}
echo '<hr><br>';


echo 'Определить является ли заданный год Высокосным', '<br>';
$year = 1244;
if (($year % 4 == 0) and ($year % 100 != 0)) {
    echo 'Высокосный год (по первому условию)';
} elseif ($year % 400 == 0) {
    echo 'Высокосный год (по второму условию)';
} else {
    echo 'Год не является высокосным';
}
echo '<br><br>';


echo "Другой вариант решения:   <br/> \n";
$year = 1600;
if (is_int($year/4) and (is_int($year/100) == false)) {
    echo "Год высокосный, 1е условие";
} elseif (is_int($year/400)) {
    echo "Год высокосный, 2е условие";
} else {
    echo "Год не является высокосным";
}
echo '<hr><br>';


echo "23 ...   <br/> \n";
$str = 'abcde';
if ($str[0] == 'a') {
    echo "da";
} else {
    echo 'net';
}
echo "   <br/> \n";


echo "24 ...   <br/> \n";
$str = '12345';
if ($str[0] == 1 and $str[1] == 2 and $str[2] == 3) {
    echo 'da';
} else {
    echo 'net';
}
echo "   <br/> \n";


echo "25 ...   <br/> \n";
$a = '367';
$b = $a[0] + $a[1] + $a[2];
var_dump($b);
echo "   <br/> \n";


echo "26 ...   <br/> \n";
$a = '123321';
if (($a[0] + $a[1] + $a[2]) == ($a[3] + $a[4] + $a[5])) {
    echo 'da';
} else {
    echo 'net';
}





















?>