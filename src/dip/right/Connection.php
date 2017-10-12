<?php

namespace app\dip\right;

use app\dip\right\sgbd\ISgbd;

class Connection
{
    public function __construct(ISgbd $sgbd)
    {
        echo "<h1>{$sgbd->getName()}</h1>";

        $sgbd->connect();
        echo  '<br />';
        $sgbd->insert();
        echo  '<br />';
        $sgbd->update();
    }
}