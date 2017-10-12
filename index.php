<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

use app\ocp\right\department\Coordinator;
use app\ocp\right\department\Director;
use app\ocp\right\department\Seller;
use app\ocp\right\department\Supervisor;
use app\ocp\right\Employee;

$maria = new Employee("Maria", 1000, new Seller);
$joao = new Employee("João", 1200, new Coordinator);
$gisele = new Employee("Gisele", 1600, new Supervisor);
$alexandre = new Employee("Alexandre", 2000, new Director);

echo '<h2>' . $maria->getName() . ': R$ ' . $maria->getSalary(10) . " (R$ {$maria->getCommission()})</h2>";
echo '<h2>' . $joao->getName() . ': R$ ' . $joao->getSalary(6) . " (R$ {$joao->getCommission()})</h2>";
echo '<h2>' . $gisele->getName() . ': R$ ' . $gisele->getSalary(8) . " (R$ {$gisele->getCommission()})</h2>";
echo '<h2>' . $alexandre->getName() . ': R$ ' . $alexandre->getSalary(13) . " (R$ {$alexandre->getCommission()})</h2>";