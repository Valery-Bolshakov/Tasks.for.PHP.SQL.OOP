<?php
/**
 * Time: 0:00
 */
?>

<h3>Занятие №6. Модификаторы доступа public и private:</h3>

<?php
echo 'Task 1. Не подсматривая в мой код внесите такие же правки в класс User.', '<br>';

echo 'Task 2. Попробуйте вызвать метод isAgeCorrect снаружи класса. Убедитесь, что это будет вызывать ошибку.', '<br>';


class User1
{
    public $age;

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

    private function age_correct($age)
    {
        return $age >= 18 and $age <= 60;
    }
}

$user = new User1();
//var_dump($user->age_correct(21));
echo '<hr><br>';


echo 'Task 3. Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).', '<br>';

echo 'Task 4. В классе Student сделайте public метод transferToNextCourse, который будет переводить 
студента на следующий курс.', '<br>';

echo 'Task 5. Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.', '<br>';

echo 'Task 6. Вынесите проверку курса в отдельный private метод isCourseCorrect.', '<br><br>';

class Student
{
    public $name;
    public $course;

    public function transferToNextCourse()
    {
        if ($this->isCourseCorrect()) {
            $this->course += 1;
        }
        return $this->course;
    }

    private function isCourseCorrect()
    {
        return $this->course < 5;
    }
}

$student = new Student();
$student->course = 1;
echo 'зададим курс студента: ' . $student->course, '<br>';
echo 'переведем на след курс: ' . $student->transferToNextCourse(), '<br>';
echo 'переведем на след курс: ' . $student->transferToNextCourse(), '<br>';
echo 'переведем на след курс: ' . $student->transferToNextCourse(), '<br>';
echo 'переведем на след курс: ' . $student->transferToNextCourse(), '<br>';
echo 'переведем на след курс: ' . $student->transferToNextCourse(), '<br>';
echo 'переведем на след курс: ' . $student->transferToNextCourse(), '<br>';


?>

