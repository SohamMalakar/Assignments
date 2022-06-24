
<?php

$countries = array("Italy" => "Rome", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid");

foreach ($countries as $country_name => $capital)
{
    echo $country_name . ": " . $capital . "\n";
}

echo "\n";

asort($countries);

foreach ($countries as $country_name => $capital)
{
    echo $country_name . ": " . $capital . "\n";
}

?>
