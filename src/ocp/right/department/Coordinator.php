<?php

namespace app\ocp\right\department;

class Coordinator implements IDepartment
{
    public function calculateCommission(int $salesInMonth): float
    {
        return $salesInMonth * 0.2;
    }
}