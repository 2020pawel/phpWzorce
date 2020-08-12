<?php

namespace phpWzorce; 

class Car{
    protected $make = ''; 
    protected $model = '';     
    protected $speed = null; 
    private $color = 'red'; 
    protected $attributes = [];
    

    public function __construct(string $make, string $model, Speed $speed) {
        $this->make = $make; 
        $this->model = $model; 
        $this->speed = $speed; 
    }
    
    public function slowDown() : Speed{
        return $this->getSpeed()->slowDown(); 
    }
    
    public function getSpeed() : Speed{
        return $this->speed; 
    }
    
    public function drive() : void {
        echo ' Driving Car ';
    }
    
    public function getColor() : string {
        return $this->color; 
    }
    
    /*
    public function __call(string $name, array $attr){
            var_dump($name, $attr); 
    }
    
    
    public function __get(string $name) {
        return $this->attributes[$name] ? : null; 
    }
    
    public function __set(string $name, $value) : void {
        $this->attributes[$name] = $value; 
    }
     
    */ 
}
