<?php

include 'vehicle-base.php';
include 'file-handler.php';
include 'vehicle-actions.php';

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

    public function setDetails(array $vehicle): void
    {
        if (isset($vehicle['name'])) {
            $this->name = $vehicle['name'];
        }
        if (isset($vehicle['type'])) {
            $this->type = $vehicle['type'];
        }
        if (isset($vehicle['price'])) {
            $this->price = $vehicle['price'];
        }
        if (isset($vehicle['image'])) {
            $this->image = $vehicle['image'];
        }
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

    public function deleteVehicle(int $id): bool
    {
        $existingVehicles = $this->readJsonFile();
        if (isset($existingVehicles[$id - 1])) {
            unset($existingVehicles[$id - 1]);
            $existingVehicles = array_values($existingVehicles);
            return $this->writeJsonFile($existingVehicles);
        } else {
            return false;
        }
    }
}
