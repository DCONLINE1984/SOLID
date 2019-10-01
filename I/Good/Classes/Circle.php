<?php

namespace I\Good\Classes;

use I\Good\Interfaces\ShapeInterface;
use I\Good\Interfaces\SolidShapeInterface;

class Circle implements ShapeInterface, SolidShapeInterface //here we need 2 interfaces because of the volume and area
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

    /**
     * Calculate the volume
     *
     * @return float
     */
    public function volume(): float {
        return 0.0;
    }
}