<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <title>Занятие №31</title>
</head>
<body>

<p><b class="T1">Занятие №31. </b><b class="D1">Работа с файловой системой</b></p>

<p><b class="T1">Задачи для решения:</b></p>

<p><b class="D1"> - Чтение файла с помощью функции file_get_contents</b></p>

<fieldset>
    <p><b class="T">Task 1. </b><b class="D">Пусть в корне вашего сайта лежит файл test.txt.
            Считайте данные из этого файла и выведите их на экран.</b></p>
    <?php
    // file_get_contents('имя файла или путь к файлу')
    echo file_get_contents('test.txt'), '<br>';
    echo file_get_contents('folder/test.txt');
    ?>
</fieldset>
<br>


<p><b class="D1"> - Запись в файл с помощью функции file_put_contents</b></p>

<fieldset>
    <p><b class="T">Task 2. </b><b class="D">Пусть в корне вашего сайта лежит файл test2.txt.
            Запишите в него текст '12345'.</b></p>
    <?php
    file_put_contents('test2.txt', '12345');
    file_put_contents('folder/test2.txt', '12345');
    echo file_get_contents('test2.txt'), '<br>';
    echo file_get_contents('folder/test2.txt');
    ?>
</fieldset>
<br>


<p><b class="D1"> - Создание файла через file_put_contents</b></p>

<fieldset>
    <p><b class="T">Task 3. </b><b class="D">Создайте файл test3.txt и запишите в него текст 'created file'.
            Пусть изначально файла с таким именем не существует.</b></p>
    <?php
    file_put_contents('folder/test3.txt', 'created file');
    echo file_get_contents('folder/test3.txt'), '<br>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 4. </b><b class="D">Создайте файл new.txt с пустым текстом.
            Пусть изначально файла с таким именем не существует.</b></p>
    <?php
    file_put_contents('folder/new.txt', '');
    echo file_get_contents('folder/new.txt');
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 5. </b><b class="D">Дан массив с именами файлов ['1.txt', '2.txt', '3.txt'].
            Переберите его циклом и создайте файлы с такими именами и пустым текстом.</b></p>
    <?php
    $arr = ['1.txt', '2.txt', '3.txt'];

    foreach ($arr as $elem) {
        file_put_contents("folder/$elem", '');
    }
    ?>
</fieldset>
<br>


<p><b class="D1"> - Чтение и запись файлов</b></p>

<fieldset>
    <p><b class="T">Task 6. </b><b class="D">Пусть в корне вашего сайта лежит файл test6.txt,
            в котором записан текст 'test'. Откройте этот файл, запишите в конец текста
            восклицательный знак и сохраните новый текст обратно в файл.</b></p>
    <?php
    file_put_contents('folder/text6.txt', 'test');
    $text = file_get_contents('folder/text6.txt');
    file_put_contents('folder/text6.txt', $text . '!');
    echo file_get_contents('folder/text6.txt');
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 7. </b><b class="D">Пусть в корне вашего сайта лежит файл test7.txt, в котором
            записано некоторое число. Откройте этот файл, возведите число в квадрат и запишите обратно в файл.</b></p>
    <?php
    file_put_contents('folder/text7.txt', '3');
    $int = file_get_contents('folder/text7.txt');
    $int *= $int;
    file_put_contents('folder/text7.txt', $int);
    echo file_get_contents('folder/text7.txt')
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 8. </b><b class="D">Пусть в корне вашего сайта лежит файл count.txt.
            Изначально в нем записано число 0. Сделайте так, чтобы при обновлении страницы наш скрипт
            каждый раз увеличивал это число на 1. То есть у нас получится счетчик обновления страницы
            в виде файла.</b></p>
    <?php
    $i = file_get_contents('folder/count.txt');
    file_put_contents('folder/count.txt', $i + 1);
    echo file_get_contents('folder/count.txt');
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 9. </b><b class="D">Пусть в корне вашего сайта лежат файлы 9.1.txt, 9.2.txt и 9.3.txt.
            Вручную сделайте массив с именами этих файлов. Переберите его циклом, прочитайте содержимое
            каждого из файлов, слейте его в одну строку и запишите в новый файл new9.txt. Изначально этого
            файла не должно быть.</b></p>
    <?php
    $arr = ['9.1.txt', '9.2.txt', '9.3.txt'];
    $str = '';
    foreach ($arr as $elem) {
        file_put_contents("folder/$elem", $elem);
        $str .= file_get_contents("folder/$elem");
    }
    file_put_contents("folder/new9.txt", $str);
    echo file_get_contents('folder/new9.txt')
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 10. </b><b class="D">Пусть в корне вашего сайта лежат файлы 9.1.txt, 9.2.txt и 9.3.txt.
            Вручную сделайте массив с именами этих файлов. Переберите его циклом и в текст каждого файла
            в конец запишите восклицательный знак.</b></p>
    <?php
    $arr = ['9.1.txt', '9.2.txt', '9.3.txt'];
    foreach ($arr as $item) {
        $str = file_get_contents("folder/$item");
        file_put_contents("folder/$item", $str . '!');
        echo file_get_contents("folder/$item"), '<br>';
    }
    ?>
