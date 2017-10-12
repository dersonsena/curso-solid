<?php

namespace app\dip\wrong;

use app\dip\wrong\sgbd\MySQL;

class Connection
{
    public function __construct(MySQL $mySQL)
    {
        $mySQL->connect();
        echo  '<br />';
        $mySQL->insert();
        echo  '<br />';
        $mySQL->update();
    }
}