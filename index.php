<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

use app\lsp\geometry\Rectangle;
use app\lsp\geometry\Square;

//$rectangle = new Rectangle(5, 4);
$rectangle = new Square(5, 4);

echo '<h1>ÁREA: ' . $rectangle->getArea() . '</h1>';