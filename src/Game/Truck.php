<?php 
namespace phpWzorce\Game; 

class Truck extends AbstractVehicle { 
    
    protected  $type = 'Truck'; 
    protected $maxSpeed = 120; 
    
    public function getName() : string {
        return strtolower($this->name); 
    }
    
    protected function preMove() : void {
        $this->partDistance = $this->maxSpeed * rand(80, 100)/100;
        $this->distance += $this->partDistance; 
    }
}