<?php
require_once 'Speedometer.php';

echo '10 km = ' . Speedometer::convertKmToMiles(10) . ' miles<br>';

echo '10 miles = ' . Speedometer::convertMilesToKm(10) . ' km<br>';