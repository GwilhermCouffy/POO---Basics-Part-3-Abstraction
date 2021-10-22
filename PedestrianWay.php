<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay 
{
    public function __construct() {
        $this->currentVehicle[0] = "";
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }  

    public function addVehicle($vehicule)
    {
        if(is_a($vehicule, 'Bicycle')) {
            if($this->currentVehicle[0] == "") {
                $this->currentVehicle[0] = $vehicule;
            }
            else {
                array_push($this->currentVehicle, $vehicule);
            }  
        }
        else {
            echo "Impossible, les rues piétonnes sont réservés aux vélos uniquement.</br>";
        }
    }
}