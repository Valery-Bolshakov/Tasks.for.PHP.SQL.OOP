
<h3>Занятие №7. Работа со строковыми функциями:</h3>

<?php
echo "   <br/>\n";
echo 'Работа с регистром символов', "   <br/>\n";

echo 'Task - 1', "   <br/> \n";
echo strtoupper('php'), "   <br/>\n";

echo 'Task - 2', "   <br/> \n";
echo strtolower('PHP'), "   <br/>\n";

echo 'Task - 3', "   <br/> \n";
echo ucfirst('london'), "   <br/>\n";

echo 'Task - 4', "   <br/> \n";
echo lcfirst('London'), "   <br/>\n";

echo 'Task - 5', "   <br/> \n";
echo ucwords('london is the capital of great britain'), "   <br/>\n";

echo 'Task - 6', "   <br/> \n";
echo ucfirst(strtolower('LONDON')), "   <br/> \n";

echo '<hr><br>';


echo 'Работа с strlen', "   <br/>\n";

echo 'Task - 7', "   <br/> \n";
echo strlen('html css php'), "   <br/>\n";

echo 'Task - 8', "   <br/> \n";
$password = 'kjhcv6189';
if (strlen($password) > 5 and strlen($password) < 10) {
    echo 'пароль подходит',  "   <br/> \n";
} else {
    echo 'нужно придумать другой пароль',  "   <br/> \n";
}
echo '<hr><br>';


echo 'Работа с substr', "   <br/>\n";
//substr(строка, откуда, [сколько]);
echo 'Task - 9, 10', "   <br/> \n";
$a = 'html css php';
echo substr($a, 0, 4), "   <br/> \n";
echo substr($a, 5, 3), "   <br/> \n";
echo substr($a, -3), "   <br/> \n";
echo "   <br/>\n";


echo 'Task - 11', "   <br/> \n";
//strpos(где ищем, что ищем, [откуда искать]);
$a = 'http://code.mu/tasks/php';
if (strpos($a, 'http://') === 0) {
    echo 'yes', "   <br/> \n";
} else {
    echo 'no', "   <br/> \n";
}
echo "   <br/>\n";

echo 'Task - 12', "   <br/> \n";
$a = 'https://code.mu/tasks/php';
if ((strpos($a, 'http://') === 0) or (strpos($a, 'https://') === 0)) {
    echo 'yes', "   <br/> \n";
} else {
    echo 'no', "   <br/> \n";
}
echo "   <br/>\n";

echo 'Task - 13, 14', "   <br/> \n";
$a = 'https://code.mu/php.png';
$str = strrpos($a, '.png');
$str_1 = strrpos($a, '.jpg');

if (($str !== false) or ($str_1 !== false)) {
    echo 'да';
} else {
    echo 'нет';
}
echo '<br><br>';


echo 'Task - 15', "   <br/> \n";
$a = '0123456789';
if (strlen($a) > 5) {
    echo substr($a, 5). '...', "   <br/>\n";
} else {
    echo $a, "   <br/>\n";
}
echo '<hr><br>';


echo 'Работа с str_replace', "   <br/>\n";
echo 'Task - 16', "   <br/> \n";
$a = '25.06.2019';
echo str_replace('.',  '-', $a), "   <br/>\n";
echo "   <br/>\n";

echo 'Task - 17', "   <br/> \n";
$str = 'HeLlO WorLd';
$a = str_replace(['l', 'W', 'O', 'r'], '', $str);
echo $a, "   <br/>\n";
echo "   <br/>\n";

echo 'Task - 18', "   <br/> \n";
$a =  '1a2b3c4b5d6e7f8g9h0';
echo str_replace([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], '', $a), "   <br/> \n";
echo '<hr><br>';


echo 'Работа с strtr', "   <br/>\n";
echo 'Task - 19', "   <br/> \n";
echo strtr('ajbjcj', ['a'=>1, 'b'=>2, 'c'=>3]), "   <br/> \n";
echo strtr('ajbjcj', 'abc', 123), "   <br/>\n";
echo '<hr><br>';



echo 'Работа с substr_replace', "   <br/>\n";
echo 'Task - 20', "   <br/> \n";
$str = '0123456789';
echo substr_replace($str, '!!!', 2, 5), "   <br/>\n";
echo '<hr><br>';



