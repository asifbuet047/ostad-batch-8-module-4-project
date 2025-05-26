<?php

require 'app/classes/file-handler.php';

class VehicleManager extends VehicleBase implements VehicleActions
{
    use FileHandler;

    public function getDetails(): array
    {
        return [
            'name' => $this->name,
            'type' => $this->type,
            'price' => $this->price,
            'image' => $this->image
        ];
    }

    public function addVehicle(array $vehicle): bool
    {
        $existingVehicles = $this->readJsonFile();
        $existingVehicles[] = $vehicle;
        if ($this->writeJsonFile($existingVehicles)) {
            return true;
        } else {
            return false;
        }
    }

    public function getVehicles(): array
    {
        return $this->readJsonFile();
    }

    public function editVehicle(int $index, array $vehicle): bool
    {
        $existingVehicles = $this->readJsonFile();
        if (isset($existingVehicles[$index])) {
            $existingVehicles[$index] = $vehicle;
            return $this->writeJsonFile($existingVehicles);
        } else {
            return false;
        }
    }
}
