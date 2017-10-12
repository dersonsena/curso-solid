<?php
namespace app\ocp\right;

use app\ocp\right\department\IDepartment;

class Employee
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $salary;

    /**
     * @var IDepartment
     */
    private $department;

    /**
     * @var float
     */
    private $commission = 0;

    public function __construct(string $name, float $salary, IDepartment $department)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->department = $department;
    }

    public function getSalary(int $salesInMonth): float
    {
        $this->commission = $this->department->calculateCommission($salesInMonth);

        return $this->salary + $this->commission;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Employee
     */
    public function setName($name): Employee
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getCommission(): float
    {
        return $this->commission;
    }
}