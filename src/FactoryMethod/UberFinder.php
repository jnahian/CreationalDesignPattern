<?php

namespace Nahian\LoopCreationalDesignPattern\FactoryMethod;

class UberFinder implements ITransportFinder
{
    private string $lat;
    private string $lng;

    public function __construct(string $lat, string $lng)
    {
        $this->lat = $lat;
        $this->lng = $lng;
    }

    public function hasLat(): bool
    {
        if ($this->lat) {
            return true;
        }
        return false;
    }

    public function hasLng(): bool
    {
        if ($this->lng) {
            return true;
        }
        return false;
    }

    public function findTransport()
    {
        echo "Find transport around Lat: {$this->lat}, {$this->lng}" . PHP_EOL;
    }
}
