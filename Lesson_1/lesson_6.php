
<h3>Занятие №6. Работа с математическими функциями:</h3>

<?php
//Задача. Найдите корень из числа 1000. Округлите его в большую и меньшую стороны.
// В массив $arr запишите первым элементом корень из числа, вторым элементом -
// округление в меньшую сторону, третьим элементом - в большую.

$num = sqrt(1000);
$arr[] = $num;
$arr[] = floor($num);
$arr[] = ceil($num);
var_dump($arr);
echo "   <br/>\n";

$arr = [$num, floor($num), ceil($num)];
var_dump($arr);

echo '<hr><br>';
echo 'Следующий пример', "   <br/>\n";
//Заполните массив 30-ю случайными числами от 1 до 10.
$arr = [];
for ($i = 0; $i < 30; $i++) {
    $arr[$i] = mt_rand(1, 10);
}
var_dump($arr);
echo '<hr><br>';


echo 'Задачи для решения', "   <br/>\n";
echo 'Работа с %', "   <br/>\n";
echo 'Task - 1', "   <br/> \n";
$a=10;
$b=3;
echo $a % $b, "   <br/>\n";


echo '<hr><br>';
echo 'Task - 2', "   <br/> \n";
$a=10; $b=3;
if (!($a % $b)) {
    echo 'Делится, ' . $a / $b, "   <br/>\n";
} else {
    echo 'Делится с остатком, ' . $a % $b, "   <br/>\n";
}


echo '<hr><br>';
echo 'Работа со степенью и корнем', "   <br/>\n";
echo 'Task - 3', "   <br/> \n";
$st = pow(2, 10);
echo $st, "   <br/>\n";


echo "   <br/>\n";
echo 'Task - 4', "   <br/> \n";
echo sqrt(245), "   <br/> \n";


echo "   <br/>\n";
echo 'Task - 5', "   <br/> \n";
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $elem) {
    $sum += pow($elem, 2);
    echo $sum, "   <br/> \n";
}
echo sqrt($sum), "   <br/> \n";


echo '<hr><br>';
echo 'Работа с функциями округления', "   <br/>\n";
echo 'Task - 6', "   <br/> \n";
$a = sqrt(379);
echo round($a), "   <br/> \n";
echo round($a, 1), "   <br/> \n";
echo round($a, 2), "   <br/> \n";


echo "   <br/>\n";
echo 'Task - 7', "   <br/> \n";
$a = sqrt(587);
$arr = [];
$arr['floor'] = floor($a);
$arr['ceil'] = ceil($a);
var_dump ($arr);


echo '<hr><br>';
echo 'Работа с min и max', "   <br/>\n";
echo 'Task - 8', "   <br/> \n";
$arr = [4, -2, 5, 19, -130, 0, 10];
echo min($arr), "   <br/> \n";
echo max($arr), "   <br/> \n";


echo '<hr><br>';
echo 'Работа с рандомом', "   <br/>\n";
echo 'Task - 9', "   <br/> \n";
echo mt_rand(1, 100), "   <br/> \n";


echo "   <br/>\n";
echo 'Task - 10', "   <br/> \n";
$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = mt_rand(1, 100);
}
var_dump($arr);


echo '<hr><br>';
echo 'Работа с модулем', "   <br/>\n";
echo 'Task - 11', "   <br/> \n";
$a = 3; $b = -7;
$abs = abs($a - $b);
echo $abs, "   <br/> \n";


echo "   <br/>\n";
echo 'Task - 12', "   <br/> \n";
$arr = [1, 2, -1, -2, 3, -3];
foreach ($arr as $elem) {
    $arr_1[] = abs($elem);
}
var_dump($arr_1);
echo "   <br/>\n";


echo '<hr><br>';
echo 'Задачи', "   <br/>\n";
echo 'Task - 13', "   <br/> \n";
$a = 15;
$arr = [];
for ($i = 1; $i <= $a; $i++) {
    if ($a % $i == 0) {
        $arr[] = $i;
    }
}
var_dump($arr);
echo "   <br/>\n";
echo "   <br/>\n";


echo 'Task - 14', "   <br/> \n";
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = 0;
$i = 0;
foreach ($arr as $elem) {
    if ($result <= 10) {
        $result += $elem;
        $i++;
    }
}
echo $i, "   <br/> \n";
echo $result, "   <br/> \n";














