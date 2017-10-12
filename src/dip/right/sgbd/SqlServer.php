<?php

namespace app\dip\right\sgbd;

class SqlServer implements ISgbd
{
    public function connect()
    {
        echo 'Conectando no Sql Server';
    }

    public function insert()
    {
        echo 'INSERT no Sql Server';
    }

    public function update()
    {
        echo 'UPDATE no Sql Server';
    }

    public function delete()
    {
        echo 'DELETE no Sql Server';
    }

    public function queryAll()
    {
        echo 'Query no Sql Server';
    }

    public function getName()
    {
        return 'SQL SERVER';
    }
}