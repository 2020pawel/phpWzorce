<?php 
namespace phpWzorce\Game; 

abstract class AbstractVehicle implements Vehicle{
    protected $name; 
    protected $type;
    // protected $maxSpeed = 0; 
    protected $distance = 0; 
    protected $partDistance = 0; 

    public function __construct(string $name) {
        $this->name = $name;
    }
    
    public function getDistance(): float {
        return $this->distance;
    }
    public function move():void {
        $this->preMove(); 
//        $this->partDistance = $this->maxSpeed * rand(70, 100)/100;
//        $this->distance += $this->partDistance;        
        $this->postMove();
        
        echo " Mov {$this->getType()}  {$this->getName()} sum: {$this->distance} ; - {$this->partDistance}. "; 
    }
    
    public function getType() : string {
        return $this->type; 
    }
    
    protected function preMove() : void { }
    
    protected function postMove() : void { }
    
    abstract public function getName() : string; 
    
}