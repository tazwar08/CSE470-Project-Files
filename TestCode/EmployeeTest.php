<?php

include '.\app\Model\Employee.php';


class EmployeeTest extends \PHPUnit\Framework\TestCase
{
    public $employee;

    public function testGetFullName()
    {
        $this->employee = new Employee('Barack', 'Obama', 19000, 120);
        $this->assertEquals($this->employee->getFullName(), 'Barack Obama');
    }

    public function testSetSalary()
    {
        $this->employee = new Employee('Rick', 'Martin', 11000, 90);
        $this->employee->setSalary(41000);
        $salary = $this->employee->getSalary();
        $this->assertEquals($salary, '41000');
    }

    public function testGetSalary()
    {
        $this->employee = new Employee('Martin', 'Luther', 69000, 200);
        $this->assertEquals($this->employee->getSalary(), '69000');
    }

    public function testSetHours()
    {
        $this->employee = new Employee('Micheal', 'Tanner', 77000, 60);
        $this->employee->setHours(60 + 50);
        $hours = $this->employee->getHours();
        $this->assertEquals($hours, '110');
    }

    public function testGetHours()
    {
        $this->employee = new Employee('Michelle', 'Smith', 64000, 95);
        $this->assertEquals($this->employee->getHours(), '95');
    }

    public function testOvertimeWork()
    {
        $this->employee = new Employee('Tazwar', 'Mohammed', 15000, 170);
        $this->assertEquals($this->employee->overTimeWork(), 20);
    }

    public function testGetBonus()
    {
        $this->employee = new Employee('Donald', 'Trump', 1095000, 170);
        $this->assertEquals($this->employee->getbonus(), 200);
    }
}
