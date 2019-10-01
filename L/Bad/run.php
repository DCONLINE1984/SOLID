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


//output the area
$areas = new L\Bad\Classes\AreaCalculator([
    new L\Bad\Classes\Circle(2),
    new L\Bad\Classes\Square(5),
    new L\Bad\Classes\Square(6)
]);
print L\Bad\Classes\AreaOutputter()->outputHTML($areas->sum());


//output the volume
$areas = new L\Bad\Classes\VolumeCalculator([
    new L\Bad\Classes\Circle(2),
    new L\Bad\Classes\Square(5),
    new L\Bad\Classes\Square(6)
]);

print L\Bad\Classes\AreaOutputter()->outputHTML($areas->sum());