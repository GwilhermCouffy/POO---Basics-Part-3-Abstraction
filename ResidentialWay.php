<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct() {
        $this->currentVehicle[0] = "";
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }   

    public function addVehicle($vehicule)
    {
        if($this->currentVehicle[0] == "") {
            $this->currentVehicle[0] = $vehicule;
        }
        else {
            array_push($this->currentVehicle, $vehicule);
        }   
    }
}