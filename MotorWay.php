<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct() {
        $this->currentVehicle[0] = "";
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }  

    public function addVehicle($vehicule)
    {
        if(is_a($vehicule, 'Car') || is_a($vehicule, 'Truck')) {
            if($this->currentVehicle[0] == "") {
                $this->currentVehicle[0] = $vehicule;
            }
            else {
                array_push($this->currentVehicle, $vehicule);
            }  
        }
        else {
            echo "Impossible, l'autoroute est réservée aux voitures et camion uniquement !</br>";
        }
    }
}