<?php

namespace Nahian\LoopCreationalDesignPattern\FactoryMethod;

interface ITransportFinder
{
    public function hasLat(): bool;

    public function hasLng(): bool;

    public function findTransport();
}
