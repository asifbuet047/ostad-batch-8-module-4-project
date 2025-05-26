<?php

include '../../app/classes/vehicle-manager.php';
$vehiclemanager = new VehicleManager();

$newVehicle = [
    'name' => "BMW",
    'type' => "Car",
    'price' => 5000000,
    'image' => "https://example.com/bmw.jpg"
];//Add new vehicle here

$result = $vehiclemanager->addVehicle($newVehicle);
if ($result) {
    echo "<h1>Vehicle added successfully!</h1>";
} else {
    echo "<h1>Failed to add vehicle.</h1>";
}
