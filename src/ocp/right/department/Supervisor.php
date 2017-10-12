<?php

namespace app\ocp\right\department;

class Supervisor implements IDepartment
{
    public function calculateCommission(int $salesInMonth): float
    {
        return $salesInMonth * 0.3;
    }
}