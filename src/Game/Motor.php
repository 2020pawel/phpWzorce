<?php 
namespace phpWzorce\Game; 

class Motor extends AbstractVehicle{ 
    
    protected  $type = 'Motor'; 
    protected $maxSpeed = 250; 
    
    public function getName() : string {
        return $this->name; 
    }   
    
   protected function preMove() : void {
        $this->partDistance = $this->maxSpeed * rand(30, 100)/100;
        
        $weather = Weather::getInstance(); 
        if($weather->isRaining()) {
            $this->distance -= 20; 
           // echo " I had to slow down";
        }
       //  $this->distance += $this->partDistance; 
    }
}