<?php

include_once "Aircraft.php";
include_once "Airport.php";
include_once "Flight.php";
echo "helooo 😁<br>";//windows+. 

$mana_lidmasina = new Aircraft("Airbus", "A220-300", 120, 850);

var_dump($mana_lidmasina);
echo"<br><br>";
$destinatio = new Destination("RIX", 56.924, 23.971 );

var_dump($destinatio);

$flight = new Flight("SA503", "Rīga", "Stokholma", $departureTime, $aircraft);

echo $flight->getFlightInfo();

