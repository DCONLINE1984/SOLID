<?php

/**
 * Run the example of good
 *
 * @author Dean Clow
 */

use O\Good\Classes\AreaCalculator;
use O\Good\Classes\Circle;
use O\Good\Classes\Square;

$areas = new S\Bad\Classes\AreaCalculator([
    new S\Bad\Classes\Circle(2),
    new S\Bad\Classes\Square(5),
    new S\Bad\Classes\Square(6)
]);
print $areas->sum();