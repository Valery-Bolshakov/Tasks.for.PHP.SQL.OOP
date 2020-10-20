<?php
/**
 * Time: 23:45
 */
?>

<h3>Занятие №3. Работа с методами объектов:</h3>

<?php
echo 'Task 1. Реализуйте класс User с методом show.', '<br>';

class User
{
    public $name;

    public function show()
    {
        return 'qweq';
    }
}

$user = new User;
$user->$name = 'G';
echo $user->show();
echo '<hr><br>';


echo 'Task 2. Реализуйте класс User с методом show учитывая Параметры метода.', '<br>';

class User_1
{
    public $name;

    public function show($str)
    {
        return $str . '!';
    }
}

$user = new User_1;
$user->$name = 'Yui';
echo $user->$name . ', ' . $user->show('hello + ');
echo '<hr><br>';

?>

