<?php

namespace App;

use App\behavioral\chane_responsibility\FirstHandler;
use App\behavioral\chane_responsibility\SecondHandler;
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
use App\structural\adapter\EbookAdapter;
use App\structural\adapter\Kindle;
use App\structural\adapter\PaperBook;
use App\structural\bridge\HelloWorldText;
use App\structural\bridge\HtmlFormatter;
use App\structural\bridge\PlainTextFormatter;
use App\structural\composite\Archer;
use App\structural\composite\Army;
use App\structural\composite\LaserCannon;
use App\structural\decorator\DiamondDecorator;
use App\structural\decorator\Plains;
use App\structural\decorator\PollutionDecorator;
use App\structural\facade\OperationFacade;
use App\structural\facade\SubSystem1;
use App\structural\facade\SubSystem2;
use App\structural\flyweight\ShapeFactory;

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

//Test facade

$subSystem1 = new SubSystem1();
$subSystem2 = new SubSystem2();

$operationFacade = new OperationFacade($subSystem1, $subSystem2);

print_r($operationFacade->subsystemsOperations());

//Adapter test

$paperBook = new PaperBook();
$paperBook->open();
echo $paperBook->getPage();
$paperBook->turnPage();

$kindle = new Kindle();
$adaptedEbook = new EbookAdapter($kindle);
$adaptedEbook->open();
echo $adaptedEbook->getPage();
$adaptedEbook->turnPage();

//Bridge test

$htmlFormatter = new HtmlFormatter();
$plainTextFormatter = new PlainTextFormatter();

$text = new HelloWorldText($plainTextFormatter);
echo $text->print(); //Hello world!

$text = new HelloWorldText($htmlFormatter);
echo $text->print(); //<p>Hello world</p>

//Flyweight test

$factory = new ShapeFactory();

$shape1 = $factory->getShape('red');
$shape2 = $factory->getShape('red');

$shape3 = $factory->getShape('blue');

$shape1->draw(10, 20);
$shape2->draw(30, 40);
$shape3->draw(50, 60);

if ($shape1 === $shape2) {
    echo "Shape1 and Shape2 share the same Flyweight instance.\n";
}

//Chane responosobility test

$handler1 = new FirstHandler();
$handler2 = new SecondHandler();

$handler1->setNextHandler($handler2);
echo "<br>";
echo $handler1->handleRequest("first") . "<br>";
echo $handler1->handleRequest("second") . "<br>";
echo $handler1->handleRequest("third") . "<br>"; // Handler not found
