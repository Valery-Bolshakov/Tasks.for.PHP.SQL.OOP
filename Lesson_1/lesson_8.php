
<h3>Занятие №8. Функции работы с массивами:</h3>

<?php

echo "   <br/>\n";
echo 'Задачи для решения', "   <br/>\n";
echo "   <br/>\n";

echo 'Работа с count', "   <br/>\n";
echo 'Task - 1, 2', "   <br/> \n";
$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr), "   <br/> \n";

/*$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));
echo count($food, 1); // выводит 8 */

$arr_1 = count($arr);
echo $arr[$arr_1 - 1];
echo '<hr><br>';


echo 'Работа с  in_array', "   <br/>\n";
echo 'Task - 3', "   <br/> \n";
$arr = [1, 2, 3, 4, 5];
var_dump(in_array(3, $arr, true));
echo '<hr><br>';


echo 'Работа с  array_sum и array_product', "   <br/>\n";
echo 'Task - 4, 5, 6', "   <br/> \n";
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr), "   <br/> \n";
echo array_product($arr), "   <br/> \n";
echo array_sum($arr) / count($arr);
echo '<hr><br>';


echo 'Работа с  range', "   <br/>\n";
echo 'Task - 7, 8, 9, 10, 11', "   <br/> \n";
$arr = range(1, 100);
//var_dump($arr);
echo '<br><br>';

$arr = range('a', 'z');
var_dump($arr);
echo '<br><br>';

$arr = range(1, 9);
$str = implode('-', $arr);
echo $str;
echo '<br><br>';

$arr = range(1, 100);
echo array_sum($arr);
echo '<br><br>';

$arr = range(1, 10);
echo array_product($arr), "   <br/>\n";
echo '<hr><br>';


echo 'Работа с  array_merge', "   <br/>\n";
echo 'Task - 12', "   <br/> \n";
$arr_1 = [1, 2, 3];
$arr_2 = ['a', 'b', 'c'];
$arr = array_merge($arr_1, $arr_2);
var_dump($arr);
echo '<hr><br>';


echo 'Работа с  array_slice', "   <br/>\n";
echo 'Task - 13', "   <br/> \n";
$arr =  [1, 2, 3, 4, 5];
var_dump(array_slice($arr, 1, 3));
echo '<hr><br>';


echo 'Работа с  array_splice', "   <br/>\n";
echo 'Task - 14, 15, 16', "   <br/> \n";
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 2);
var_dump($arr);
echo '<br><br>';

$arr = [1, 2, 3, 4, 5];
$arr_new = array_splice($arr, 1, 3);
var_dump($arr_new);
echo '<br><br>';

$arr = [1, 2, 3, 4, 5];
array_splice($arr, 3, 0, ['a', 'b', 'c']);
var_dump($arr);
echo '<br><br>';

echo 'Task - 17', "   <br/> \n";
$arr = [1, 2, 3, 4, 5];
//$arr_1 = [1, 'a', 'b', 2, 3, 4, 'c', 5, 'e'];
array_splice($arr, 1, 0, ['a', 'b']);
array_splice($arr, 6, 0, 'c');
array_splice($arr, 8, 0, 'e');
var_dump($arr);
echo '<hr><br>';


echo 'Работа с  array_keys, array_values, array_combine', "   <br/>\n";
echo 'Task - 18, 19', "   <br/> \n";
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($arr);
$values = array_values($arr);
var_dump($keys);
echo "   <br/>\n";
var_dump($values);
echo '<br><br>';


$arr_new = array_combine($keys, $values);
var_dump($arr_new);
echo '<hr><br>';


echo 'Работа с  array_flip, array_reverse', "   <br/>\n";
echo 'Task - 20, 21', "   <br/> \n";
$arr = [ 'a'=>1, 'b'=>2, 'c'=>3];
$arr_new = array_flip($arr);
var_dump($arr_new);
echo "   <br/>\n";

$arr_1 = array_reverse($arr_new, true);
var_dump($arr_1);
echo "   <br/>\n";

$arr_2 = array_reverse($arr_new, false);
var_dump($arr_2);
echo "   <br/>\n";

