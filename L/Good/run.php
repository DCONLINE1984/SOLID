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

$areas = new L\Good\Classes\AreaCalculator([
    new L\Good\Classes\Circle(2),
    new L\Good\Classes\Square(5),
    new L\Good\Classes\Square(6)
]);

print L\Good\Classes\AreaOutputter()->outputHTML($areas->sum());
print L\Good\Classes\AreaOutputter()->outputJSON($areas->sum());