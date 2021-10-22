<?php

require_once 'Vehicule.php';

class Car extends Vehicle
{

    private string $energy;

    private int $energyLevel ;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy) {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    public function getEnergy(): string {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): string {
        return $this->energylevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start() {
        return "Démarrage du moteur, activation des phares et lancement du gps.";
    }
}