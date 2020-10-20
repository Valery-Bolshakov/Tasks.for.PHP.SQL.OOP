<?php
/**
 * Time: 23:37
 */
?>

<h3>Занятие №20. Задачи на продвинутую работу с формами в PHP:</h3>
<h4>Работа с checkbox:</h4>

<?php
//isset — Определяет, была ли установлена переменная значением, отличным от NULL
//empty — Проверяет, пуста ли переменная
// &nbsp; - Cпецсимвол HTML "Неразрывный пробел"
?>

<form action="" method="post">
    <fieldset>
        <legend>Task 1. Спросите у пользователя <b>имя</b> с помощью формы. Сделайте чекбокс: если он отмечен,<br>
            то поприветствуйте пользователя, если не отмечен - попрощайтесь с пользователем.
        </legend>
        <input type="text" name="name" placeholder="Введите Имя" required>&nbsp;
        <input type="hidden" name="hi" value="0">
        <input type="checkbox" name="hi" value="1">&nbsp;
        <input type="submit"><br><br>
        <?php
        if (isset($_REQUEST['hi']) and $_REQUEST['hi'] == 1) {
            echo 'Приветствую, ' . $_REQUEST['name'];
        }
        if (isset($_REQUEST['hi']) and $_REQUEST['hi'] == 0) {
            echo 'До новых встреч, ' . $_REQUEST['name'];
        }
        ?>
    </fieldset>
</form>


<form action="" method="post">
    <fieldset>
        Task 1.1 Спросите у пользователя логин и пароль с помощью формы авторизации. Сделайте чекбокс 'запомнить
        меня'.
        Выведите<br>на экран логин, пароль, а также информацию о том, запомнил ли пользователя сайт.<br><br>

        <input type="text" name="name" placeholder="Введите Логин" required>&nbsp;
        <input type="password" name="pass" placeholder="Введите Пароль" required><br>
        <input type="hidden" name="hi" value="0">
        <input type="checkbox" name="hi" value="1">&nbsp;"запомнить данные"<br><br>
        <input type="submit" name="submit_1"><br><br>
        <?php
        if (!empty($_REQUEST['submit_1'])) {
            echo 'Логин: ' . $_REQUEST['name'] . '<br>' . 'Пароль: ' . $_REQUEST['pass'] . '<br>';

            if (isset($_REQUEST['hi']) and $_REQUEST['hi'] == 1) {
                echo 'Данные сохранены.';
            } else {
                echo 'Данные не сохранены.';
            }
        }
        ?>
    </fieldset>
</form>


<form action="" method="post">
    <fieldset>
        <legend>Task 2. Спросите у пользователя, какие из языков он знает: <b>html, css, php, javascript</b>.<br>
            Выведите на экран те языки, которые знает пользователь.
        </legend>
        Укажите технологии, которыми вы владеете:<br>
        <input type="checkbox" name="lang[]" value="php" checked>&nbsp;php<br>
        <input type="checkbox" name="lang[]" value="html">&nbsp;html<br>
        <input type="checkbox" name="lang[]" value="css">&nbsp;css<br>
        <input type="checkbox" name="lang[]" value="javascript">&nbsp;javascript<br><br>
        <input type="submit" name="submit"><br><br>
        <?php
        if (!empty($_REQUEST['submit'])) {
            if (isset($_REQUEST['lang'])) {
                echo 'Вы указали - ' . implode(', ', $_REQUEST['lang']) . '!';
            } else {
                echo 'Вы ничего не знаете?';
            }
        }
        ?>
    </fieldset>
</form>

<h4>Работа с radio переключателями:</h4>

<form action="" method="post">
    <fieldset>
        Task 3. Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок. Выведите результат на экран.
        <br>
        Сделайте так, чтобы по умолчанию один из вариантов был уже отмечен.<br><br>

        Вы знаете PHP?<br>
        <input type="radio" name="test" value="1" checked> - Y <br>
        <input type="radio" name="test" value="2"> - N <br>
        <input type="submit" name="submit_2"><br><br>
        <?php
        if (!empty($_REQUEST['submit_2'])) {
            if ($_REQUEST['test'] == 1) echo 'Да';
            if ($_REQUEST['test'] == 2) echo 'Нет';
        }
        ?>
    </fieldset>
