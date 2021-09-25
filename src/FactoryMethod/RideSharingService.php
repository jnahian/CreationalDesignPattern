<?php

namespace Nahian\LoopCreationalDesignPattern\FactoryMethod;

abstract class RideSharingService
{
    abstract public function getTransport(): ITransportFinder;

    public function find()
    {
        $transport = $this->getTransport();

        if ($transport->hasLat() && $transport->hasLng()) {
            $transport->findTransport();
        }
    }
}
