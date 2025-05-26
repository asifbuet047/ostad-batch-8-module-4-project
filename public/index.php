<?php

include '../app/classes/vehicle-manager.php';

$vehiclemanager = new VehicleManager();

$vehicles = $vehiclemanager->getVehicles();
echo "<h1>Simple Vehicle listing Application</h1>";

foreach ($vehicles as $index => $vehicle) {
    echo "<br>------------------------------------------</br>";
    echo "<h2>Vehicle " . ($index + 1) . "</h2>";
    echo "<p>Name: " . ($vehicle['name']) . "</p>";
    echo "<p>Type: " . ($vehicle['type']) . "</p>";
    echo "<p>Price: " . ($vehicle['price']) . " Taka</p>";
    echo "<p>Image link: " . ($vehicle['image']) . "</p>";
    
}
