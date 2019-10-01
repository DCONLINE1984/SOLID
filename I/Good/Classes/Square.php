<?php

namespace I\Good\Classes;

use I\Good\Interfaces\ShapeInterface;

class Square implements ShapeInterface
{
    protected $length;

    /**
     * Square constructor. Requires length on create.
     *
     * @param float $length
     * @return void
     */
    public function __construct(float $length) {
        $this->length = $length;
    }

    /**
     * Calculate the area of the square
     *
     * @return float
     */
    public function area(): float {
        return pow($this->length, 2);
    }
}