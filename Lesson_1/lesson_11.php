<h3>Занятие №11. Работа с датами в PHP:</h3>
<h3>Timestamp: time и mktime</h3>

<?php
//$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];

echo 'Task 1. Выведите текущее время в формате timestamp.', "<br><br>";
echo time();
echo '<hr><br>';


echo 'Task 2. Выведите 1 марта 2025 года в формате timestamp.', "<br><br>";
echo mktime(0, 0, 0, 3, 1, 2025);
echo '<hr><br>';


echo 'Task 3. Выведите 31 декабря текущего года в формате timestamp.
Скрипт должен работать независимо от года, в котором он запущен', "<br><br>";
echo mktime(0, 0, 0, 12, 31);
echo '<hr><br>';


echo 'Task 4. Найдите количество секунд, прошедших с 13:12:59 15-го
марта 2000 года до настоящего момента времени.', "<br><br>";
echo time() - mktime(13, 12, 59, 03, 15, 2000), '<br>';
/*$time = mktime(13,12,59,03,15,2000);
echo date('H:i:s d-m-Y', $time);*/
echo '<hr><br>';


echo 'Task 5. Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего
момента времени.', "<br><br>";
$past_time = mktime(7, 23, 48);
// intdiv — Целочисленное деление
echo intdiv((time() - $past_time), 3600) . ' часов';
echo '<hr><br>';


echo '<h3>Функция date</h3>';
echo 'Task 6. Выведите на экран текущий год, месяц, день, час, минуту, секунду.', '<br><br>';
echo date('Y-m-d H:i:s');
echo '<hr><br>';


echo "Task 7. Выведите текущую дату-время в форматах 2025-12-31, 31.12.2025, 31.12.13, 12:59:59.", '<br><br>';
echo date('Y-m-d H:i:s'), '<br>';
echo date('d.m.Y H:i:s'), '<br>';
echo date('d.m.y H:i:s');
echo '<hr><br>';


echo "Task 8. С помощью функций mktime и date выведите 12 февраля 2025 года в формате '12.02.2025'.", '<br><br>';
echo date('d.m.Y', mktime(0, 0, 0, 2, 12, 2025));
echo '<hr><br>';


echo 'Task 9. Создайте массив дней недели $week. Выведите на экран название текущего дня недели с помощью
массива $week и функции date. Узнайте какой день недели был 06.06.2006.', '<br><br>';
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
echo 'Название текущего дня недели - ' . $week[date('w')], '<br>';

$day = date('w', mktime(0, 0, 0, 6, 06, 2006));
echo '06.06.2006 день недели - ' . $week[$day], '<br>';

$day = date('w', mktime(0, 0, 0, 6, 22, 1941));
echo '22.06.1941 день недели - ' . $week[$day];
echo '<hr><br>';


