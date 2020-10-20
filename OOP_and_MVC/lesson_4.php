<?php
/**
 * Time: 0:24
 */
?>

    <h3>Занятие №4. Обращение к свойствам класса через $this:</h3>

<?php
echo 'Task 1. Сделайте класс Employee (работник), в котором будут следующие свойства - name, age, salary', '<br>';

echo 'Task 2. Сделайте в классе Employee метод getName, который будет возвращать имя работника', '<br>';

echo 'Task 3. ...метод getAge, который будет возвращать возраст работника.', '<br>';

echo 'Task 4. ...метод getSalary, который будет возвращать зарплату работника.', '<br>';

echo 'Task 5. ...метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, 
если это так, и false, если это не так.', '<br>';

echo 'Task 6. Создайте второй объект и найдите сумму их зарплат.', '<br><br>';


class Employ
{
    public $name;
    public $age;
    public $salary;

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
        return $this->salary;
    }

    public function check_age()
    {
        if ($this->age > 18) {
            return true;
        } else {
            return false;
        }
    }
}

$user_1 = new Employ;
$user_1->name = 'Key';
$user_1->age = 22;
$user_1->salary = 536;

echo 'name: ' . $user_1->get_name(), '<br>';
echo 'age: ' . $user_1->get_age(), '<br>';
echo 'salary: ' . $user_1->get_salary(), '<br>';
echo 'больше ли 18ти: ';
var_dump($user_1->check_age());

$user_2 = new Employ;
$user_2->name = 'Jey';
$user_2->age = 17;
$user_2->salary = 456;
echo '<br>' . 'сумму зарплат обоих объектов: ';
echo $user_1->get_salary() + $user_2->get_salary();
echo '<hr><br>';


echo 'Task 7. Сделайте класс User, в котором будут следующие свойства - name (имя), age (возраст).', '<br>';

echo 'Task 8. Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.', '<br>';

echo 'Task 9. ССоздайте объект класса User с именем \'Коля\' и возрастом 25. С помощью метода setAge поменяйте
возраст на 30. Выведите новое значение возраста на экран.', '<br>';

echo 'Task 10. Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или
равен 18. Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.', '<br><br>';

class User_2
{
    public $name;
    public $age;

    public function set_age($age)
    {
        if ($age >= 18) {
            $this->age = $age;
        }
    }
}

$user_1 = new User_2;
$user_1->name = 'Io';
$user_1->age = 23;
echo 'Задали возраст: ' . $user_1->age, '<br>';
$user_1->set_age(26);
echo 'Новое значение возраста: ' . $user_1->age, '<br>';
echo '<hr><br>';


echo 'Task 11. Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя),
salary (зарплата). Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.', '<br><br>';

class Employee_1
{
    public $name;
    public $salary;

    public function double_salary()
    {
        return $this->salary * 2;
    }
}

$user_1 = new Employee_1();
$user_1->name = 'Gi';
$user_1->salary = 2123;
echo 'name: ' . $user_1->name . ', salary: ' . $user_1->salary, '<br>';
echo '...увеличивать в 2 раза: ' . $user_1->double_salary();
echo '<hr><br>';


echo 'Task 12. Сделайте класс Rectangle (прямоугольник) в котором в свойствах будут записаны 
ширина и высота', '<br>';

echo 'Task 13. В классе Rectangle сделайте метод getSquare, который будет возвращать 
площадь этого прямоугольника.', '<br>';

echo 'Task 14. В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр 
этого прямоугольника.', '<br><br>';

class Rectangle
{
    public $width; //ширина
    public $height; //высота

    public function get_square()
    {
        return $this->width * $this->height;
    }

    public function get_perimeter()
    {
        return ($this->width + $this->height) * 2;
    }
}

$rect_1 = new Rectangle();
$rect_1->width = 5;
$rect_1->height = 2;

echo 'площадь этого прямоугольника: ' . $rect_1->get_square(), '<br>';
echo 'периметр этого прямоугольника: ' . $rect_1->get_perimeter();
echo '<hr><br>';



