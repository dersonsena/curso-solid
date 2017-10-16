<?php

namespace app\isp\wrong;

class BirdArea
{
    public function __construct(IBird $bird)
    {
        $bird->eat();
    }
}