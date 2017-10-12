<?php

namespace app\dip\right\sgbd;

interface ISgbd
{
    public function getName();
    public function connect();
    public function insert();
    public function update();
    public function delete();
    public function queryAll();
}