<?php

namespace S\Bad\Classes;

class Circle
{
    protected $radius;

    /**
     * Circle constructor. Requires radius on create.
     *
     * @param float $radius
     * @return void
     */
    public function __construct(float $radius) {
        $this->radius = $radius;
    }
}