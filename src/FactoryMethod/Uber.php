<?php

namespace Nahian\LoopCreationalDesignPattern\FactoryMethod;

class Uber extends RideSharingService
{
    private string $lat;
    private string $lng;

    public function __construct(string $lat, string $lng)
    {
        $this->lat = $lat;
        $this->lng = $lng;
    }

    public function getTransport(): ITransportFinder
    {
        return new UberFinder($this->lat, $this->lng);
    }
}