</fieldset>
<br>


<p><b class="D1"> - Переименовывание файлов</b></p>

<fieldset>
    <p><b class="T">Task 11. </b><b class="D">Пусть в корне вашего сайта лежит файл old.txt.
            Переименуйте его на new.txt.</b></p>
    <?php
    file_put_contents('folder/old.txt', '');
    rename('folder/old.txt', 'folder/new11.txt');
    ?>
</fieldset>
<br>


<p><b class="D1"> - Перемещение файлов</b></p>

<fieldset>
    <p><b class="T">Task 12. </b><b class="D">Пусть в корне вашего сайта лежит файл test.txt.
            Пусть также в корне вашего сайта лежит папка folder. Переместите файл в эту папку.</b></p>
    <?php
    file_put_contents('test12.txt', '');
    rename('test12.txt', 'folder/test12.txt');
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 13. </b><b class="D">Пусть в корне вашего сайта лежит папка folder, а в ней файл test.txt.
            Пусть также в корне вашего сайта лежит папка dir. Переместите файл в эту папку.</b></p>
    <?php
    file_put_contents('folder/test13.txt', '');
    rename('folder/test13.txt', 'dir/test13.txt');
    ?>
</fieldset>
<br>


<p><b class="D1"> - Копия файла</b></p>

<fieldset>
    <p><b class="T">Task 14-15. </b><b class="D">Пусть в корне вашего сайта лежит файл test.txt.
            Пусть также в корне вашего сайта лежит папка dir. Скопируйте файл test.txt в папку dir.</b></p>
    <?php
    file_put_contents('folder/test14.txt', '');
    copy('folder/test14.txt', 'dir/copy14.txt')
    ?>
</fieldset>
<br>


<p><b class="D1"> - Удаление файла</b></p>

<fieldset>
    <p><b class="T">Task 16. </b><b class="D">Пусть в корне вашего сайта лежит файл test.txt. Удалите его.</b></p>
    <?php
    file_put_contents('folder/test16.txt', '');
    unlink('folder/test16.txt');
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 17. </b><b class="D">Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt.
            Вручную сделайте массив с именами этих файлов. Переберите его циклом и удалите все эти файлы.</b></p>
    <?php
    $arr = ['1.txt', '2.txt', '3.txt'];
    foreach ($arr as $elem) {
        file_put_contents("dir/$elem", '');
        unlink("dir/$elem");
    }
    ?>
</fieldset>
<br>


<p><b class="D1"> - Проверка существования файла</b></p>

