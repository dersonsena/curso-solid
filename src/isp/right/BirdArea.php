<?php

namespace app\isp\right;

class BirdArea
{
    public function __construct(IBird $bird)
    {
        $bird->eat();
    }
}