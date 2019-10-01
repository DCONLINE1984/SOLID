<?php

/**
 * Calculate the area of shapes
 *
 * @author Dean Clow
 */

namespace S\Bad\Classes;

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

    /**
     * Output message of the sum
     * NOTE: This is wrong!!!! 1) It's doing more than one job   2) What is user wants JSON returned?
     *
     * @return string
     */
    public function output(): string {
        return implode('', array(
            "",
            "Sum of the areas of provided shapes: ",
            $this->sum(),
            ""
        ));
    }
}