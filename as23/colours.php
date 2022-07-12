<?php

$colours = array(5 => "yellow", 14 => "blue", 3 => "green", 22 => "white");

$keys = array_keys($colours);

echo $colours[$keys[0]] . "\n";

$pos = 3;
$val = array(0 => "black");

$temp = array();

for ($i = 0; $i < $pos; $i++)
{
    $temp += array($keys[$i] => $colours[$keys[$i]]);
}

$temp += $val;

for ($i = $pos; $i < count($keys); $i++)
{
    $temp += array($keys[$i] => $colours[$keys[$i]]);
}

$colours = $temp;

print_r($colours);

$keys = array_keys($colours);
unset($colours[$keys[count($keys)-1]]);

print_r($colours);

?>