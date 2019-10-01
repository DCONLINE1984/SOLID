<?php

/**
 * Calculate the area of shapes
 *
 * @author Dean Clow
 */

namespace O\Bad\Classes;

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
     * NOTE: This is bad!! To add more types we need to keep modifying this method over and over. The sum should be
     * moved to the models so only they have to be adjusted
     *
     * @return float
     */
    public function sum(): float {
        $area = [];
        foreach($this->shapes as $shape) {
            if(is_a($shape, 'Square')) {
                $area[] = pow($shape->length, 2);
            }else if(is_a($shape, 'Circle')) {
                $area[] = pi() * pow($shape->radius, 2);
            }
        }
        return array_sum($area);
    }
}