echo 'Работа с strpos, strrpos', "   <br/>\n";
echo 'Task - 21, 22, 23, 24', "   <br/> \n";
echo strpos('abc abc abc', 'b'), "   <br/>\n";
echo strrpos('abc abc abc', 'b'), "   <br/>\n";
echo strpos('abc abc abc', 'b', 3), "   <br/>\n";
$a = 'aaa aaa aaa aaa aaa';
echo strpos($a, ' ', 4), "   <br/>\n";
echo "   <br/>\n";

echo 'Task - 25', "   <br/> \n";
$str = 'jashgd..kjhfdg';
if (strpos($str, '..') !== false) {
    echo 'В строке есть две .. подряд', "   <br/> \n";
} else {
    echo 'нет';
}
echo "   <br/>\n";

echo 'Task - 26', "   <br/> \n";
$a = 'http://code.mu/php';
if (strpos($a, 'http://', 0) !== false) {
    echo 'строка начинается с http://', "   <br/> \n";
} else {
    echo 'net';
}
echo '<hr><br>';



echo 'Работа с explode, implode', "   <br/>\n";
echo 'Task - 27', "   <br/> \n";
//explode(разделитель, строка); implode(разделитель, строка);
$a = 'html css php';
$str= explode(' ', $a);
var_dump($str);
echo '<br><br>';

echo 'Task - 28', "   <br/> \n";
$a = ['html', 'css', 'php'];
$str = implode(',', $a);
echo $str, "   <br/>\n";
echo "   <br/>\n";

echo 'Task - 29', "   <br/> \n";
$date = '2019-06-26';
$arr = explode('-', $date);
echo $arr[2].'.'.$arr[1].'.'.$arr[0], "   <br/>\n";
echo '<hr><br>';


echo 'Работа с str_split', "   <br/>\n";
echo 'Task - 30, 31', "   <br/> \n";
//str_split(строка, количество символов в элементе массива);
$str = '1234567890';
var_dump(str_split($str, 2));
echo '<br><br>';

var_dump(str_split($str, 1));
echo '<br><br>';

echo 'Task - 32', "   <br/> \n";
$str = '1234567890';
$arr = str_split($str, 2);
$str_1 = $arr[0].'-'.$arr[1].'-'.$arr[2].'-'.$arr[3].'-'.$arr[4];
echo $str_1,  "   <br/>\n";
echo '<hr><br>';

echo 'Работа с trim, ltrim, rtrim', "   <br/>\n";
//trim(строка, символы);
echo 'Task - 33', "   <br/> \n";
$str = '   qwerty    ';
echo trim($str), "   <br/> \n";
echo "   <br/>\n";

echo 'Task - 34', "   <br/> \n";
$str = '/php/';
echo trim($str, '/'),  "   <br/> \n";
echo "   <br/>\n";

echo 'Task - 35', "   <br/> \n";
$str =  'слова слова слова.';
echo rtrim($str, '.'). '.',  "   <br/> \n";
echo '<hr><br>';


echo 'Работа с strrev', "   <br/>\n";
echo 'Task - 36', "   <br/> \n";
$str = '12345';
echo strrev($str),  "   <br/> \n";
echo "   <br/>\n";

echo 'Task - 37', "   <br/> \n";
$str = 'level';
if (strrev($str) === $str) {
    echo 'слово является полиндромом';
} else {
    echo 'nea';
}
echo '<hr><br>';


echo 'Работа с str_shuffle', "   <br/>\n";
echo 'Task - 38', "   <br/> \n";
$str = 'qwertyuioplkjhgfdsazxcvbnm';
echo str_shuffle($str), "   <br/>\n";
echo "   <br/>\n";

echo 'Task - 39', "   <br/> \n";
$a = 'qwertyuioplkjhgfdsazxcvbnm';
$str = substr(str_shuffle($a), 0, 6);
echo $str, "   <br/>\n";
echo '<hr><br>';

echo 'Работа с number_format', "   <br/>\n";
echo 'Task - 40', "   <br/> \n";
$str = '12345678';
$n = number_format($str, '0', ',', ' ');
echo $n, "   <br/>\n";
echo '<hr><br>';


