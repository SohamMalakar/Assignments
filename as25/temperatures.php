<?php

$temperatures = array(25, 24, 10, 30, 39, 0, 20, 35, 27, 42);

$max = max($temperatures);
$min = min($temperatures);

$average = array_sum($temperatures) / count($temperatures);

echo "Maximum temperature: " . $max . "°c" . "\n";
echo "Minimum temperature: " . $min . "°c" . "\n";
echo "Average temperature: " . $average . "°c" . "\n";

?>