<?php

namespace app\srp\right\parser;

use app\srp\right\Client;

abstract class ClientParserAbstract
{
    /**
     * @var Client[]
     */
    protected $clients = [];

    /**
     * @var string
     */
    protected $dataPath;

    abstract protected function parse();

    public function __construct()
    {
        $this->dataPath = realpath(__DIR__) . '/../../../../data';
        $this->parse();
    }

    public function getClients(): array
    {
        return $this->clients;
    }
}