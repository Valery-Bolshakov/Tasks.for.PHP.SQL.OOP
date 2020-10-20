<?php
/**
 * Time: 3:21
 */
?>

    <h3>Занятие №7. Конструктор объекта:</h3>

<?php

echo 'Task 1. Сделайте класс Employee, в котором будут следующие публичные свойства - name (имя), age (возраст),
salary (зарплата). Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта.', '<br>';

echo 'Task 2. Создайте объект класса Employee с именем \'Вася\', возрастом 25, зарплатой 1000.', '<br>';

echo 'Task 3. Создайте объект класса Employee с именем \'Петя\', возрастом 30, зарплатой 2000.', '<br>';

echo 'Task 4. Выведите на экран сумму зарплат Васи и Пети.', '<br><br>';


class Employee1
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$user = new Employee1('Fii', 25, 1000);
echo $user->name, '<br>';
echo $user->age, '<br>';
echo $user->salary, '<br>';

$user_1 = new Employee1('Jii', 30, 2000);
echo 'сумму зарплат: ' . ($user->salary + $user_1->salary);
echo '<hr><br>';


?>