<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Занятие №35</title>
</head>
<body>

<p><b class="T1">Занятие №35. </b><b class="D1">Команды SELECT, INSERT, DELETE, UPDATE</b></p>

<p><b class="T1">Задачи для решения:</b></p>
<p><b class="D1"> - На SELECT</b></p>

<?php
error_reporting(E_ALL); // Вывод php ошибок в винде

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'test';

$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link)); //устанавливаем соединение и
// 'or die' - это вывод ошибок sql
mysqli_query($link, "SET NAMES 'utf8'"); // задаем кодировку(без этой строчки кирилица плохо отображается)

//mysqli_close($link); // закрытие соединения

?>

<fieldset>
    <p><b class="T">Task 1. </b><b class="D">Выбрать работника с id = 3.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE id=3";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $user = mysqli_fetch_assoc($result);

    echo '<pre>';
    print_r($user);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 2. </b><b class="D">Выбрать работников с зарплатой 1000$.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE salary=1000";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

    echo '<pre>';
    print_r($data);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 3. </b><b class="D">Выбрать работников в возрасте 23 года.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE age=23";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

    echo '<pre>';
    print_r($data);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 4. </b><b class="D">Выбрать работников с зарплатой более 400$.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE salary=400";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

    echo '<pre>';
    print_r($data);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 5. </b><b class="D">Выбрать работников с зарплатой равной или большей 500$.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE salary>=500";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

    echo '<pre>';
    print_r($data);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 6. </b><b class="D">Выбрать работников с зарплатой НЕ равной 500$.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE salary!=500";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

    echo '<pre>';
    print_r($data);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 7. </b><b class="D">Выбрать работников с зарплатой равной или меньшей 900$.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE salary<=900";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

    echo '<pre>';
    print_r($data);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 8. </b><b class="D">Узнайте зарплату и возраст Васи.</b></p>
    <?php
    $query = "SELECT salary, age FROM workers WHERE name='Вася'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    $user = mysqli_fetch_assoc($result);

    echo '<pre>';
    print_r($user);
    echo '</pre>';
    ?>
</fieldset>
<br>


<p><b class="D1"> - На OR и AND</b></p>

<fieldset>
    <p><b class="T">Task 9. </b><b class="D">Выбрать работников в возрасте от 25 (не включительно)
            до 28 лет (включительно).</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE age>25 AND age<=28";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user) ;

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 10. </b><b class="D">Выбрать работника Петю.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE name='Петя'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    $user = mysqli_fetch_assoc($result);

    echo '<pre>';
    print_r($user);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 11. </b><b class="D"> Выбрать работников Петю и Васю.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE name='Петя' OR name='Вася'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user) ;

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 12. </b><b class="D">Выбрать всех, кроме работника Петя.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE name!='Петя'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user) ;

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 13. </b><b class="D">Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE age=27 OR salary=1000";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user) ;

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 14. </b><b class="D">Выбрать всех работников в возрасте от 23 лет (включительно)
            до 27 лет (не включительно) или с зарплатой 1000$.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE (age>=23 AND age<27) OR (salary=1000)";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user) ;

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 15. </b><b class="D">Выбрать всех работников в возрасте от 23 лет до 27 лет
            или с зарплатой от 400$ до 1000$.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE (age>=23 AND age<=27) OR (salary>=400 AND salary<=1000)";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user) ;

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 16. </b><b class="D">Выбрать всех работников в возрасте 27 лет или
            с зарплатой не равной 400$.</b></p>
    <?php
    $query = "SELECT * FROM workers WHERE age=27 AND salary!=400";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($users = []; $user = mysqli_fetch_assoc($result); $users[] = $user) ;

    echo '<pre>';
    print_r($users);
    echo '</pre>';
    ?>
</fieldset>
<br>


<p><b class="D1"> - На INSERT</b></p>

<fieldset>
    <p><b class="T">Task 17. </b><b class="D">Добавьте нового работника Никиту, 26 лет, зарплата 300$.
            Воспользуйтесь первым синтаксисом.</b></p>
    <?php
    /*$query = "INSERT INTO workers SET name='Никита', age=26, salary=300";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));*/
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 18. </b><b class="D">Добавьте нового работника Светлану с зарплатой 1200$.
            Воспользуйтесь вторым синтаксисом.</b></p>
    <?php
    /*$query = "INSERT INTO workers (name, age, salary) VALUES ('Светлана', 26, 1200)";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));*/
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 19. </b><b class="D">Добавьте двух новых работников одним запросом:
            Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31.</b></p>
    <?php
    /*$query = "INSERT INTO workers (name, age, salary) VALUES ('Ярослав', 30, 1200), ('Петр', 31, 1000)";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));*/
    ?>
</fieldset>
<br>


<p><b class="D1"> - На DELETE</b></p>

<fieldset>
    <p><b class="T">Task 20. </b><b class="D">Удалите работника с id=7.</b></p>
    <?php
    /*$query = "DELETE FROM workers WHERE id=7";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));*/
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 21. </b><b class="D">Удалите Колю.</b></p>
    <?php
    /*$query = "DELETE FROM workers WHERE name='Коля'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));*/
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 22. </b><b class="D">Удалите всех работников, у которых возраст 23 года.</b></p>
    <?php
    /*$query = "DELETE FROM workers WHERE age=23";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));*/
    ?>
</fieldset>
<br>


<p><b class="D1"> - На UPDATE</b></p>

<fieldset>
    <p><b class="T">Task 23. </b><b class="D">Поставьте Васе зарплату в 200$.</b></p>
    <?php
    $query = "UPDATE workers SET salary=200 WHERE name='Вася'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 24. </b><b class="D">Работнику с id=4 поставьте возраст 35 лет.</b></p>
    <?php
    $query = "UPDATE workers SET age=35 WHERE id=4";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 25. </b><b class="D">Всем, у кого зарплата 500$ сделайте ее 700$.</b></p>
    <?php
    $query = "UPDATE workers SET salary=700 WHERE salary=500";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 26. </b><b class="D">Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.</b></p>
    <?php
    $query = "UPDATE workers SET age=23 WHERE id>=2 AND id<=5";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    ?>
</fieldset>
<br>

<fieldset>
    <p><b class="T">Task 27. </b><b class="D">Поменяйте Васю на Женю и прибавьте ему зарплату до 900$.</b></p>
    <?php
    $query = "UPDATE workers SET name='Женя', salary=900 WHERE name='Вася'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    ?>
</fieldset>
<br>


</body>
</html>

