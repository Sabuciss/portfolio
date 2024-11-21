<?php

class Flight {
    public $flight_code;
    public $origin;
    public $destination;
    public $departure_time;
    public $aircraft;

    public function __construct($flight_code, $origin, $destination, DateTime $departure_time, Aircraft $aircraft) {
        $this->flight_code = $flight_code;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->departure_time = $departure_time;
        $this->aircraft = $aircraft;
    }

    public function getFlightInfo() {
        return "Lidojuma kods: " . $this->flight_code . "<br>" .
               "Izlidošanas lidosta: " . $this->origin . "<br>" .
               "Galamērķa lidosta: " . $this->destination . "<br>" .
               "Izlidošanas laiks: " . $this->departure_time->format('Y-m-d H:i:s') . "<br>" .
               "Lidmašīna: " . $this->aircraft->manufacturer . " " . $this->aircraft->model;
    }
    public function getDistance(){
                // Rāda platuma un garuma koordinātes no lidostām
                $lat1 = deg2rad($this->origin->platums);  // Pārveidojam no grādiem uz radiāniem
                $lon1 = deg2rad($this->origin->garums);
                $lat2 = deg2rad($this->destination->platums);
                $lon2 = deg2rad($this->destination->garums);
        
                // Zemes rādiuss kilometros
                $earth_radius = 6371;
        
                // Aprēķinām atšķirības platumā un garumā
                $dlat = $lat2 - $lat1;
                $dlon = $lon2 - $lon1;
        
                // Haversine formula
                $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) *  sin($dlon / 2) * sin($dlon / 2);
                $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        
                // Attālums
                $distance = $earth_radius * $c; // Attālums kilometros
                return round($distance, 2);
    }

    public function getDuration(){
      $attalums = $this->getDistance();
      $atrums = $this->aircraft->atrums;
      $laiks = $attalums / $atrums * 60 +30;
    return $laiks;
     }  
}

?>
