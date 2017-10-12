<?php

namespace app\isp\wrong;

class Pinguim implements IBird
{
    public function fly()
    {
        echo 'SACANAGEM! Não sei voar =(';
    }

    public function eat()
    {
        echo 'Vou comer de tudo.';
    }

    public function walk()
    {
        echo 'Caminhando, cantando e sorrindo =D';
    }
}