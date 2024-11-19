<?php

class Flight {
    // Publiskās īpašības
    public $flight_code;
    public $origin;
    public $destination;
    public $departure_time; // Laika objekts
    public $aircraft;

    // Konstruktors
    public function __construct($flight_code, $origin, $destination, DateTime $departure_time, Aircraft $aircraft) {
        $this->flight_code = $flight_code;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->departure_time = $departure_time; // Uzglabā DateTime objektu
        $this->aircraft = $aircraft;
    }

    // Metode, lai parādītu lidojuma informāciju
    public function getFlightInfo() {
        return "Lidojuma kods: " . $this->flight_code . "<br>" .
               "Izlidošanas lidosta: " . $this->origin . "<br>" .
               "Galamērķa lidosta: " . $this->destination . "<br>" .
               "Izlidošanas laiks: " . $this->departure_time->format('Y-m-d H:i:s') . "<br>" .
               "Lidmašīna: " . $this->aircraft->manufacturer . " " . $this->aircraft->model;
    }
}

?>