<?php

abstract class VehicleBase
{
    protected $name;
    protected $type;
    protected $price;
    protected $image;


    abstract public function getDetails(): array;

    abstract public function setDetails(array $details): void;
}
