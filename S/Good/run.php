<?php

/**
 * Run the example of good practice
 *
 * @author Dean Clow
 */

use S\Good\Classes\AreaCalculator;
use S\Good\Classes\Circle;
use S\Good\Classes\Square;
use S\Good\Classes\AreaOutputter;

$areas = new S\Bad\Classes\AreaCalculator([
    new S\Bad\Classes\Circle(2),
    new S\Bad\Classes\Square(5),
    new S\Bad\Classes\Square(6)
]);

print S\Good\Classes\AreaOutputter()->outputHTML($areas->sum());
print S\Good\Classes\AreaOutputter()->outputJSON($areas->sum());