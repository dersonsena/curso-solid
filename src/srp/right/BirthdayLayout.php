<?php
namespace app\srp\right;

class BirthdayLayout
{
    public function getContent(Client $client): string
    {
        return "
            <h1>{$client->getName()}</h1>
            <h3>Hoje é {$client->getBirthDate()->format('d/m/Y')}! É o seu dia, que dia mais Feliz! =D</h3>
        ";
    }
}