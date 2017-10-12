<?php

namespace app\ocp\right\department;

class Director implements IDepartment
{
    public function calculateCommission(int $salesInMonth): float
    {
        return $salesInMonth * 0.4;
    }
}