<?php 
namespace phpWzorce\Game; 

class Car extends AbstractVehicle{
    
    protected  $type = 'Car';
    protected $maxSpeed = 220; 
    
    public function getName() : string {
        return strtoupper($this->name); 
    }
    
    protected function preMove() : void {
        $this->partDistance = $this->maxSpeed * rand(70, 100)/100;
        $this->distance += $this->partDistance;  

    }
    
}