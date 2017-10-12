<?php

namespace app\srp\right\parser;

use app\srp\right\Client;
use DateTime;

class ClientXML extends ClientParserAbstract
{
    protected function parse()
    {
        $filePath = $this->dataPath . '/birthday-list.xml';
        $xmlHandler = simplexml_load_file($filePath);

        foreach ($xmlHandler->aniversariante as $row) {
            $client = new Client($row->nome, $row->email, new DateTime($row->data_nascimento));
            $this->clients[] = $client;
        }
    }
}