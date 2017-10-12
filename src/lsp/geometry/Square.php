<?php

namespace app\lsp\geometry;

class Square extends Rectangle
{
    public function __construct(float $width, float $height)
    {
        $this->width = $this->height = $width;
    }
}