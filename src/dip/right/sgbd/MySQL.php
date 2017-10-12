<?php
namespace app\dip\right\sgbd;

class MySQL implements ISgbd
{
    public function connect()
    {
        echo 'Conectando no MySQL';
    }

    public function insert()
    {
        echo 'INSERT no MySQL';
    }

    public function update()
    {
        echo 'UPDATE no MySQL';
    }

    public function delete()
    {
        echo 'DELETE no MySQL';
    }

    public function queryAll()
    {
        echo 'Query no MySQL';
    }

    public function getName()
    {
        return 'MYSQL';
    }
}