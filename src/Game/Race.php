<?php

namespace phpWzorce\Game; 

class Race {
    private $distance = 0.0; 
    private $maxTours = 3; 
    private $weather; 
    private $vehicles = []; 
    
    public function __construct(Weather $weather,  float $distance = 5) {
        $this->weather = $weather; 
        $this->distance = $distance;
    }

    public function addVehicle(Vehicle $vehicle):void {
        $this->vehicles[] = $vehicle;
    }
    public function run() : void {
        $this->displayInfo(); 
        foreach(range(1, $this->maxTours) as $tour){           
            $this->tour($tour);
        }
        $this->displayWinners(); 
    }
    
    private function tour(int $tour){
        $this->weather->randomiseWeather();
        $this->displayTourInfo($tour);
        foreach ($this->vehicles as $vehicle) {           
            $vehicle->move();
        }
    }
    
    private function displayWinners() : void {
        $winners = $this->getWinners(); 
        echo '<br><br>Winners: '; 
        foreach($winners as $category => $winner){
            echo sprintf("\n category: %s (%s) - %d", $category, $winner->getName(), $winner->getDistance()); 
        }
        
    }
    
    private function getWinners() : array {
        $winners = array(); 
        foreach($this->vehicles as $vehicle){
            $category = $vehicle->getType();
            if($this->isWinner($winners,$vehicle)){
                $winners[$category]=$vehicle; 
            }
        }
        return $winners; 
    }
    
    private function isWinner(array $winners, Vehicle $vehicle) : bool {
        $category = $vehicle->getType();
        if(!isset($winners[$category])){
               // $winners[$category] = $vehicle; 
        return true; 
        } else {
            if(($vehicle->getDistance() > $winners[$category]->getDistance() )){
                // $winners[$category] = $vehicle;
                return true; 
            }
        }
        return false; 
    }
    
    private function displayInfo(): void {
        echo sprintf("\n Dist:\t %s", $this->distance);  
        echo sprintf("\n Veh: %s", count($this->vehicles)); 
    }
    
    private function displayTourInfo(int $tour) : void {
        echo sprintf("\n <br>Tour %s began:", $tour ); 
        echo sprintf("\n", $this->weather);
    }
    
    
}