</form>


<form action="" method="post">
    <fieldset>
        Task 4. Спросите у пользователя его возраст с помощью нескольких radio-кнопок. Варианты ответа сделайте
        такими: <br> <b>менее 20 лет, 20-25, 26-30, более 30.</b><br><br>

        Укажите возраст:<br>
        <input type="radio" name="test" value="1"> - менее 20 лет <br>
        <input type="radio" name="test" value="2"> - 20-25 <br>
        <input type="radio" name="test" value="3"> - 26-30 <br>
        <input type="radio" name="test" value="4"> - более 30 <br>
        <input type="submit"><br><br>
        <?php
        if (!empty($_REQUEST['test'])) {
            echo 'Вы указали: ';
            if ($_REQUEST['test'] == 1) echo 'менее 20 лет';
            if ($_REQUEST['test'] == 2) echo '20-25';
            if ($_REQUEST['test'] == 3) echo '26-30';
            if ($_REQUEST['test'] == 4) echo 'более 30';
        }
        ?>
    </fieldset>
</form>

<h4>Работа с Select и multi-select:</h4>

<form action="" method="post">
    <fieldset>
        Task 5. Спросите у пользователя его возраст с помощью select. Варианты ответа сделайте такими:
        <br> <b>менее 20 лет, 20-25, 26-30, более 30 лет.</b><br><br>
        Укажите возраст:&nbsp;
        <select>
            <option>менее 20 лет</option>
            <option>20-25</option>
            <option>26-30</option>
            <option>более 30 лет</option>
        </select>&nbsp;
        <input type="submit"><br><br>
    </fieldset>
</form>


<form action="" method="post">
    <fieldset>
        Task 6. Спросите у пользователя с помощью мультиселекта, какие из языков он знает: <b> html, css, php,
            javascript.</b><br> Выведите на экран те языки, которые знает пользователь.

        <p>Какие языки вы знаете? (зажать клавишу Ctrl)</p>
        <select multiple name="lang[]">
            <option value="php">php</option>
            <option value="css">css</option>
            <option value="html">html</option>
            <option value="javascript">javascript</option>
        </select>&nbsp;
        <input type="submit"><br><br>
        <?php
        if (!empty($_REQUEST['lang'])) {
            echo 'Вы указали: ' . implode(', ', $_REQUEST['lang']) . '.';
        }
        ?>
    </fieldset>
</form>

<h4>Задачи:</h4>

<form action="" method="post">
    <fieldset>
        <p>Task 7. Сделайте функцию, которая создает обычный текстовый инпут. Функция должна иметь следующие
            параметры: <br> <b>type, name, value.</b><br>
            Task 8. Модифицируйте функцию из предыдущей задачи так, чтобы она сохраняла значение
            инпута после отправки.</p>
        <?php
        function input($type, $name, $value)
        {
            if (isset($_REQUEST[$name])) {
                $value = $_REQUEST[$name];
            }
            return '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" 
placeholder="Введите сообщение"><input type="submit">';
        }

        echo input('text', 'User', 19);
        ?>
    </fieldset>
</form>


<form action="" method="post">
    <fieldset>
        <p>Task 9. Сделайте функцию, которая создает чекбокс. Если чекбокс не отмечен - функция должна
            отправлять 0, <br>если отмечен - 1.</p>

        <?php
        echo checkbox('check');
        ?>
        <input type="submit">
    </fieldset>
</form>

<?php
function checkbox($name)
{
    return '<input type="hidden" name="' . $name . '" value="0">
            <input type="checkbox" name="' . $name . '" value="1">';
}

?>


<form action="" method="post">
    <fieldset>
        <p>Task 10. Напишите функцию, которая создает чекбокс и сохраняет его значение после отправки.</p>
        <?php
        echo check('check1');
        echo check('check2');
        echo check('check3');
        echo check('check4');
        echo check('check5');
        ?>
        <input type="submit">
    </fieldset>
</form>

<?php
function check($name)
{
    if (!empty($_REQUEST[$name])) $checked = 'checked'; else $checked = '';
    return '<input type="hidden" name="' . $name . '" value="0">
<input type="checkbox" name="' . $name . '" value="1" ' . $checked . '>';
}

?>






























