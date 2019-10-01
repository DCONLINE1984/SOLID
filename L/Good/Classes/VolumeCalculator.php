<?php

/**
 * Calculate the total volume of shapes
 *
 * @author Dean Clow
 */

namespace L\Good\Classes;

use L\Good\Classes\AreaCalculator;

class VolumeCalculator extends AreaCalculator
{
    /**
     * Constructor
     *
     * @param array $shapes
     * @return void
     */
    public function __construct(array $shapes=[]) {
        parent::__construct($shapes);
    }

    /**
     * Sum the areas
     *
     * @return float
     */
    public function sum(): float {
        return 0.0; //we match the return type of AreaCalculator
    }
}