$arr = [1, 2, 3, 4, 5];
$arr_new = array_reverse($arr);
var_dump($arr_new);
echo '<hr><br>';


echo 'Работа с  array_search', "   <br/>\n";
echo 'Task - 22, 23', "   <br/> \n";
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo array_search('-', $arr);
echo "   <br/>\n";

$arr_new = array_search('-', $arr);
array_splice($arr, $arr_new, 1);
var_dump($arr);
echo '<hr><br>';


echo 'Работа с  array_replace', "   <br/>\n";
echo 'Task - 24', "   <br/> \n";
$arr_1 = ['a', 'b', 'c', 'd', 'e'];
$arr_2 = [0 => '!', 3 => '!!'];
$arr = array_replace($arr_1, $arr_2);
var_dump($arr);
echo '<hr><br>';


echo 'Работа с  сортировкой', "   <br/>\n";
echo 'Task - 25', "   <br/> \n";
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
var_dump($arr);
echo '<br><br>';

echo 'sort - по возрастанию элементов, rsort - по убыванию элементов', "   <br/> \n";

sort($arr);
var_dump($arr);
echo "   <br/>\n";

rsort($arr);
var_dump($arr);
echo '<hr><br>';


echo 'asort - по возрастанию элементов с сохранением ключей', "   <br/> \n";
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
asort($arr);
var_dump($arr);
echo '<hr><br>';


echo 'arsort - по убыванию элементов с сохранением ключей', "   <br/> \n";
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
arsort($arr);
var_dump($arr);
echo '<hr><br>';


echo' ksort - по возрастанию ключей, krsort - по убыванию ключей', "   <br/> \n";
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
ksort($arr);
var_dump($arr);
echo "   <br/>\n";

$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
krsort($arr);
var_dump($arr);
echo '<hr><br>';


echo 'usort - по функции по элементам', "   <br/> \n";
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
//usort($arr);
var_dump($arr);
echo '<hr><br>';


echo 'uasort - по функции по элементам с сохранением ключей', "   <br/> \n";
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
//uasort($arr);
var_dump($arr);
echo '<hr><br>';


echo 'uksort - по функции по ключам', "   <br/> \n";
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
//uksort($arr);
var_dump($arr);
echo '<hr><br>';


echo 'natsort - натуральная сортировка', "   <br/> \n";
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
//natsort($arr);
var_dump($arr);
echo '<hr><br>';


echo 'Работа с  array_rand', "   <br/>\n";
echo 'Task - 26, 27', "   <br/> \n";
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$key = array_rand($arr);
var_dump($key);
echo "   <br/>\n";
var_dump($arr[$key]);
echo '<hr><br>';


echo 'Работа с  shuffle', "   <br/>\n";
echo 'Task - 28', "   <br/> \n";
$arr = [1, 'a', 'b', 2, 3, 4, 'c', 5, 'e'];
shuffle($arr);
foreach($arr as $elem) {
    echo "$elem ";
}
echo '<br><br>';


echo 'Task - 29', "   <br/> \n";
$arr = range(1, 25);
shuffle($arr);
foreach($arr as $elem) {
    echo "$elem ";
}
echo '<br><br>';


echo 'Task - 30', "   <br/> \n";
$arr = range('a', 'z');
foreach($arr as $elem) {
    echo "$elem ";
}
echo '<br><br>';

shuffle($arr);
foreach($arr as $elem) {
    echo "$elem ";
}
echo '<br><br>';


echo 'Task - 31', "   <br/> \n";
$arr = range('a', 'z');
shuffle($arr);
$result = array_slice($arr, 0, 6);
$str = '';
foreach($result as $elem) {
    $str .= $elem;
}
echo $str;
echo '<hr><br>';


echo 'Работа с  array_unique', "   <br/>\n";
echo 'Task - 32', "   <br/> \n";
$arr = ['a', 'b', 'c', 'b', 'a'];
$new_arr = array_unique($arr);
print_r($new_arr);
echo '<hr><br>';


