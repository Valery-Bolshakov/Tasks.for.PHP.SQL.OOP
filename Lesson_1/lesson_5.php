
<h3>Занятие №5. Работа с циклами foreach, for, while:</h3>

<?php
/*
Для счетчиков принято использовать буквы i, j и k.

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
foreach ($arr as $elem)
    echo $elem; //выведет: '1', '2', '3' и так далее...


$i = 1; //начальное значение переменной $i
while ($i <= 5) {
    echo $i . '<br>';
    $i++;
}
while ( пока выражение истинно ) {
	тут пишется код, который выполнится много раз;
}


for ('начальные команды'; 'условие окончания цикла'; 'команды после прохода цикла') {
    echo 'тело цикла';
	}

for ($i = 0; $i < 10; $i++) {
    echo $i.'<br>'; //выведет 0, 1, 2... 9
}
for ($i = 0, $j = 2; $i < 10; $i++, $j++,  $i = $i + $j) {
    echo 'тело цикла';
}
*/

$arr = [10, 20, 15, 17, 24, 35];
$result = 0;
foreach ($arr as $elem) {
    $result += $elem;
}
echo $result, "   <br/> \n";
echo " ...   <br/> \n";

/*for ($i = 1; $i <= 100; $i++){
    echo $i, "   <br/>\n";
}*/
echo '<hr><br>';


echo "Работа с foreach:", "   <br/> \n";
echo "Tasks - 1...5", "   <br/> \n";

echo "1 ...   <br/> \n";
$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $elem) {
    echo $elem. "   <br/> \n";
}

echo "2 ...   <br/> \n";
$result = 0;
$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem) {
    $result += $elem;
}
echo $result, "   <br/> \n";

echo "3 ...   <br/> \n";
$result = 0;
$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem) {
    $result += ($elem * $elem);
}
echo $result, "   <br/> \n";

echo "4 ...   <br/> \n";
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $key=>$elem) {
    echo $key. ' - ' .$elem. "   <br/> \n";
}

echo "5 ...   <br/> \n";
$arr = ['Kolia'=>'200', 'Dima'=>'300','Max'=>'400'];
foreach ($arr as $key=>$elem) {
    echo $key. ' - зарабатывает ' .$elem. ' доларов.', "   <br/> \n";
}
echo '<hr><br>';


echo "Работа с Циклы while и for:", "   <br/> \n";
echo "Tasks - 6...9", "   <br/> \n";

echo "6 ...   <br/> \n";
/*$i = 1;
while ($i <= 100) {
    //echo $i, "   <br/> \n";
    $i++;
}
for ($i = 1; $i <= 100; $i++) {
    echo $i, "   <br/>\n";
}*/


echo "7 ...   <br/> \n";
$i = 11;
while ($i <= 33) {
    //echo $i, "   <br/> \n";
    $i++;
}
for ($i = 11; $i <= 33; $i++) {
    echo $i, "<br/>\n";
}


echo "8 ...   <br/> \n";
/*$i = 0;
while ($i <= 100) {
    if ($i % 2 != 0) {
        echo $i, "   <br/> \n";
    }
    $i++;
}
for ($i = 0; $i <=100; $i++) {
    if ($i % 2 != 0) {
        echo $i, "   <br/> \n";
    }
}*/


echo "9 ...   <br/> \n";
$i = 1;
$result = 0;
while ($i <= 100) {
    $result += $i;
    $i++;
}
echo 'сумма чисел от 1 до 100 равна ', $result, "   <br/> \n";

for ($i = 1, $result = 0; $i <=100; $i++) {
    $result += $i;
}
echo 'сумма чисел от 1 до 100 равна ', $result, "   <br/> \n";
echo '<hr><br>';


echo "Задачи:", "   <br/> \n";
echo "Tasks - 10...16", "   <br/> \n";

$arr = [2, 5, 9, 15, 0, 4];
foreach ($arr as $elem) {
    if ($elem > 3 and $elem < 10) {
        echo $elem, "   <br/> \n";
    }
}
echo '<hr><br>';


echo "Task - 11 ...", "   <br/> \n";
$arr = [2, -5, 9, 15, 0, -4];
$result = 0;
foreach ($arr as $elem) {
    if ($elem > 0) {
        $result += $elem;
    }
}
echo 'сумма положительных элементов = ', $result, "   <br/> \n";
echo '<hr><br>';


echo "Task - 12 ...", "   <br/> \n";
$arr = [1, 2, 5, 9, 4, 13, 4, 10];
foreach ($arr as $elem) {
    if ($elem == 4) {
        echo 'Есть!', "   <br/> \n";
        break;
    }
}
echo '<hr><br>';


echo "Task - 13 ...   <br/> \n";
$arr = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr as $elem) {
    if ($elem[0] == 1 or $elem[0] == 2 or $elem[0] == 5) {
        echo $elem, "   <br/> \n";
    }
}
echo '<hr><br>';


echo "Task - 14 ...   <br/> \n";
$str = '-';
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $elem) {
    $str .= $elem.'-';
}
echo $str, "   <br/> \n";
echo '<hr><br>';


echo "Task - 15 ...   <br/> \n";
$week = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
foreach ($week as $elem) {
    if ($elem == 'сб' or $elem == 'вс') {
        ?>
        <p> <b> <?php echo $elem; ?> </b> </p>
        <?php
    } else {
        echo $elem, "   <br/> \n";
    }
}
echo '<hr><br>';


echo "Task - 16 ...   <br/> \n";
$week = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$day = 'чт';
foreach ($week as $elem) {
    if ($elem == $day) {
        ?>
        <p> <i> <?php echo $elem; ?> </i>  <br> </p>
        <?php
    } else {
        echo $elem, "   <br/> \n";
    }
}
echo '<hr><br>';


echo "Task - 17 ...   <br/> \n";
$arr = [];
for ($i = 0, $j = 1; $j <= 100; $i++, $j++){
    $arr[$i] = $j;
}
echo $arr, "   <br/>\n";
//var_dump($arr);
echo "   <br/>\n";
echo '<hr><br>';


echo "Task - 18 ...   <br/> \n";
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $key=>$elem) {
    $en[] = $key;
    $ru[] = $elem;
}
var_dump($en);
echo "   <br/>\n";
var_dump($ru);
echo '<hr><br>';


echo "Task - 19 ...   <br/> \n";
echo 'Решение через цикл while:', "   <br/>\n";
$num = 1000;
$i = 0;
while ($num >= 50) {
    $num /= 2;
    $i++;
}
echo 'получилось число: '.$num, "   <br/>\n";
echo 'прошло - '.$i.' итераций', "   <br/>\n";

echo "   <br/>\n";
echo 'Решение через цикл for:', "   <br/>\n";
for ($num = 1000, $i = 0; $num >= 50; $i++){
    $num = $num/2;
}
echo 'получилось число: '.$num, "   <br/>\n";
echo 'прошло - '.$i.' итераций', "   <br/>\n";



















