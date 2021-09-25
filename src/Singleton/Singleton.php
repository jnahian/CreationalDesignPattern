<?php

namespace Nahian\LoopCreationalDesignPattern\Singleton;

class Singleton
{
    private static $instances = [];

    public function __construct() { }

    public function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot un-serialize");
    }

    public static function getInstance()
    {
        $subClass = static::class;

        if (!isset(self::$instances[$subClass])) {
            self::$instances[$subClass] = new static();
        }

        return self::$instances[$subClass];
    }
}
