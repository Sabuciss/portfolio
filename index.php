<?php

include_once "Aircraft.php";
include_once "Airport.php";
include_once "Flight.php";
echo "helooo 😁<br>";//windows+. 

$mana_lidmasina = new Aircraft("Airbus", "A220-300", 120, 850);

var_dump($mana_lidmasina);
echo"<br><br>";

$origin = new Destination("RIX", 56.924, 23.971 );
var_dump($origin);
echo"<br><br>";
$destination = new Destination("JKF", 40.6413, -73.7781);
$departure_time = new DateTime();

$flight = new Flight("SA503", $origin , $destination , $departure_time , $mana_lidmasina);

 var_dump($flight);


echo "<br>" . $flight->getDistance();

echo "<br>" . $flight->getDuration();
