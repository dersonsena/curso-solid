<?php

namespace app\lsp\geometry;

class Rectangle
{
    /**
     * @var float
     */
    protected $width;

    /**
     * @var float
     */
    protected $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->width * $this->height;
    }
}