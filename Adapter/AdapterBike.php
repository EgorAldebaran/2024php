<?php

class AdapterBike implements iBike
{
    private $waterBike;

    public function __construct(WaterBike $waterBike)
    {
        $this->waterBike = $waterBike;
    }
    
    public function drive()
    {
        echo "AdapterBike сработал: waterBike может ехать по земле ". $this->waterBike->waterDrive();
    }
}
