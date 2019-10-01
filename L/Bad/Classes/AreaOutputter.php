<?php

/**
 * The outputter for the area
 *
 * @author Dean Clow
 */

namespace L\Bad\Classes;

class AreaOutputter
{
    /**
     * Output message of the sum in HTML format
     *
     * @return string
     */
    public static function outputHTML(float $sum): string {
        return implode('', array(
            "",
            "Sum of the areas of provided shapes: ",
            $sum,
            ""
        ));
    }

    /**
     * Output message of the sum in JSON format
     *
     * @param float $sum
     * @return string
     */
    public static function outputJSON(float $sum): string {
        return json_encode([
            'sum' => $sum
        ]);
    }
}