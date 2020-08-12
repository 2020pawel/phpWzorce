<?php 

namespace phpWzorce\Game; 

class VehicleBuilder{
    private $name = ''; 
    private $type = ''; 
    
    const CAR = VehicleFactory::CAR; 
    const MOTOR = VehicleFactory::MOTOR; 
    const TRUCK = VehicleFactory::TRUCK;  
    
    public function setType(string $type):void {
        $this->type = $type; 
    }
    
    
    public function setName(string $name):void  {
        $this->name = $name; 
    }
    
    public function build() : Vehicle {
        $vehicle = null; 
        switch ($this->type) {
            case self::CAR:                 
            case self::MOTOR:                 
            case self::TRUCK: 
                $vehicle = VehicleFactory::factory($this->type, $this->name); 
                break; 
            default: 
                throw new \Exception('Could not recognize type'); 
        } 
        return $vehicle; 
    }
}
