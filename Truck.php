<?php

require_once 'vehicule.php';

class Truck extends vehicle {

    private int $storage;

    private int $chargement = 0;

    private string $energy;

    private int $energyLevel ;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    function __construct(string $color, int $nbSeats, string $energy, int $storage) {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storage = $storage;
    }

    public function getStorage(): int {
        return $this->storage;
    }

    public function setStorage(int $storage) {
        $this->storage = $storage;
    }

    public function getChargement(): int {
        return $this->chargement;
    }

    public function setChargement(int $chargement) {
        $this->chargement = $chargement;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
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

    public function isEmpty() 
    {
        $sentence = "";
        if($this->chargement == $this->storage) {
            $sentence .= "full";
        }
        else {
            $sentence .= "in filling !";
        }
        return $sentence;
    }
}