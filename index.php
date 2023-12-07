<?php

namespace App;

use App\creation\builder\Product;
use App\creation\factory\BloggsCommsManager;
use App\creation\prototype\Earth\EarthForest;
use App\creation\prototype\Earth\EarthPlains;
use App\creation\prototype\Earth\EarthSea;
use App\creation\prototype\TerrainFactory;
use App\creation\service_management\dependency_injection\Application;
use App\creation\service_management\FileLogger;
use App\creation\service_management\service_locator\ServiceLocator;
use App\creation\singleton\SoloInstance;
use App\Enums\BlogObjectsEnum;
use App\structural\composite\Archer;
use App\structural\composite\Army;
use App\structural\composite\LaserCannon;
use App\structural\decorator\DiamondDecorator;
use App\structural\decorator\Plains;
use App\structural\decorator\PollutionDecorator;

require_once __DIR__ . '/vendor/autoload.php';

$a = new Index();

echo $a->index . "<br/>";

//Test Singleton

$singleton = SoloInstance::getInstance();
$singleton->setProperty('property', 'value');

//delete link of object
unset($singleton);

$singletonTwo = SoloInstance::getInstance();

echo $singletonTwo->getProperty('property') . "<br/>";

//Test Factory Method

$commsManager = new BloggsCommsManager();

echo $commsManager->getAptEncoder()->encode() . "<br/>";

//Test Abstract factory

echo (new BloggsCommsManager())->makeBlogObject(BlogObjectsEnum::TTD)->encode() . "<br/>";

//Test prototype

$terrainFactory = new TerrainFactory(
    new EarthSea('deep_water', 15),
    new EarthPlains(123, 25),
    new EarthForest('tree', 25)
);
echo $terrainFactory->getForest()->getName() . "<br/>";

//Test builder

$product = Product::build()
    ->setName('product')
    ->setDescription('description')
    ->setPrice(10)
    ->get();
print_r($product);
echo "<br/>";

//Test Service Locator

$serviceLocator = new ServiceLocator();
$serviceLocator->register('logger', new FileLogger());

$logger = $serviceLocator->get('logger');
echo $logger->log("Message for logging") . "<br/>";

// Test Dependency Injection

$logger = new FileLogger();
$app = new Application($logger);
echo $app->run() . "<br/>";

//Test Composite

$army = new Army();
$army->addUnit(new Archer());
$army->addUnit(new LaserCannon());
$secondArmy = new Army();
$secondArmy->addUnit(new Archer());
$secondArmy->addUnit(new Archer());
$army->addUnit($secondArmy);

echo $army->bombardStrength() . "<br/>";

//Test decorator

$tile = new Plains();
echo $tile->getWealthFactor() . "<br/>";

$tile = new DiamondDecorator($tile);
echo $tile->getWealthFactor() . "<br/>";

$tile = new PollutionDecorator($tile);
echo $tile->getWealthFactor() . "<br/>";

