<?php

include '../../app/classes/vehicle-manager.php';
$vehiclemanager = new VehicleManager();

$vehicleId = 2; // Specify the ID of the vehicle to edit from the index.php page

$updatedInfo = [
    'name' => 'Tesla Model S',
    'type' => 'Electric',
    'price' => 150000,
    'image' => 'https://example.com/tesla-vehicle.jpg'
];
$result = $vehiclemanager->editVehicle($vehicleId, $updatedInfo);
if ($result) {
    echo "<h1>Vehicle updated successfully!</h1>";
} else {
    echo "<h1>Failed to update vehicle.</h1>";
}
