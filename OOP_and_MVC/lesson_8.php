<?php
/**
 * Time: 0:23
 */
?>

<h3>Занятие №8. Работа с геттерами и сеттерами:</h3>

<?php

echo 'Task 1. Сделайте класс Employee, в котором будут следующие private свойства: name, age и salary.', '<br>';

echo 'Task 2. Сделайте геттеры и сеттеры для всех свойств класса Employee.', '<br>';

echo 'Task 3. Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на
корректность (от 1 до 100 лет). Этот метод должен использоваться в сеттере setAge перед установкой нового
возраста (если возраст не корректный - он не должен меняться).', '<br>';

echo 'Task 4. Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял
в конец числа с зарплатой значок доллара. Говоря другими словами в свойстве salary зарплата будет хранится
просто числом, но геттер будет возвращать ее с долларом на конце.', '<br><br>';

class Employee2
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_age()
    {
        return $this->age;
    }

    public function get_salary()
    {
        return $this->salary . '$';
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function set_age($age)
    {
        if ($this->age_correct($age)) {
            $this->age = $age;
        }
    }

    public function set_salary($salary)
    {
        $this->salary = $salary;
    }

    private function age_correct($age)
    {
        return $age > 1 and $age < 100;
    }
}

$user = new Employee2('Rich', 22, 657);
echo $user->get_name(), '<br>';
echo $user->get_age(), '<br>';
echo $user->get_salary(), '<br>';
$user->set_name('Dich');
$user->set_age(33);
$user->set_salary(3455);
echo 'new: ' . $user->get_name(), '<br>';
echo 'new: ' . $user->get_age(), '<br>';
echo 'new: ' . $user->get_salary(), '<br>';

echo '<hr><br>';


?>
