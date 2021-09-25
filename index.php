<?php require_once "vendor/autoload.php";

use Nahian\LoopCreationalDesignPattern\Builder\ISQLBuilder;
use Nahian\LoopCreationalDesignPattern\Builder\MySQLBuilder;
use Nahian\LoopCreationalDesignPattern\Builder\PostgresBuilder;
use Nahian\LoopCreationalDesignPattern\FactoryMethod\RideSharingService;
use Nahian\LoopCreationalDesignPattern\FactoryMethod\Uber;
use Nahian\LoopCreationalDesignPattern\Singleton\Logger;


function findRide(RideSharingService $rideSharingService)
{
    return $rideSharingService->find('20.2020020', '10.000021');
}

echo "Factory Method" . PHP_EOL;

findRide(new Uber('23.7985508', '90.3654215'));


Logger::log("Started!");

// Compare values of Logger singleton.
$l1 = Logger::getInstance();
$l2 = Logger::getInstance();
if ($l1 === $l2) {
    Logger::log("Logger has a single instance.");
} else {
    Logger::log("Loggers are different.");
}


function buildQuery(ISQLBuilder $queryBuilder)
{
    $query = $queryBuilder
        ->select("users", ["name", "email", "password"])
        ->where("age", 18, ">")
        ->where("age", 30, "<")
        ->limit(10, 20)
        ->getSQL();
    echo $query . PHP_EOL;
}

buildQuery(new MySQLBuilder());
buildQuery(new PostgresBuilder());
