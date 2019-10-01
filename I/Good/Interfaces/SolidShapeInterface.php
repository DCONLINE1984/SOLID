<?php

/**
 * We implement this to ensure each solid shape has a volume method
 *
 * @author Dean Clow
 */

namespace I\Good\Interfaces;

interface SolidShapeInterface
{
    public function volume();
}