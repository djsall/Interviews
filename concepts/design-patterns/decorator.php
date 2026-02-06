<?php

interface HasTyreSize
{
    public function getTyreSize(): string;

    public function getBootVolume(): int;
}

class BaseCar implements HasTyreSize
{
    public function getTyreSize(): string
    {
        return "205/55 r16";
    }

    public function getBootVolume(): int
    {
        return 128;
    }
}

class DecorativeCar implements HasTyreSize
{
    public function __construct(private BaseCar $car)
    {
    }

    public function getTyreSize(): string
    {
        return "Tyre size is:" . $this->car->getTyreSize();
    }

    public function getBootVolume(): int
    {
        return $this->car->getBootVolume() - 25;
    }
}