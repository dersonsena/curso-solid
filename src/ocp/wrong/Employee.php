<?php
namespace app\ocp\wrong;

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
     * @var string
     */
    private $department;

    /**
     * @var float
     */
    private $commission = 0;

    public function __construct(string $name, float $salary, string $department)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->department = $department;
    }

    public function getSalary(int $salesInMonth): float
    {
        if ($this->department === 'coordenador') {
            $this->commission = ($salesInMonth * 0.2);
        } else if ($this->department === 'supervisor') {
            $this->commission = ($salesInMonth * 0.3);
        } else if ($this->department === 'diretor') {
            $this->commission = ($salesInMonth * 0.4);
        }

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