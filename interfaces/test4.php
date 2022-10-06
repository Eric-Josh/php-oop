<?php

interface Car { 
    public function setModel($name);
    
    public function getModel();
}

interface Vehicle {
    public function setHasWheels($bool); 
   
    public function getHasWheels();
}