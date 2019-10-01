<?php

/**
 * We implement this to ensure each shape has an area class
 *
 * @author Dean Clow
 */

namespace I\Bad\Interfaces;

interface ShapeInterface
{
    public function area();
    public function volume(); //squares do not have volumes!!!
}