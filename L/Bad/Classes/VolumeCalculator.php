<?php

/**
 * Calculate the total volume of shapes
 *
 * @author Dean Clow
 */

namespace L\Bad\Classes;

use L\Bad\Classes\AreaCalculator;

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
     * NOTE: AreaCalculator returns a float here, not an array, so this is BAD! Since we are extending AreaCalculator,
     * we need to match the input/return types
     *
     * @return array
     */
    public function sum(): array {
        // logic to calculate the volumes and then return and array of output
        return array(0.0, 0.0, 0.0);
    }
}