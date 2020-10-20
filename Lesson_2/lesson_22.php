<?php
/*isset — Определяет, была ли установлена переменная значением, отличным от NULL
empty — Проверяет, пуста ли переменная
&nbsp; - Cпецсимвол HTML "Неразрывный пробел"
$months = [1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];

*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<p><b class="T1">Занятие №22. </b><b class="D1">Практика по написанию простых скриптов PHP:</b></p><br>


<fieldset>
    <p><b class="T">Task 1. </b><b class="D">По заходу на страницу выведите сколько дней осталось до нового года:</b>
    </p>
    <?php
    $date = date('Y-m-d');
    echo 'текущая дата - ' . $date, '<br>';
    $date1 = date_create($date);
    $date2 = date_create('2021-01-01');
    $diff = date_diff($date1, $date2);
    echo $diff->format('%a дней осталось до нового года');
    echo '<br>';
    ?>
</fieldset>
<br>


<form action="" method="post">
    <fieldset>
        <p><b class="T">Task 2. </b><b class="D">Дан инпут и кнопка. В этот инпут вводится год. По нажатию на
                кнопку выведите на экран, високосный он или нет:</b></p>

        <input type="text" name="test" placeholder="Введите год" required>&nbsp
        <input type="submit" name="submit"><br><br>
        <?php
        if (!empty($_REQUEST['submit'])) {
            $year = date('L', mktime(0, 0, 0, 1, 1, $_REQUEST['test']));
            if ($year == 1) echo 'Да';
            if ($year == 0) echo 'Нет';
        }
        ?>
    </fieldset>
    <br>
</form>


<form action="" method="post">
    <fieldset>
        <p><b class="T">Task 3. </b><b class="D">Дан инпут и кнопка. В этот инпут вводится дата в формате
                '21.12.2019'. По нажатию на кнопку выведите на экран день недели, соответствующий этой дате,
                например, 'воскресенье'.</b></p>

        <input type="text" name="test" placeholder="Введите дату" required>&nbsp в формате '21.12.2019' <br><br>
        <input type="submit" name="submit_1"><br><br>
        <?php
        if (!empty($_REQUEST['submit_1'])) {
            $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
            echo 'введена дата - ' . $_REQUEST['test'], '<br>';
            $day = explode('.', $_REQUEST['test']); //создали дата массив ['17', '01', '2020']
            $today = date('w', mktime(0, 0, 0, $day[1], $day[0], $day[2]));
            echo 'день недели соответствующий этой дате - ' . $week[$today];
        }
        ?>
    </fieldset>
    <br>
</form>


<fieldset>
    <p><b class="T">Task 4. </b><b class="D">По заходу на страницу выведите текущую дату в формате
            '12 мая 2019 года, воскресенье'.</b></p>
    <?php
    $week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
    $months = [1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];

    $date = explode('-', date('w-j-n-Y')); //номер деня недели - номер дня в месяце - номер месяца
    echo $date[1] . ' ' . $months[$date[2]] . ' ' . $date[3] . ' года, ' . $week[$date[0]]
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 5. </b><b class="D">Дан инпут и кнопка. В этот инпут вводится дата рождения (ДР)в формате
            '21.12.2019'. По нажатию на кнопку выведите на экран сколько дней осталось до дня рождения
            пользователя'.</b></p>

    <form action="" method="post">
        <input type="text" name="test" placeholder="Дата рождения" required>&nbsp
        <input type="submit" name="submit_2"><br><br>
        <?php
        $date = explode('-', date('d-m-Y')); // создали массив[] текущей даты
        $today = date('z', mktime(12, 0, 0, $date[1], $date[0], $date[2]));
        //echo $today . ' номер текущего дня от начала года', '<br>';
        if (!empty($_REQUEST['submit_2'])) {
            $birthday = explode('.', $_REQUEST['test']); //создали массив ДР ['21', '12', '2019']
            echo 'Введена дата: ' . $_REQUEST['test'], '<br>';
            $date_birth = date('z', mktime(12, 0, 0, $birthday[1], $birthday[0]));
            //echo $date_birth . ' номер дня ДР от начала текущего года', '<br><br>';
            if ($date_birth > $today) {
                $date_of_birth = $date_birth - $today + 1;
                echo 'до дня рождения пользователя осталось ' . $date_of_birth . ' дней', '<br>';
            } else {
                $next_date_birth = date('z', mktime(12, 0, 0,
                    $birthday[1], $birthday[0], $date[2] + 1));
                $all_day_this_year = date('z', mktime(12, 0, 0, 12, 31));
                $date_of_birth = ($all_day_this_year - $today) + $next_date_birth + 1;
                echo 'до дня рождения пользователя осталось ' . $date_of_birth . ' дней', '<br>';
            }
        }
        ?>
    </form>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 6. </b><b class="D">По заходу на страницу выведите сколько дней осталось до ближайшей
            масленницы: Первое воскресенье весны.[в этом году - 1 марта]</b></p>

    <?php
    $first_sunday = date('z', strtotime("first Sunday of March")); // номер первое воксресенье
    $today = date('z', strtotime('today')); // номер текущего дня от начала года

    if ($first_sunday > $today) {
        $count_day = $first_sunday - $today;
        echo $count_day . ' - дней осталось до ближайшей масленницы';
    } else {
        $first_sunday_next = date('z', strtotime("first Sunday of March next Year"));
        $last_day = date('z', mktime(0, 0, 0, 12, 31));
        $count_day = ($last_day - $today) + $first_sunday_next;
        echo $count_day . ' - дней осталось до ближайшей масленницы следующего года';
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 7. </b><b class="D">Дан инпут и кнопка. В этот инпут вводится дата рождения в формате
            '31.12'. По нажатию на кнопку выведите знак зодиака пользователя.</b></p>

    <form action="" method="post">
        <input type="text" name="test" checked>&nbsp
        <input type="submit" name="submit_3"><br>
    </form>

    <?php
    if (!empty($_REQUEST['submit_3'])) {
        $date = implode(array_reverse(explode('.', $_REQUEST['test'])));
        if ($date >= '0120' and $date <= '0218') {
            echo 'Водолей';
        }
        if ($date >= '0219' and $date <= '0320') {
            echo 'Рыбы';
        }
        if ($date >= '0321' and $date <= '0419') {
            echo 'Овен';
        }
        if ($date >= '0420' and $date <= '0520') {
            echo 'Телец';
        }
        if ($date >= '0521' and $date <= '0620') {
            echo 'Близнецы';
        }
        if ($date >= '0621' and $date <= '0722') {
            echo 'Рак';
        }
        if ($date >= '0723' and $date <= '0822') {
            echo 'Лев';
        }
        if ($date >= '0823' and $date <= '0922') {
            echo 'Дева';
        }
        if ($date >= '0923' and $date <= '1022') {
            echo 'Весы';
        }
        if ($date >= '1023' and $date <= '1121') {
            echo 'Скорпион';
        }
        if ($date >= '1122' and $date <= '1221') {
            echo 'Стрелец';
        }
        if (($date >= '1222' and $date <= '1231') or ($date >= '0101' and $date <= '0119')) {
            echo 'Козерог';
        }
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 8. </b><b class="D">Дан массив праздников. По заходу на страницу, если сегодня праздник,
            то поздравьте пользователя с этим праздником.</b></p>

    <?php
    $holiday = ['31.12', '23.02', '08.03', '09.05']; // допустим это массив праздников
    $today = date('d.m');
    foreach ($holiday as $item) {
        if ($item === $today) {
            echo 'Congratulations!';
        }
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 9. </b><b class="D">Сделайте скрипт-гороскоп. Внутри него хранится массив гороскопов
            на несколько дней вперед для каждого знака зодиака. По заходу на страницу спросите у пользователя
            дату рождения, определите его знак зодиака и выведите предсказание для этого знака зодиака
            на текущий день.</b></p>

    <form action="" method="post">
        <input type="text" name="test" checked placeholder="31.12">&nbsp Введите дату рождения<br><br>
        <input type="submit" name="submit_4"><br><br>
    </form>

    <?php
    $zodiac_sign = ['Водолей' => 'предсказание для Водолей на текущий день',
        'Рыбы' => 'предсказание для Рыбы на текущий день...',
        'Овен' => 'предсказание для Овен на текущий день...',
        'Телец' => 'предсказание для Телец на текущий день...',
        'Козерог' => 'предсказание для Козерог на текущий день...',
    ];
    if (!empty($_REQUEST['submit_4'])) {
        $date = implode(array_reverse(explode('.', $_REQUEST['test'])));

        if ($date >= '0120' and $date <= '0218') {
            $zodiac = 'Водолей';
            echo 'Ваш знак - ' . $zodiac, '<br>';
        }
        if ($date >= '0219' and $date <= '0320') {
            $zodiac = 'Рыбы';
            echo 'Ваш знак - ' . $zodiac, '<br>';
        }
        if ($date >= '0321' and $date <= '0419') {
            $zodiac = 'Овен';
            echo 'Ваш знак - ' . $zodiac, '<br>';
        }
        if ($date >= '0420' and $date <= '0520') {
            $zodiac = 'Телец';
            echo 'Ваш знак - ' . $zodiac, '<br>';
        }
        if (($date >= '1222' and $date <= '1231') or ($date >= '0101' and $date <= '0119')) {
            $zodiac = 'Козерог';
            echo 'Ваш знак - ' . $zodiac, '<br>';
        }
    }
    foreach ($zodiac_sign as $key => $elem) {
        if ($zodiac === $key) {
            echo $elem;
        }
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 10. </b><b class="D">Дан текстареа и кнопка. В текстареа вводится текст. По нажатию
            на кнопку выведите количество слов в тексте, количество символов в тексте, количество
            символов за вычетом пробелов.</b></p>

    <form action="" method="post">
        <textarea name="text" placeholder="Введите текст" required></textarea>&nbsp
        <input type="submit" name="submit_5"><br><br>
    </form>

    <?php
    if (!empty($_REQUEST['submit_5'])) {
        $count_str = explode(' ', $_REQUEST['text']);//создал массив эдементов(слов)
        echo 'количество слов в тексте - ' . count($count_str), '<br>';
        echo 'количество символов в тексте - ' . strlen($_REQUEST['text']), '<br>';
        $count_elem = implode($count_str);
        echo 'количество символов за вычетом пробелов - ' . strlen($count_elem), '<br>';
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 11. </b><b class="D">Дан текстареа и кнопка. В текстареа вводится текст. По нажатию
            на кнопку нужно посчитать процентное содержание каждого символа в тексте.</b></p>

    <form action="" method="post">
        <textarea name="text" placeholder="Введите текст" required></textarea>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="submit_6"><br><br>
    </form>

    <?php
    if (!empty($_REQUEST['submit_6'])) {
        $text = $_REQUEST['text']; //получаем строчную переменную
        echo $text . ' - введенная строка', '<br>';
        echo strlen($text) . ' - всего символов', '<br>';
        $one_item_percent = 100 / strlen($text); //сколько процентов весит 1 символ в текущей строке
        $test_str = count_chars($_REQUEST['text'], 1); // массив уникальных символов
        echo count($test_str) . ' - колличество уникальных символов использованых в строке', '<br><br>';
        foreach ($test_str as $key => $elem) {
            $percent_elem_in_str = $one_item_percent * $elem;
            echo "процентное содержание символа \"" . chr($key) . "\" в строке составляет - $percent_elem_in_str%", '<br>';
        }
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 12. </b><b class="D">Дан массив слов, инпут и кнопка. В инпут вводится набор букв.
            По нажатию на кнопку выведите на экран те слова, которые содержат в себе все введенные буквы.</b></p>

    <form action="" method="post">
        <input name="test" required>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="submit_7"><br><br>
    </form>

    <?php
    $text_str = 'lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua';
    echo $text_str . '<br><br>';

    if (!empty($_REQUEST['submit_7'])) {
        $text_arr = explode(' ', $text_str); // разбили нашу строку в Массив слов
        echo 'Массив слов - ' . $text_str, '<br><br>';

        $test_str = $_REQUEST['test']; //получаем строчную переменную
        echo $test_str . ' - строчная переменная из инпута' . '<br><br>';
        $test_arr = str_split($test_str); // массив Символов полученный из Инпута

        foreach ($text_arr as $elem) { // Итерируемся по словам из текста $text_str
            $result = $elem;

            foreach ($test_arr as $item) { // Проитерируемся по символам из Инпут
                $result = str_replace($item, '', $result, $count); // Удаляем симолы при совпадении и перезаписываем
                if ($count > 1) { /*Функция str_replace удаляет все вхождения данного символа в слове. А надо
 что бы удалял только один. По этому вводим такое условие которое будет добавлять данный символ к слову
 если удалились более 1го символа*/
                    $result = str_pad($result, (strlen($result) + ($count - 1)), $item); // Добавляем символы
                }
            }

            if ((strlen($elem) - strlen($result)) == strlen($test_str)) {
                echo 'Все введенные буквы содержатся в слове: ' . $elem, '<br><hr>';
            }
        }
    }

    function str_replace_once($search, $replace, $text)
    {
        $pos = strpos($text, $search);
        return $pos !== false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
    }

    $str = 'Helo World!';
    echo $str . '<br>';
    $str = str_replace_once('l', 'LL', $str);
    $str = str_replace_once('o', 'OO', $str);
    // $str = 'Hello World!';
    echo $str . ' - Функция замены ТОЛЬКО Первого вхождения символа в строке';
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 13. </b><b class="D">Дан текстареа и кнопка. В текстареа через пробел вводятся слова.
            По нажатию на кнопку выведите слова в таком виде: сначала заголовок 'слова на букву а' и под
            ним все слова, которые начинаются на 'а', потом заголовок 'слова на букву б' и все слова на 'б'
            и так далее. Буквы должны идти в алфавитном порядке. Брать следует только те буквы, на которые
            начинаются наши слова. То есть: если нет слов, к примеру, на букву 'в' - такого заголовка тоже
            не будет.</b></p>

    <form action="" method="post">
        <textarea name="text" placeholder="Введите текст" required></textarea>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="submit_8"><br><br>
    </form>

    <?php
    $text_str = 'lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua';
    echo $text_str . '<br><br>'; // Исходный текст

    if (!empty($_REQUEST['submit_8'])) {
        $arr_en = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $text_arr = explode(' ', $text_str); // разбили нашу строку в Массив слов
        foreach ($arr_en as $item) { // Итерируемся по Алфавиту
            $flag = false;
            foreach ($text_arr as $elem) { // Итерируемся по Всему Массиву слов
                if ($item === $elem[0] and $flag === false) {
                    $flag = true;
                    echo '<br>', 'слова на букву ' . $item . ':', '<br>';
                }
                if ($item === $elem[0]) {
                    echo $elem . '<br>';
                }
            }
        }
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 14. </b><b class="D">Дан инпут и кнопка. В этот инпут вводится строка на русском языке.
            По нажатию на кнопку выведите на экран транслит этой строки.</b></p>

    <form action="" method="post">
        <input name="text" required>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="submit_9"><br><br>
    </form>

    <?php

    if (!empty($_REQUEST['submit_9'])) {
        $converter = array(
            'а' => 'a', 'б' => 'b', 'в' => 'v',
            'г' => 'g', 'д' => 'd', 'е' => 'e',
            'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
            'и' => 'i', 'й' => 'y', 'к' => 'k',
            'л' => 'l', 'м' => 'm', 'н' => 'n',
            'о' => 'o', 'п' => 'p', 'р' => 'r',
            'с' => 's', 'т' => 't', 'у' => 'u',
            'ф' => 'f', 'х' => 'h', 'ц' => 'c',
            'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
            'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
            'э' => 'e', 'ю' => 'yu', 'я' => 'ya',

            'А' => 'A', 'Б' => 'B', 'В' => 'V',
            'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
            'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
            'И' => 'I', 'Й' => 'Y', 'К' => 'K',
            'Л' => 'L', 'М' => 'M', 'Н' => 'N',
            'О' => 'O', 'П' => 'P', 'Р' => 'R',
            'С' => 'S', 'Т' => 'T', 'У' => 'U',
            'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
            'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
            'Ь' => '\'', 'Ы' => 'Y', 'Ъ' => '\'',
            'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
        );
        $text_str = $_REQUEST['text'];
        echo $text_str . '<br>';
        echo strtr($text_str, $converter);
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 15. </b><b class="D">Дан инпут, 2 радиокнопочки и кнопка. В инпут вводится строка,
            а с помощью радиокнопочек выбирается - нужно преобразовать эту строку в транслит или из
            транслита обратно.</b></p>

    <form action="" method="post">
        <input name="text" required placeholder="Введите текст"><br><br>
        <input type="radio" name="test" value="1"> - Преобразовать в транслит<br>
        <input type="radio" name="test" value="2"> - Из транслита обратно<br><br>
        <input type="submit" name="submit_10"><br><br>
    </form>

    <?php

    if (!empty($_REQUEST['submit_10'])) {
        $text_str = $_REQUEST['text'];
        echo $text_str . ' - Введённая строка', '<br><br>';
        $converter = array(
            'а' => 'a', 'б' => 'b', 'в' => 'v',
            'г' => 'g', 'д' => 'd', 'е' => 'e',
            'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
            'и' => 'i', 'й' => 'y', 'к' => 'k',
            'л' => 'l', 'м' => 'm', 'н' => 'n',
            'о' => 'o', 'п' => 'p', 'р' => 'r',
            'с' => 's', 'т' => 't', 'у' => 'u',
            'ф' => 'f', 'х' => 'h', 'ц' => 'c',
            'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
            'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
            'э' => 'e', 'ю' => 'yu', 'я' => 'ya',

            'А' => 'A', 'Б' => 'B', 'В' => 'V',
            'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
            'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
            'И' => 'I', 'Й' => 'Y', 'К' => 'K',
            'Л' => 'L', 'М' => 'M', 'Н' => 'N',
            'О' => 'O', 'П' => 'P', 'Р' => 'R',
            'С' => 'S', 'Т' => 'T', 'У' => 'U',
            'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
            'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
            'Ь' => '\'', 'Ы' => 'Y', 'Ъ' => '\'',
            'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
        );
        $translit = strtr($text_str, $converter);
        if ($_REQUEST['test'] == 1) {
            echo strtr($text_str, $converter) . ' - В транслит', '<br>';
        } else {
            echo strtr($translit, array_flip($converter)) . ' - Из транслита обратно', '<br>';
        }
    }
    ?>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 16. </b><b class="D">Дан массив с вопросами и правильными ответами. Реализуйте тест:
            выведите на экран все вопросы, под каждым инпут. Пользователь читает вопрос, пишет свой ответ в инпут.
            Когда вопросы заканчиваются - он жмет на кнопку, страница обновляется и вместо инпутов под вопросами
            появляется сообщение вида: 'ваш ответ: ... верно!' или 'ваш ответ: ... неверно! Правильный ответ: ...'.
            Правильно отвеченные вопросы должны гореть зеленым цветом, а неправильно - красным.</b></p>

    <form action="" method="post">
        Вопрос 1
        <?php if (empty($_REQUEST['submit_11'])) echo '<input name="text1" required placeholder="Введите ответ">';
        if (!empty($_REQUEST['submit_11'])) {
            $question1 = 'Правильный ответ 1'; // Правильный ответ для проверки скрипта
            $text_str1 = $_REQUEST['text1'];
            if ($question1 == $text_str1) {
                echo '<b class="Y"> Верно!</b>';
            } else {
                echo '<b class="N"> Неверно!</b>';
            }
        }
        ?><br><br>
        <input type="submit" name="submit_11"><br><br>
    </form>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 17. </b><b class="D">Модифицируем предыдущую задачу: пусть теперь тест показывает
            варианты ответов и радиокнопочки. Пользователь должен выбрать один и вариантов.</b></p>

    <form action="" method="post">
        Вопрос: <br><br>
        <?php
        if (empty($_REQUEST['submit_12'])) {
            echo '<input type="radio" name="radio" value="1"> - Ответ 1<br>
<input type="radio" name="radio" value="2"> - Ответ 2<br>
<input type="radio" name="radio" value="3"> - Ответ 3 <br>
<br><input type="submit" name="submit_12">';
        }
        if (!empty($_REQUEST['submit_12'])) {
            $question1 = '1'; // Правильный ответ!
            $text_str1 = $_REQUEST['radio'];
            if ($question1 == $text_str1) {
                echo '<b class="Y"> Верно!</b>';
            } else {
                echo '<b class="N"> Неверно!</b>';
            }
        }
        ?>
    </form>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 18. </b><b class="D">Модифицируем предыдущую задачу: пусть теперь на один вопрос может
            быть несколько правильных ответов. Пользователь должен отметить один или несколько чекбоксов.</b></p>

    <form action="" method="post">
        Вопрос: <br>
        <input type="checkbox" name="check[]" value="Ответ 1"><br>
        <input type="checkbox" name="check[]" value="Ответ 2" checked><br>
        <input type="checkbox" name="check[]" value="Ответ 3"><br>
        <input type="checkbox" name="check[]" value="Ответ 4"><br>
        <input type="submit" name="submit_13"><br><br>

        <?php
        if (!empty($_REQUEST['submit_13'])) {
            $question1 = 'Ответ 2'; // Правильный ответ!
            $question2 = 'Ответ 4'; // Правильный ответ!
            $text_str = $_REQUEST['check'];
            if ($question1 == $text_str[0] or $question2 == $text_str[1] or
                ($question1 == $text_str[0] and $question2 == $text_str[1])) {
                echo '<b class="Y"> Верно!</b>';
            } else {
                echo '<b class="N"> Неверно!</b>';
            }
        }
        ?>
    </form>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 19. </b><b class="D">Напишите скрипт, который будет считать факториал числа.
            Само число вводится в инпут и после нажатия на кнопку пользователь должен увидеть результат.</b></p>

    <form action="" method="post">
        <input name="name" placeholder="Введите число">&nbsp;&nbsp;
        <input type="submit" name="submit_14" value="Факториал"><br><br>

        <?php
        if (!empty($_REQUEST['submit_14'])) {
            $name_int = $_REQUEST['name'];
            $result = 1;
            for ($i = $name_int; $i > 1; $i--) {
                $result *= $i;
            }
            echo $result;
        }
        ?>
    </form>
</fieldset>
<br>


<fieldset>
    Task 20. Напишите скрипт, который будет находить корни квадратного уравнения. Для этого сделайте 3 инпута,
    в которые будут вводиться коэффициенты уравнения.
    <p>Херня какая то! А не задачка</p>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 21. </b><b class="D">Даны 3 инпута. В них вводятся числа. Проверьте, что эти числа
            являются тройкой Пифагора: квадрат самого большого числа должен быть равен сумме квадратов двух
            остальных. Примеры чисел: (3, 4, 5) (5, 12, 13) (8, 15, 17) (7, 24, 25) (20, 21, 29) (12, 35, 37)
            (9, 40, 41) (28, 45, 53)</b></p>

    <form action="" method="post">

        <?php
        if (!empty($_REQUEST['submit_21'])) {
            $arr_int = [];

            $arr_int[] = $_REQUEST['A'];
            $arr_int[] = $_REQUEST['B'];
            $arr_int[] = $_REQUEST['C'];

            $A_int_pow2 = $arr_int[0] ** 2;
            $B_int_pow2 = $arr_int[1] ** 2;
            $C_int_pow2 = $arr_int[2] ** 2;

            $key_max_int = array_keys($arr_int, max($arr_int)); // Возвращает Массив Ключей от максимальных значений
            $key_max_int = $key_max_int[0]; // Получили ключ максимального значения

            if ($key_max_int == 0) {
                if ($A_int_pow2 == ($B_int_pow2 + $C_int_pow2)) {
                    echo 'числа являются тройкой Пифагора', '<br>';
                } else {
                    echo 'числа НЕ являются тройкой Пифагора', '<br>';
                }
            }
            if ($key_max_int == 1) {
                if ($B_int_pow2 == ($A_int_pow2 + $C_int_pow2)) {
                    echo 'числа являются тройкой Пифагора', '<br>';
                } else {
                    echo 'числа НЕ являются тройкой Пифагора', '<br>';
                }
            }
            if ($key_max_int == 2) {
                if ($C_int_pow2 == ($A_int_pow2 + $B_int_pow2)) {
                    echo 'числа являются тройкой Пифагора', '<br>';
                } else {
                    echo 'числа НЕ являются тройкой Пифагора', '<br>';
                }
            }
        }
        ?>

        <p><input type="number" name="A" placeholder="Введите число"
                  value="<?php if (!empty($_REQUEST['A'])) echo $_REQUEST['A']; ?>" required></p>
        <p><input type="number" name="B" placeholder="Введите число"
                  value="<?php if (!empty($_REQUEST['B'])) echo $_REQUEST['B']; ?>" required></p>
        <p><input type="number" name="C" placeholder="Введите число"
                  value="<?php if (!empty($_REQUEST['C'])) echo $_REQUEST['C']; ?>" required></p>
        <p><input type="submit" name="submit_21"></p>

    </form>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 22. </b> <b class="D">Дан инпут и кнопка. В инпут вводится число.
            По нажатию на кнопку выведите список делителей этого числа.</b></p>

    <form action="" method="post">

        <p><input type="number" name="int" placeholder="Введите число" required></p>
        <p><input type="submit" name="submit_22"></p>

        <?php
        if (!empty($_REQUEST['submit_22'])) {
            $int = $_REQUEST['int']; // Вводимое число

            for ($i = 1; $i <= $int; $i++) {
                if ($int % $i == 0) {
                    $flag = true;
                    echo $i . '<br>';
                }
            }
        }
        ?>

    </form>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 23. </b> <b class="D">Дан инпут и кнопка. В инпут вводится число.
            По нажатию на кнопку разложите число на простые множители.</b></p>

    <form action="" method="post">

        <p><input type="number" name="int" placeholder="Введите число" required></p>
        <p><input type="submit" name="submit_23"></p>

        <?php
        if (!empty($_REQUEST['submit_23'])) {
            $int = $_REQUEST['int']; // Вводимое число
            var_dump($int);
            echo ' - Введенное число. Простые множители: ', '<br>';
            //$int = ((int)($int));

            for ($i = 2; $i <= $int;) {
                $a = $int / $i;
                if (is_int($a)) {
                    $int = $a; // Переназначаем переменную $int в случае целочисленного деления
                    echo $i . ' - i', '<br>';
                    //echo $int . ' - Переназначаем int', '<br><br>';
                } else {
                    $i++;
                }
            }
        }
        ?>
    </form>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 24. </b> <b class="D">Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию
            на кнопку выведите список общих делителей этих двух чисел.</b></p>

    <form action="" method="post">
        <p><input type="number" name="int_1" placeholder="Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_24'])) {
                echo $_REQUEST['int_1'];
            } ?></p>
        <p><input type="number" name="int_2" placeholder="Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_24'])) {
                echo $_REQUEST['int_2'];
            } ?></p>
        <p><input type="submit" name="submit_24"></p>

        <?php
        if (!empty($_REQUEST['submit_24'])) {
            $int_1 = $_REQUEST['int_1']; // Вводимое число 1
            $int_2 = $_REQUEST['int_2']; // Вводимое число 2

            $int_arr_1 = []; // создаем массивы куда будем складывать делители каждого числа
            $int_arr_2 = [];

            for ($i = 1; $i <= $int_1; $i++) {
                if ($int_1 % $i == 0) {
                    //echo $i . ' - делители первого числа', '<br>';
                    $int_arr_1[] = $i;
                }
            }
            /*print_r($int_arr_1);
            echo '- список делителей $int_1', '<br><br>';*/

            for ($j = 1; $j <= $int_2; $j++) {
                if ($int_2 % $j == 0) {
                    //echo $j . ' - делители второго числа', '<br>';
                    $int_arr_2[] = $j;
                }
            }
            /*print_r($int_arr_2);
            echo '- список делителей $int_2', '<br><br>';*/

            var_dump(array_intersect($int_arr_1, $int_arr_2));
            echo ' - список общих делителей этих двух чисел.';
        }
        ?>
    </form>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 25. </b> <b class="D">Даны 2 инпута и кнопка. В инпуты вводятся числа.
            По нажатию на кнопку выведите наибольший общий делитель этих двух чисел.</b></p>

    <form action="" method="post">
        <p><input type="number" name="int_1" placeholder="Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_25'])) {
                echo $_REQUEST['int_1'];
            } ?></p>
        <p><input type="number" name="int_2" placeholder="Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_25'])) {
                echo $_REQUEST['int_2'];
            } ?></p>
        <p><input type="submit" name="submit_25"></p>

        <?php
        if (!empty($_REQUEST['submit_25'])) {
            $int_1 = $_REQUEST['int_1']; // Вводимое число 1
            $int_2 = $_REQUEST['int_2']; // Вводимое число 2

            $int_arr_1 = []; // создаем массивы куда будем складывать делители каждого числа
            $int_arr_2 = [];

            for ($i = 1; $i <= $int_1; $i++) {
                if ($int_1 % $i == 0) {
                    //echo $i . ' - делители первого числа', '<br>';
                    $int_arr_1[] = $i;
                }
            }
            /*print_r($int_arr_1);
            echo '- список делителей $int_1', '<br><br>';*/

            for ($j = 1; $j <= $int_2; $j++) {
                if ($int_2 % $j == 0) {
                    //echo $j . ' - делители второго числа', '<br>';
                    $int_arr_2[] = $j;
                }
            }
            /*print_r($int_arr_2);
            echo '- список делителей $int_2', '<br><br>';*/

            var_dump(max(array_intersect($int_arr_1, $int_arr_2)));
            echo ' - наибольший общий делитель этих двух чисел.';
        }
        ?>
    </form>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 26. </b> <b class="D">Даны 2 инпута и кнопка. В инпуты вводятся числа. По нажатию на
            кнопку выведите наименьшее число, которое делится и на одно, и на второе из введенных чисел.</b></p>

    <form action="" method="post">
        <p><input type="number" name="int_1" placeholder="Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_26'])) {
                echo $_REQUEST['int_1'];
            } ?></p>
        <p><input type="number" name="int_2" placeholder="Введите число"
                  required>&nbsp;&nbsp;&nbsp;<?php if (!empty($_REQUEST['submit_26'])) {
                echo $_REQUEST['int_2'];
            } ?></p>
        <p><input type="submit" name="submit_26"></p>

        <?php
        if (!empty($_REQUEST['submit_26'])) {
            $int_1 = $_REQUEST['int_1']; // Вводимое число 1
            $int_2 = $_REQUEST['int_2']; // Вводимое число 2

            $int_arr_1 = []; // Массив числел int_1 * $i
            $int_arr_2 = [];
            $smallest_number = []; // наименьший делитель

            for ($i = 1, $j = 1; ; $i++, $j++) {
                $int_arr_1[] = $int_1 * $i;
                $int_arr_2[] = $int_2 * $j;
                $smallest_number = array_intersect($int_arr_1, $int_arr_2); // ищем первое общее число
                if (count($smallest_number) > 0) { // выходим из цикла при выполнении условия задачи
                    break;
                }
            }
            print_r($smallest_number);
            echo ' - число, которое делится и на одно, и на второе из введенных чисел.';

        }
        ?>
    </form>
</fieldset>
<br>


<fieldset>
    <p><b class="T">Task 27. </b> <b class="D">Даны 3 селекта и кнопка. Первый селект - это дни от 1 до 31,
            второй селект - это месяцы от января до декабря, а третий - это годы от 1990 до 2025. С помощью
            этих селектов можно выбрать дату. По нажатию на кнопку выведите на экран день недели,
            соответствующий этой дате, например, 'воскресенье'.</b></p>

    <form action="" method="post">
        <p><select name="day">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select></p>

        <p><select name="month">
                <option value="1">Январь</option>
                <option value="2">Февраль</option>
                <option value="3">Март</option>
                <option value="4">Апрель</option>
                <option value="5">Май</option>
            </select></p>

        <p><select name="year">
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
            </select></p>

        <p><input type="submit" name="submit_27"></p>

        <?php
        if (!empty($_REQUEST['submit_27'])) {
            $day = $_REQUEST['day'];
            $month = $_REQUEST['month'];
            $year = $_REQUEST['year'];

            $a = date('w', mktime(0, 0, 0, $month, $day, $year));
            $week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
            echo $week[$a];
        }
        ?>
    </form>
</fieldset>
<br>


</body>
</html>























