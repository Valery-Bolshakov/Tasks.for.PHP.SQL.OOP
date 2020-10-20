<?php
/**
 * Time: 19:22
 */
?>

    <h3>Занятие №5. Обращение к методам через $this:</h3>


<?php
echo 'Task 1. Не подсматривая в мой код создайте такой же класс User с такими же методами.', '<br>';

echo 'Task 2. Создайте объект этого класса User, проверьте работу методов setAge и addAge.', '<br>';

echo 'Task 3. Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста
на переданное количество лет.', '<br><br>';


//age_carrect

class Userr
{
    public $age;

    public function age_correct($age)
    {
        return $age >= 18 and $age <= 60;
    }

    public function set_age($age) // замена значения свойства
    {
        if ($this->age_correct($age)) {
            $this->age = $age;
        }
    }

    public function add_age($year) // увеличивание значения свойства на $year
    {
        $new_age = $this->age + $year;
        if ($this->age_correct($new_age)) {
            $this->age = $new_age;
        }
    }

    public function sub_age($year) // уменьшаем значение свойства на $year
    {
        $new_age = $this->age - $year;
        if ($this->age_correct($new_age)) {
            $this->age = $new_age;
        }
    }
}


$user = new Userr();
$user->age = 22;
echo 'зададим значение возраста: ' . $user->age . '<br>';
$user->set_age(26);
echo 'заменили значение на: ' . $user->age . '<br>';
$user->add_age(7);
echo 'увеличили значение: ' . $user->age . '<br>';
$user->sub_age(5);
echo 'уменьшили значение: ' . $user->age . '<br>';
echo '<hr><br>';




