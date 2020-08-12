<?php
namespace phpWzorce\Game; 

class VehicleFactory{
    const CAR = 'car'; 
    const MOTOR = 'motor'; 
    const TRUCK = 'truck'; 
    
    public static function factory(string $type, string $name ) : Vehicle{
        $vehicle = null; 
        switch ($type) {
            case self::CAR: 
                $vehicle = new Car($name); 
                break; 
            case self::MOTOR: 
                $vehicle = new Motor($name); 
                break; 
            case self::TRUCK: 
                $vehicle = new Truck($name); 
                break; 
            default: 
                throw new \Exception('Could not recognize type'); 
        } 
        return $vehicle; 
    }
}
