<?php

interface IVehicle
{
    public function getEngine($type = null);

    public function getBrand();

    public function getColor();
}