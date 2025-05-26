<?php

interface VehicleActions
{
    public function addVehicle(array $vehicle): bool;

    public function getVehicles(): array;

    public function editVehicle(int $id, array $vehicle): bool;

    public function deleteVehicle(int $id): bool;
}
