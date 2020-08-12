<?php

namespace phpWzorce\Game; 

interface Vehicle {
    public function move():void; 
    public function getDistance() : float; 
    public function getName() : string;
    public function getType() : string;
}