<fieldset>
    <p><b class="T">Task 18. </b><b class="D">Проверьте, лежит ли в корне вашего сайта файл test.txt.</b></p>
    <?php
    var_dump(file_exists('test.txt'));
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 19. </b><b class="D">Проверьте, лежит ли в корне вашего сайта файл test.txt.
            Если да - удалите его, если нет - создайте.</b></p>
    <?php
    file_put_contents('folder/test19.txt', ''); // создали файл
    //unlink('folder/test19.txt');

    if (file_exists('folder/test19.txt')) {
        echo 'файл найден, удаляем его', '<br>';
        unlink('folder/test19.txt');
    } else {
        echo 'файл не найден, создаем его', '<br>';
        file_put_contents('folder/test19.txt', '');
    }

    echo 'проверяем наличие файла после скрипта: ', '<br>';
    var_dump(file_exists('folder/test19.txt'));
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 20. </b><b class="D">Дан массив с именами файлов ['1.txt', '2.txt', '3.txt'].
            Переберите его циклом и проверьте каждый файл на существование.
            Выведите на экран имя каждого файла и рядом текст "существует" или "не существует".</b></p>
    <?php
    $arr = ['20.1.txt', '20.2.txt', '20.3.txt'];
    file_put_contents('folder/20.1.txt', ''); // создали файл
    //file_put_contents('folder/20.2.txt', ''); // создали файл
    file_put_contents('folder/20.3.txt', ''); // создали файл

    foreach ($arr as $elem) {
        if (file_exists("folder/$elem")) {
            echo $elem . ' - существует', '<br>';
        } else {
            echo $elem . ' - не существует', '<br>';
        }
    }
    ?>
</fieldset>
<br>


<p><b class="D1"> - Определение размера файла</b></p>

<fieldset>
    <p><b class="T">Task 21. </b><b class="D">Пусть в корне вашего сайта лежит файл test.txt.
            Узнайте его размер, выведите на экран.</b></p>
    <?php
    var_dump(filesize('test.txt'));
    echo ' - размер в байтах';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 22. </b><b class="D">Модифицируйте предыдущую задачу так,
            чтобы размер файла выводился в килобайтах.</b></p>
    <?php
    print_r(filesize('test.txt') / 1024);
    echo ' - размер в килобайтах';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 23. </b><b class="D">Положите в корень вашего сайта какую-нибудь картинку
            размером более мегабайта. Узнайте размер этого файла и переведите его в мегабайты.</b></p>
    <?php
    print_r(filesize('PHP.png') . ' - байты');
    echo '<br>' . filesize('PHP.png') / (1024 * 1024) . ' - мегабайты';
    ?>
</fieldset>
<br>


<p><b class="D1"> - Работа с переносом строки и PHP_EOL</b></p>

<fieldset>
    <p><b class="T">Task 25. </b><b class="D">Дан файл test.txt. Прочитайте его текст,
            получите массив его строк.</b></p>
    <?php
    $test = file_get_contents('test.txt');
    //var_dump($test);
    $arr = explode(PHP_EOL, $test);
    var_dump($arr);
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 26. </b><b class="D">Дан файл test.txt. В нем на каждой строке написано какое-то число.
            Найдите сумму этих чисел и запишите ее в файл sum.txt.</b></p>
    <?php
    $test = file_get_contents('test.txt');
    $arr = explode(PHP_EOL, $test);
    //var_dump($arr);
    $sum = 0;
    foreach ($arr as $elem) {
        $sum += $elem;
    }
    file_put_contents('dir/sum.txt', $sum);
    echo file_get_contents('dir/sum.txt');
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 27. </b><b class="D">Дан массив. Запишите элементы этого массива в файл test.txt так,
            чтобы каждый элемент начинался с новой строки.</b></p>
    <?php
    $arr = ['1', '2', '3'];
    file_put_contents('dir/test27.txt', implode(PHP_EOL, $arr));
    echo file_get_contents('dir/test27.txt');
    ?>
</fieldset>
<br>


<p><b class="D1"> - Получение массива строк файла с помощью функции file</b></p>

