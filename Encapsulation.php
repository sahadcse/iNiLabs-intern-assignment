<?php

class Employee {
    private $name, $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary < 0) {
            throw new Exception("Salary not be negative.");
        }
        $this->salary = $salary;
    }
}

try {
    $employee = new Employee("SAHADUZZAMAN SOLYMAN", 25000);
    echo "Employee Name: " . $employee->getName() . "\n";
    echo "Employee Salary: " . $employee->getSalary() . "\n";

    // Update
    $employee->setSalary(30000);
    echo "Updated Salary: " . $employee->getSalary() . "\n";
} catch (Exception $eror) {
    // problems
    echo "Error: " . $eror->getMsg();
}

?>