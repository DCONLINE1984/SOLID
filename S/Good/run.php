<?php

/**
 * Run the example of good practice
 *
 * @author Dean Clow
 */

include_once('../../bootstrap.php');

$areas = new S\Good\Classes\AreaCalculator([
    new S\Good\Classes\Circle(2),
    new S\Good\Classes\Square(5),
    new S\Good\Classes\Square(6)
]);

print "\n";
print S\Good\Classes\AreaOutputter::outputHTML($areas->sum());
print "\n";
print S\Good\Classes\AreaOutputter::outputJSON($areas->sum());