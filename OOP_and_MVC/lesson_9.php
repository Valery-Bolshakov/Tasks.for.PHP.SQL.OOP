<?php
/**
 * Time: 2:48
 */
?>

<h3>Занятие №9. Свойства только для чтения:</h3>

<?php
echo '<hr><br>';
echo 'Task 1. Сделайте класс Employee, в котором будут следующие свойства: name, surname  и salary.', '<br>';

echo 'Task 2. Сделайте так, чтобы свойства name и surname были доступны только для чтения,
а свойство salary - и для чтения, и для записи.', '<br><br>';

class Employee3
{
    private $name;
    private $surname;
    private $salary;

    public function __construct($name, $surname, $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_surname()
    {
        return $this->surname;
    }

    public function get_salary()
    {
        return $this->salary;
    }

    public function set_salary($salary)
    {
        $this->salary = $salary;
    }
}

$user = new Employee3('Sti', 'Ruy', 2345);

echo $user->get_name() . ' ' . $user->get_surname() . ', old salary = ' . $user->get_salary(), '<br>';
$user->set_salary(3567);
echo $user->get_name() . ' ' . $user->get_surname() . ', new salary = ' . $user->get_salary(), '<br>';


echo '<hr><br>';


?>

