
<h3>Занятие №2. Основы языка PHP:</h3>

<?php
/*
 */
$a = 10;
$b = 2;
echo "abc   <br/> \n"; // ВАРИАНТЫ ПЕРЕНОСА СТРОК
echo $a + $b, PHP_EOL;
echo $a - $b.PHP_EOL;
echo $a * $b, "\r\n";
echo $a / $b, "\n"; // echo $a / $b.'<br>'; - КОНСОЛЬ ЛИБО БРАУЗЕР
echo "<hr>\n";

echo "Task - 3", '<br>';
$c = 15; $d = 2;
$result = $c + $d;
echo $result, "\n";
echo "<hr>\n";

echo "Task - 4", '<br>';
$a = 10; $b = 2; $c = 5;
echo $a + $b + $c, "\n";
echo "<hr>\n";

echo "Task - 5", '<br>';
$a = 17; $b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result, "\n";
echo "<hr>\n";

echo "Task - 6 -7 -8 -9", '<br>';
$text = "Hello, World";
echo $text, "\n";
echo "<hr>\n";

$text_1 = "Hello, ";
$text_2 = "World";
echo $text_1.$text_2, "\n";
echo "<hr>\n";

$name = "Bond";
echo "Hello, " .$name. "! \n";
echo "<hr>\n";

$age = 21;
echo "I am " .$age. " years old \n";
echo "<hr>\n";

echo "Task - 10 - 11 - 12", '<br>';
$text = "abcde";
echo $text[0], "\n";
echo $text[2], "\n";
echo $text[4], "\n";
echo "<hr>\n";

$text[0] = "!";
echo $text, "\n";
echo "<hr>\n";

$num = "12345";
echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4], "\n";
echo "<hr>\n";

echo "Task - 13 -14 -15", '<br>';
$sec_min = 60;
$min_hour = 60;
$hour_day = 24;
$day_month = 31;
$sec_hour = $sec_min * $min_hour;
$sec_day = $sec_hour * $hour_day;
$sec_month = $sec_day * $day_month;
echo $sec_hour, "\n"; // секунд в часе
echo $sec_day, "\n"; // секунд в дне
echo $sec_month, "\n"; // секунд в месяце
echo "<hr>\n";

$hor = 12;
$min = 45;
$sec = 23;
echo "$hor:$min:$sec \n";
echo $hor .":". $min .":". $sec, "\n";
echo "<hr>\n";

$value = 5;
$value *= $value;
echo $value, "\n";
echo "<hr>\n";

echo "Task - 16 -17 -18 -19", '<br>';
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var, "\n";
echo "<hr>\n";

$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text, "\n";
echo "<hr>\n";

$var = 10;
$var++;
$var++;
$var--;
echo $var, "\n";
echo "<hr>\n";

$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -= 15;
echo $var;












