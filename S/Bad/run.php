<?php

/**
 * Run the example of bad
 *
 * @author Dean Clow
 */

use S\Bad\Classes\AreaCalculator;
use S\Bad\Classes\Circle;
use S\Bad\Classes\Square;

$areas = new S\Bad\Classes\AreaCalculator([
    new S\Bad\Classes\Circle(2),
    new S\Bad\Classes\Square(5),
    new S\Bad\Classes\Square(6)
]);
echo $areas->output();