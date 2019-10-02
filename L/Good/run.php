<?php

/**
 * Run the example of good practice
 *
 * @author Dean Clow
 */

include_once('../../bootstrap.php');

$areas = new L\Good\Classes\AreaCalculator([
    new L\Good\Classes\Circle(2),
    new L\Good\Classes\Square(5),
    new L\Good\Classes\Square(6)
]);

print "\n";
print L\Good\Classes\AreaOutputter::outputHTML($areas->sum());
print "\n";
print L\Good\Classes\AreaOutputter::outputJSON($areas->sum());