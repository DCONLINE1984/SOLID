<?php

/**
 * Calculate the area of shapes
 *
 * @author Dean Clow
 */

namespace I\Bad\Classes;

class AreaCalculator
{
    protected $shapes;

    /**
     * AreaCalculator constructor. Requires shapes on create.
     *
     * @param array $shapes
     * @return void
     */
    public function __construct(array $shapes=[]) {
        $this->shapes = $shapes;
    }

    /**
     * Sum the area of the shapes
     *
     * @return float
     */
    public function sum(): float {
        //logic to sum the areas
        return 0.0;
    }
}