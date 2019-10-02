<?php

/**
 * Run the example of good
 *
 * @author Dean Clow
 */

include_once('../../bootstrap.php');

$areas = new O\Good\Classes\AreaCalculator([
    new O\Good\Classes\Circle(2),
    new O\Good\Classes\Square(5),
    new O\Good\Classes\Square(6)
]);
print $areas->sum();