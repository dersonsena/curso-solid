<?php
namespace app\dip\wrong\sgbd;

class MySQL
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
}