<?php

namespace app\isp\right;

class BeijaFlor implements IFlyingBird
{
    public function fly()
    {
        echo 'Voando com alegria.';
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