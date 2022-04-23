<?php

Class Speedometer
{
    public const KM_TO_MILES = 0.621;

    public static function convertMilesToKm($miles)
    {
        return $miles / self::KM_TO_MILES;
    }

    public static function convertKmToMiles($kilometers)
    {
        return $kilometers * self::KM_TO_MILES;
    }
}