<fieldset>
    <p><b class="T">Task 28. </b><b class="D">Дан файл test.txt. В нем на каждой строке написано
            какое-то число. С помощью функции file найдите сумму этих чисел и выведете ее на экран.</b></p>
    <?php
    echo array_sum(file('test.txt', FILE_IGNORE_NEW_LINES));
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 29. </b><b class="D">Дан файл test.txt. В нем на каждой строке написано
            какое-то число. С помощью функции file найдите сумму этих чисел и запишите эту сумму
            обратно в конец файла, с новой строки.</b></p>
    <?php
    $test = file_get_contents('test.txt');
    //echo $test;
    $sum = array_sum(file('test.txt', FILE_IGNORE_NEW_LINES));
    file_put_contents('dir/test29.txt', $test . PHP_EOL . $sum);
    echo file_get_contents('dir/test29.txt');
    ?>
</fieldset>
<br>


<p><b class="D1"> - Создание папки</b></p>

<fieldset>
    <p><b class="T">Task 30. </b><b class="D">Создайте в корне вашего сайта папку с названием dir.</b></p>
    <?php
    //mkdir('dir/dir');
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 31. </b><b class="D">Дан массив со строками. Создайте в корне вашего сайта папки,
            названиями которых служат элементы этого массива</b></p>
    <?php
    $arr = ['1.txt', '2.txt', '3.txt'];
    /*foreach ($arr as $elem) {
        mkdir('dir/dir/' . $elem);
    }*/
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 32. </b><b class="D">Создайте в корне вашего сайта папку с названием test.
            Затем создайте в этой папке 3 файла: 1.txt, 2.txt, 3.txt.</b></p>
    <?php
    $arr = ['1.txt', '2.txt', '3.txt'];
    /*mkdir('dir/test');
    foreach ($arr as $elem) {
        file_put_contents('dir/test/' . $elem, '');
    }*/
    ?>
</fieldset>
<br>


<p><b class="D1"> - Удаление папок</b></p>

<fieldset>
    <p><b class="T">Task 33. </b><b class="D">Удалите папку с названием dir.</b></p>
    <?php
    //mkdir('folder/dir');
    //rmdir('folder/dir');
    ?>
</fieldset>
<br>


<p><b class="D1"> - Переименовывание и перемещение папок</b></p>

<fieldset>
    <p><b class="T">Task 34. </b><b class="D">Пусть в корне вашего сайта лежит папка old.
            Переименуйте ее на new.</b></p>
    <?php
    //mkdir('dir/old');
    //rename('dir/old', 'dir/new');
    ?>
</fieldset>
<br>


<p><b class="D1"> - Чтение содержимого папки с помощью scandir</b></p>

