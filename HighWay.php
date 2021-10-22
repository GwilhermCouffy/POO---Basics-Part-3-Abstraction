<?php

abstract class HighWay 
{
    protected array $currentVehicle;
    protected int $nbLane;
    protected int $maxspeed;

    public function __construct() {
        $currentVehicle[0] = "";
    }

    //méthode a redéfinir dans les classes filles
    abstract public function addVehicle(Vehicule $vehicule);

    //getter et setter
    //CurrentVehicle
    public function getCurrentVehicle(): array
    {
        return $this->currentVehicle;
    }

    public function setCurrentVehicle(array $vehicle): void
    {
        $this->vehicle = $vehicle;
    }

    //NbLane
    public function getNbLane(): array
    {
        return $this->nbLane;
    }

    public function setNbLane(array $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    //MaxSpeed
    public function getMaxSpeed(): array
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(array $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
    
}