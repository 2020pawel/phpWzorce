<?php

namespace phpWzorce; 

class Cab extends Car {
    
    private $color = 'yellow'; 
    
    public function drive() : void {
        echo ' Driving Cub '; 
    }
    
    public function getColor(): string {
        return $this->color; 
    }
    
}



