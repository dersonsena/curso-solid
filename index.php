<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

use app\dip\right\Connection;
use app\dip\right\sgbd\MySQL;

$mysqlConnection = new Connection(new MySQL);