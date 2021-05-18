<?php

class Employee
{
    public $first_name;
    public $last_name;
    private $salary;
    private $hours_worked;
    private $bonus;

    public function __construct($first_name, $last_name, $salary, $hours_worked)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->salary = $salary;
        $this->hours_worked = $hours_worked;
    }

    public function getFullName(): string
    {
        $first = $this->first_name;
        $last = $this->last_name;
        return ($first . " " . $last);
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setHours($hours): void
    {
        $this->hours_worked = $hours;
    }

    public function getHours(): int
    {
        return $this->hours_worked;
    }

    public function overtimeWork(): int
    {
        return $this->hours_worked - 150;
    }

    public function getBonus(): int
    {
        if ($this->hours_worked > 150) {
            return $this->overTimeWork() * 10;
        } else {
            return 0;
        }
    }
}
