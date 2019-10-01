<?php

namespace O\Good\Classes;

use O\Good\Interfaces\ShapeInterface;

class Circle implements ShapeInterface
{
    protected $radius;

    /**
     * Circle constructor. Requires radius on create.
     *
     * @param float $radius
     * @return void
     */
    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    /**
     * Calculate the area of the circle
     *
     * @return float
     */
    public function area(): float {
        return pi() * pow($this->radius, 2);
    }
}