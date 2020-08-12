<?php

namespace phpWzorce; 

class Speed{
    const MILES = 'mph'; 
    const KILOMETERS = 'km/h'; 
    
    protected $value = 0.0;    
    protected $unit = self::KILOMETERS; 
    protected $validUnits = [
        self::KILOMETERS, 
        self::MILES
    ]; 
    public function __construct(float $value, ?string $unit = null){
        if(in_array($unit, $this->validUnits, true)){
            $this->unit = $unit; 
        }
        $this->value = $value; 
    }
    
    public function slowDown() : void {
        $this->value = 0.9 * $this->value; 
    }
    
    public function getValue():float{
        return $this->value;
    }
    
    public function __toString(): string {
        return sprintf('%.2f %s', $this->value, $this->unit);
    }
}

