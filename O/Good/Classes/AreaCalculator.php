<?php

/**
 * Calculate the area of shapes
 *
 * @author Dean Clow
 */

namespace O\Good\Classes;

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
        $area = [];
        foreach($this->shapes as $shape) {
            $area[] = $shape->area(); //puts the control in the hands of the models

            //we need to make sure all the shapes passed in have an area method so we use the interface to enforce
        }
        return array_sum($area);
    }
}