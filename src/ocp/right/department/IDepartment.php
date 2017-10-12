<?php
namespace app\ocp\right\department;

interface IDepartment
{
    public function calculateCommission(int $salesInMonth): float;
}