echo 'Task 10. Создайте массив месяцев $month. Выведите на экран название текущего месяца с помощью
массива $month и функции date.', '<br><br>';
$months = [1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
echo $months[date('n')], '<br>';
echo date('m');
echo '<hr><br>';


echo 'Task 11. Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца,
в котором он запущен.', '<br><br>';
echo 'В текущем месяце - ' . date('t') . ' дней', '<br>';
echo 'Задача получилась слишком легкая, попробую создать скрипт для расчета...', '<br><br>';
$month = explode('-', date('d-m-y'));
echo 'текущий месяц - ' . $month[1], '<br>';
$next_month = $month[1] + 1;
echo 'следующий месяц - ' . $next_month, '<br>';
$day_timestamp = mktime(0, 0, 0, $next_month, 1)
    - mktime(0, 0, 0, $month[1], 1); // найдем разницу в секундах между 1ым числом
// следующего месяца и текущего
echo 'В текущем месяце - ' . ($day_timestamp / 86400) . ' день/дней'; // в сутках 86400 секунд
echo '<hr><br>';


echo 'Task 12. Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет
високосный ли год', '<br><br>'; ?>

<form action="" method="POST">
    <input name="text" placeholder="Введите год" required><br><br>
    <input type="submit" name="submit_1" value="Отправить"><br>
</form>

<?php
if (isset($_REQUEST['submit_1'])) {
    // '1 - если високосный год, 0 - если не високосный', '<br>';
    echo $_REQUEST['text'], '<br>';
    $year = date('L', mktime(0, 0, 0, 1, 1, $_REQUEST['text']));
    if ($year == 1) {
        echo 'Введенный год является высокосным';
    } else {
        echo 'Введенный Не высокосный год';
    }
}
echo '<hr><br>';


echo 'Task 13. Сделайте форму, которая спрашивает дату в формате 31.12.2025. С помощью функций mktime и explode
переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату.', '<br>';
echo 'Task 14. ...//... Узнайте месяц (словом) за введенную дату.', '<br><br>';
?>

<form action="" method="POST">
    <input type="date" name="date" required><br><br>
    <input type="submit" name="submit_2" value="Отправить"><br>
</form>

<?php
if (isset($_REQUEST['submit_2'])) {
    echo 'Введённая дата - ' . $_REQUEST['date'], '<br>'; // смотрим как выводится вводимая в форме дата 2000-12-21
    $arr_date = explode('-', $_REQUEST['date']); // сделали из даты массив значений
    $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
    $this_day = date('w', mktime(0, 0, 0, $arr_date[1], $arr_date[2], $arr_date[0]));
    echo 'День недели - ' . $week[$this_day], '<br>';
    $months = [1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
    $this_month = date('n', mktime(0, 0, 0, $arr_date[1], $arr_date[2], $arr_date[0]));
    echo 'Текущий месяц - ' . $months[$this_month];
}
echo '<hr><br>';


echo '<h3>Сравнение дат</h3>';
echo 'Task 15. Сделайте форму, которая спрашивает две даты в формате 2025-12-31. Первую дату запишите в переменную
$date1, а вторую в $date2. Сравните, какая из введенных дат больше. Выведите ее на экран.', '<br><br>';
?>

<form action="" method="POST">
    <input type="date" name="date_1" required> Введите первую дату<br><br>
    <input type="date" name="date_2" required> Введите вторую дату<br><br>
    <input type="submit" name="submit_3">
</form>

<?php
if (isset($_REQUEST['submit_3'])) {
    echo 'Первая: ' . $_REQUEST['date_1'] . ' / ' . 'Вторая: ' . $_REQUEST['date_2'], '<br>'; // 2000-12-21
    $date_1 = explode('-', $_REQUEST['date_1']);
    $date_2 = explode('-', $_REQUEST['date_2']); // для сравнения переведем массивы дат в формат timestamp
    $date_1_mkt = mktime(1, 1, 1, $date_1[1], $date_1[2], $date_1[0]);
    $date_2_mkt = mktime(1, 1, 1, $date_2[1], $date_2[2], $date_2[0]);
    if ($date_1_mkt > $date_2_mkt) {
        echo 'Первая дата более поздняя - ' . $_REQUEST['date_1'];
    } else {
        echo 'Вторая дата более поздняя - ' . $_REQUEST['date_2'];
    }
}
echo '<hr><br>';


echo '<h3>Strtotime</h3>';
echo 'Task 16. Дана дата в формате 2025-12-31. С помощью функции strtotime и функции date преобразуйте
её в формат 31-12-2025', '<br><br>';
?>

<form action="" method="POST">
    <input type="date" name="date" required><br><br>
    <input type="submit" name="submit_4">
</form>

<?php
if (isset($_REQUEST['submit_4'])) {
    echo 'Введена дата: ' . $_REQUEST['date'], '<br>';
    echo 'Преобразуем и получим: ' . date('d-m-Y', strtotime($_REQUEST['date']));
}
echo '<hr><br>';


echo 'Task 17. Сделайте форму, которая спрашивает дату-время в формате 2025-12-31T12:13:59. С помощью функции
strtotime и функции date преобразуйте ее в формат 12:13:59 31.12.2025.', '<br><br>';
?>

<form action="" method="POST">
    <input type="text" name="date" placeholder="Введите дату-время" required> Пример: 2025-12-31T12:13:59<br><br>
    <input type="submit" name="submit_5">
</form>

<?php
if (isset($_REQUEST['submit_5'])) {
    echo 'Введена дата-время: ' . $_REQUEST['date'], '<br>';
    //echo strtotime($_REQUEST['date']), '<br>';
    echo 'Преобразуем и получим: ' . date('H:i:s d-m-Y', strtotime($_REQUEST['date']));
}
echo '<hr><br>';


echo '<h3>Прибавление и отнимание дат</h3>';
echo 'Task 18. В переменной $date лежит дата в формате 2025-12-31. Прибавьте к этой дате 2 дня, 1 месяц
и 3 дня, 1 год. Отнимите от этой даты 3 дня.', '<br><br>';
$date = date_create('2025-12-31');
date_modify($date, '2 day');
echo date_format($date, 'Y-m-d') . ' (+2 дня)', '<br>';

date_modify($date, '1 month 3 day');
echo date_format($date, 'Y-m-d') . ' (+1 месяц и 3 дня)', '<br>';

date_modify($date, '1 year');
echo date_format($date, 'Y-m-d') . ' (+1 год)', '<br>';

date_modify($date, '-3 day');
echo date_format($date, 'Y-m-d') . ' (-3 дня)', '<br>';
echo '<hr><br>';


echo '<h3>Задачи:</h3>';
echo 'Task 19. Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году', '<br><br>';
echo date('d-m-Y. z') . ' - номер дня от начала года на текущую дату', '<br>';
$date = date('z', mktime(0, 0, 0));

if (date('L', mktime(0, 0, 0)) == 0) {//если год Не высокосный то...
    $date_0 = 365 - $date;
    echo 'До НГ осталось ' . $date_0 . ' дня/дней';
}
if (date('L', mktime(0, 0, 0)) == 1) {   //если год Высокосный то...
    $date_1 = 366 - $date;
    echo 'До НГ осталось ' . $date_1 . ' дня/дней';
}
echo '<hr><br>';


echo 'Task 20. Сделайте форму с одним полем ввода, в которое пользователь вводит год. Найдите все
пятницы 13-е в этом году. Результат выведите в виде массива дат.', '<br><br>';
?>

<form action="" method="POST">
    <input type="text" name="year" placeholder="Введите год" required> Пример: 2025<br><br>
    <input type="submit" name="submit_6">
</form>

<?php
if (isset($_REQUEST['submit_6'])) {
    $year = trim(strip_tags($_REQUEST['year']));
    $i = 1;
    echo 'Все пятницы 13-е (если таковые имеются) в заданном году:', '<br>';
    while ($i <= 12) {
        $date = date('d-m-Y', mktime(0, 0, 0, $i, 13, $year));
        $date_w = date('w', mktime(0, 0, 0, $i, 13, $year));
        $i++;
        if ($date_w == 5) {
            echo $date . '<br>';
        }
    }

}
echo '<hr><br>';


echo 'Task 21. Узнайте какой день недели был 100 дней назад.', '<br><br>';
echo date('Y-m-d') . ' - текущая дата', '<br>';
$date = date_create(date('Y-m-d'));
date_modify($date, '-100 days');
echo date_format($date, 'd-m-Y. w');
echo ' - дата 100 дней назад и день недели (0 - воскресенье, 1 - понедельник и т.д.).'


?>




















