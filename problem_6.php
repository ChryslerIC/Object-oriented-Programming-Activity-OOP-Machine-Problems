<?php

class Vehicle {
    public function fare($capacity){
        return $capacity * 100;
    }
}

class Bus extends Vehicle {
    public function fare($capacity){
        $totalFare = $capacity * 100;
        $maintenanceCharge = $totalFare * 0.10;
        return $totalFare + $maintenanceCharge;
    }
}

?>