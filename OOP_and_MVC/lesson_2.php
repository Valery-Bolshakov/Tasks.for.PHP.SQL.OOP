<?php
/**
 * Time: 3:14
 */
// Имена функций используют подчеркивания между словами, а имена классов используют как camelCase, так и PascalCase.
?>

<h3>Занятие №2. Работа со свойствами объектов:</h3>

<?php
echo 'Task 1. Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), 
age (возраст), salary (зарплата).', "<br>";

echo 'Task 2. ...затем установите его свойства.', "<br>";

echo 'Task 3. ...Создайте второй объект и установите его свойства.', "<br>";

echo 'Task 4. ...Выведите на экран сумму зарплат обоих объектов.', "<br>";

echo 'Task 5. ...Выведите на экран сумму возрастов обоих объектов.', "<br><br>";

class Employee
{
    public $name;
    public $age;
    public $salary;

}

$user_1 = new Employee;
$user_1->name = 'Jo';
$user_1->age = 25;
$user_1->salary = 1000;

$user_2 = new Employee;
$user_2->name = 'Jey';
$user_2->age = 23;
$user_2->salary = 1500;

echo 'суммуа зарплат обоих объектов: ' . ($user_1->salary + $user_2->salary), '<br>';
echo 'суммуа возрастов обоих объектов: ' . ($user_1->age + $user_2->age), '<br>';
echo '<hr><br>';

?>