echo 'Работа с str_repeat', "   <br/>\n";
echo 'Task - 41', "   <br/> \n";
//str_repeat(строка, сколько раз повторить);
$str = 'x';
$i = 1;
while ($i < 10) {
    echo str_repeat($str, $i), "   <br/>\n";
    $i++;
}
echo "   <br/>\n";

echo 'Task - 42', "   <br/> \n";
//str_repeat(строка, сколько раз повторить);
$j = '1';
$i = 1;
while ($i < 10) {
    echo str_repeat($j, $i), "   <br/>\n";
    $j++;
    $i++;
}
echo '<hr><br>';


echo 'Работа с strip_tags и htmlspecialchars', "   <br/>\n";
echo 'Task - 43', "   <br/> \n";
$str = 'html, <b>php</b>, js';
echo strip_tags($str), "   <br/>\n";
echo "   <br/>\n";

echo 'Task - 44', "   <br/> \n";
$str = 'html, <b>php</b>, js';
echo strip_tags($str, '<b><i>'), "   <br/>\n";
echo htmlspecialchars(strip_tags($str, '<b><i>')), "   <br/>\n";
echo "   <br/>\n";

echo 'Task - 45', "   <br/> \n";
$str = 'html, <b>php</b>, js';
echo htmlspecialchars($str), "   <br/>\n";
echo '<hr><br>';


echo 'Работа с chr и ord', "   <br/>\n";
echo 'Task - 46', "   <br/> \n";
echo ord('a'), "   <br/>\n";
echo ord('b'), "   <br/>\n";
echo ord('c'), "   <br/>\n";
echo ord(' '), "   <br/>\n";
echo "   <br/>\n";

echo 'Task - 48', "   <br/> \n";
echo chr(33), "   <br/> \n";
echo "   <br/>\n";

//Сгенерируем случайную маленькую и большую буквы латинского алфавита
echo chr(mt_rand(97, 122)), "   <br/> \n";
echo chr(mt_rand(65, 90)), "   <br/> \n";
echo "   <br/>\n";

echo 'Task - 49', "   <br/> \n";
$str = chr(mt_rand(65, 90));
echo $str, "   <br/> \n";
echo "   <br/>\n";

echo 'Task - 50', "   <br/> \n";
$len = 0;
$str = '';
while ($len <= 5) {
    $a = chr(mt_rand(97, 122));
    $str .= $a;
    $len++;
}
echo $str, "   <br/> \n";
echo "   <br/>\n";

echo 'Task - 51', "   <br/> \n";
$a = '[';
if (ord($a) >=97 and ord($a) <= 122) {
    echo 'Задана маленькая буква';
} elseif (ord($a) >=65 and ord($a) <= 90) {
    echo 'Задана большая буква';
} else {
    echo 'Задана НЕ буква';
}
echo '<hr><br>';


echo 'Работа с strchr, strrchr', "   <br/>\n";
echo 'Task - 52 и 53', "   <br/> \n";
$str = 'ab-cd-ef';
echo strchr($str, '-'), "   <br/> \n";

echo strrchr($str, '-'), "   <br/> \n";
echo '<hr><br>';


echo 'Работа с strstr', "   <br/>\n";
echo 'Task - 54', "   <br/> \n";
$str = 'ab--cd--ef';
echo strstr($str, '--'), "   <br/>\n";
echo "   <br/>\n";

echo strstr($str, '--', true), "   <br/>\n";
echo '<hr><br>';



echo 'Задачи', "   <br/>\n";
echo 'Task - 55', "   <br/> \n";
$a = 'var_test_text';
//explode(разделитель, строка); разбивает строку в массив по определенному разделителю
// implode(разделитель, строка); сливает массив в строку с указанным разделителем
// ucfirst(строка);

$arr = explode('_', $a);
var_dump($arr);
echo '<br><br>';

$str = $arr[0] . ucfirst($arr[1]) . ucfirst($arr[2]);
echo $str;
echo '<br><br>';


echo 'Task - 56', "   <br/> \n";
$arr = [45, 3, 32, 69, 13, 56, 83, 2];
foreach ($arr as $elem) {
    if ( strpos($elem ,'3') !== false) {
        echo $elem, "   <br/> \n";
    } else {
        echo "цифра 3 - не входит в число $elem";
        echo "   <br/>\n";
    }
}













