<?php

namespace L\Bad\Classes;

class Square
{
    protected $length;

    /**
     * Square constructor. Requires length on create.
     *
     * @param float $length
     * @return void
     */
    public function __construct(float $length) {
        $this->length = $length;
    }
}