echo 'Работа с  array_shift, array_pop, array_unshift, array_push', "   <br/>\n";
echo 'Task - 33', "   <br/> \n";
$arr = [1, 2, 3, 4, 5];
$arr_1 = array_shift($arr);
echo $arr_1;
echo "   <br/>\n";
$arr_2 = array_pop($arr);
echo $arr_2;
echo "   <br/>\n";
array_unshift($arr, $arr_1);
array_push($arr, $arr_2);
print_r($arr);
echo '<br><br>';


echo 'Task - 34', "   <br/> \n";
$arr = [1, 2, 3, 4, 5];
array_unshift($arr, 0);
array_push($arr, 6);
print_r($arr);
echo '<br><br>';


echo 'Task - 35', "   <br/> \n";
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$str = '';
while (count($arr) > 0) {
    $str .= array_shift($arr);
    $str .= array_pop($arr);
}
echo $str;
echo '<hr><br>';


echo 'Работа с  array_pad, array_fill, array_fill_keys, array_chunk', "   <br/>\n";
echo 'Task - 36', "   <br/> \n";
$arr = ['a', 'b', 'c'];
$arr = array_pad($arr, 6, '-');
print_r($arr);
echo '<br><br>';


echo 'Task - 37', "   <br/> \n";
$arr = array_fill(0, 10, 'x');
print_r($arr);
echo '<br><br>';


echo 'Task - 38', "   <br/> \n";
$arr = range(1, 20);
$result = array_chunk($arr, 4);
print_r($result);
echo '<hr><br>';


echo 'Работа с  array_count_values', "   <br/>\n";
echo 'Task - 39', "   <br/> \n";
$arr = ['a', 'b', 'c', 'b', 'b', 'a'];
var_dump(array_count_values($arr));
echo '<hr><br>';


echo 'Работа с  array_map', "   <br/>\n";
echo 'Task - 40', "   <br/> \n";
$arr = [1, 2, 3, 4, 5];
$result = array_map('sqrt', $arr);
print_r($result);
echo '<br><br>';


echo 'Task - 41', "   <br/> \n";
$arr = ['<b>php</b>', '<i>html</i>'];
$result = array_map('strip_tags', $arr);
print_r($result);
echo '<br><br>';

echo 'Task - 42', "   <br/> \n";
$arr = [' a ', ' b ', ' д '];
$result = array_map('trim', $arr);
var_dump($result);
echo '<hr><br>';


echo 'Работа с  array_intersect, array_diff', "   <br/>\n";
echo 'Task - 43, 44', "   <br/> \n";
$arr_1 = [1, 2, 3, 4, 5];
$arr_2 = [3, 4, 5, 6, 7];
$result = array_intersect($arr_1, $arr_2);
var_dump($result);
echo '<br><br>';

$arr_1 = [1, 2, 3, 4, 5];
$arr_2 = [3, 4, 5, 6, 7];
$new_arr_1 = array_diff($arr_1, $arr_2);
$new_arr_2 = array_diff($arr_2, $arr_1);
$result = array_merge($new_arr_1, $new_arr_2);
print_r($result);
echo '<hr><br>';


echo 'ЗАДАЧИ', "   <br/>\n";
echo 'Task - 45', "   <br/> \n";
$str =  '1234567890';
//array_sum
$arr = str_split($str);
//print_r($arr);
$result = array_sum($arr);
echo $result;
echo '<br><br>';


echo 'Task - 46', "   <br/> \n";
$arr_1 = range(1, 26);
//print_r($arr_1);
echo "   <br/>\n";
$arr_2 = range('a', 'z');
//print_r($arr_2);
$result = array_combine($arr_2, $arr_1);
print_r($result);
echo '<br><br>';


echo 'Task - 47', "   <br/> \n";
//[[1, 2, 3], [4, 5, 6], [7, 8, 9]]
$arr = range(1, 9);
$result = array_chunk($arr, 3);
print_r($result);
echo '<br><br>';

//var_dump($result);


echo 'Task - 48', "   <br/> \n";
$arr = [1, 2, 4, 1, 4, 5, 3, 5];
$arr = array_unique($arr);
rsort($arr);
print_r($arr);
echo "   <br/>\n";
echo $arr[1];
