<fieldset>
    <p><b class="T">Task .35 </b><b class="D">Пусть в корне вашего сайта лежит папка dir,
            а в ней какие-то текстовые файлы. Выведите на экран столбец имен этих файлов.</b></p>
    <?php
    $files = array_diff(scandir('dir'), ['.', '..']); //создаем массив файлов
    foreach ($files as $file) {
        echo $file . '<br>';
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 36. </b><b class="D">Пусть в корне вашего сайта лежит папка dir, а в ней какие-то
            текстовые файлы. Переберите эти файлы циклом, откройте каждый из них и запишите в конец
            восклицательный знак.</b></p>
    <?php
    $files = array_diff(scandir('folder'), ['.', '..']);
    foreach ($files as $file) {
        $info = file_get_contents('folder/' . $file);
        file_put_contents('folder/' . $file, $info . '!');
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 37. </b><b class="D">Пусть в корне вашего сайта лежит папка dir, а в ней
            какие-то текстовые файлы. Переберите эти файлы циклом и выведите их тексты в браузер.</b></p>
    <?php
    $files = array_diff(scandir('folder'), ['.', '..']);
    foreach ($files as $file) {
        echo file_get_contents('folder/' . $file) . '<br>';
    }
    ?>
</fieldset>
<br>


<p><b class="D1"> - Отличаем папку от файла с помощью is_file и is_dir</b></p>

<fieldset>
    <p><b class="T">Task 38. </b><b class="D">Пусть дан путь к файлу. Проверьте, файл это или папка.</b></p>
    <?php
    if (is_file('PHP.png')) {
        echo 'файл';
    } else {
        echo 'папка';
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 39. </b><b class="D">Пусть в корне вашего сайта лежит папка dir,
            а в ней какие-то файлы и подпапки. Выведите на экран столбец имен подпапок из папки dir.</b></p>
    <?php
    $files = array_diff(scandir('dir'), ['.', '..']);
    foreach ($files as $file) {
        if (is_dir('dir/' . $file)) {
            echo $file . '<br>';
        }
    }
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 40. </b><b class="D">Пусть в корне вашего сайта лежит папка dir,
            а в ней какие-то файлы и подпапки. Выведите на экран столбец имен файлов из папки dir.</b></p>
    <?php
    $files = array_diff(scandir('dir'), ['.', '..']);
    foreach ($files as $file) {
        if (is_file('dir/' . $file)) {
            echo $file . '<br>';
        }
    }
    ?>
</fieldset>
<br>


<p><b class="D1"> - Рекурсивный обход вложенных папок</b></p>

<fieldset>
    <p><b class="T">Task 41. </b><b class="D">Пусть в корне вашего сайта лежит папка dir, а в ней
            какие-то текстовые файлы и подпапки. В подпапках в свою очередь также могут быть
            текстовые файлы и подпапки. Рекурсивно пройдитесь по всем вложенным папкам и выведите
            в браузер пути ко всем текстовым файлам.</b></p>
    <?php
    get_files('dir');

    function get_files($dir)
    {
        $files = array_diff(scandir($dir), ['.', '..']); // формируем массив файлов указанной директории

        foreach ($files as $file) {
            $path = $dir . '/' . $file; // формируем путь к текущему файлу
            if (is_dir($path)) { // если данный путь - папка, то запускаем функцию для него и читаем содержимое
                get_files($path);
            } else {
                echo $path . '<br>';
            }
        }
    }

    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 42. </b><b class="D">Пусть в корне вашего сайта лежит папка dir
            с текстовыми файлами и подпапками. Рекурсивно пройдитесь по всем вложенным папкам
            и в конец каждого текстового файла запишите восклицательный знак.</b></p>
    <?php
    function put_files($dir)
    {
        // формируем массив файлов из нужной директории, удаляем ненужные точки
        $files = array_diff(scandir($dir), ['.', '..']);

        // проходимся циклом по элементам массива
        foreach ($files as $file) {
            // составляем путь к каждому файлу
            $path = $dir . '/' . $file;
            // если путь идет до вложенной папки - запускаем рекурсию
            if (is_dir($path)) {
                put_files($path);
            } else {
                $text = file_get_contents($path);
                file_put_contents($path, $text . '!');
                echo file_get_contents($path) . '<br>';
            }
        }
    }

    put_files('dir/dir42')
    ?>
</fieldset>
<br>


<p><b class="D1"> - Рекурсивное удаление папки вместе с подпапками</b></p>

<fieldset>
    <p><b class="T">Task 43. </b><b class="D">Пусть в корне вашего сайта лежит папка dir с текстовыми
            файлами и подпапками. Удалите папку dir вместе с ее содержимым.</b></p>
    <?php
    // для проверки кода нужно создать папку с папками и файлами, как в условии задачи. И указать путь в аргументах


    //remove_dir('dir/dir43');

    function remove_dir($dir)
    {
        $files = array_diff(scandir($dir), ['.', '..']);

        foreach ($files as $file) {
            $path = $dir . '/' . $file;
            if (is_dir($path)) {
                remove_dir($path);
            } else {
                unlink($path);
            }
        }
        rmdir($dir);
    }

    ?>
</fieldset>
<br>


<p><b class="D1"> - Функция glob PHP</b></p>

<fieldset>
    <p><b class="T">Task . </b><b class="D">Осуществляет поиск файлов по заданной дирректории
            с указанным расширением, потестим:</b></p>
    <?php
    print_r(glob('dir/*.txt'));
    ?>
</fieldset>
<br>

</body>
</html>

