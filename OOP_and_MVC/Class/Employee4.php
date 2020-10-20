<?php
/**
 * Date: 06.12.2019
 * Time: 3:59
 */

class Employee4
{
    public $name;
    public $surname;
    public $patronymic;
    public $salary;

    public function __construct($name, $surname, $patronymic, $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->salary = $salary;
    }
}