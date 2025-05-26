<?php

include '../../app/classes/vehicle-manager.php';
$vehiclemanager = new VehicleManager();

$vehicleId = 3; // Specify the ID of the vehicle to delete from the index.php page

$result = $vehiclemanager->deleteVehicle($vehicleId);
if ($result) {
    echo "<h1>Vehicle deleted successfully!</h1>";
} else {
    echo "<h1>Failed to delete vehicle.</h1>";
}
