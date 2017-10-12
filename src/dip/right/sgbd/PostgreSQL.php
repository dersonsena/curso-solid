<?php

namespace app\dip\right\sgbd;

class PostgreSQL implements ISgbd
{
    public function connect()
    {
        echo 'Conectando no PostgreSQL';
    }

    public function insert()
    {
        echo 'INSERT no PostgreSQL';
    }

    public function update()
    {
        echo 'UPDATE no PostgreSQL';
    }

    public function delete()
    {
        echo 'DELETE no PostgreSQL';
    }

    public function queryAll()
    {
        echo 'Query no PostgreSQL';
    }

    public function getName()
    {
        return 'POSTGRESQL';
    }
}