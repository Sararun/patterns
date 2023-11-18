<?php
namespace App;
use App\creation\factory\BloggsCommsManager;
use App\creation\singleton\SoloInstance;
use App\Enums\BlogObjectsEnum;

require_once __DIR__ . '/vendor/autoload.php';

$a = new Index();

echo $a->index . "<br/>";

//Test Singleton

$singleton = SoloInstance::getInstance();
$singleton->setProperty('property', 'value');

//delete link of object
unset($singleton);

$singletonTwo = SoloInstance::getInstance();

echo $singletonTwo->getProperty('property'). "<br/>";

//Test Factory Method

$commsManager = new BloggsCommsManager();

echo $commsManager->getAptEncoder()->encode(). "<br/>";

//Test Abstract factory

echo (new BloggsCommsManager())->makeBlogObject(BlogObjectsEnum::TTD)->encode(). "<br/>";
