<?php
namespace App;
use App\creation\singleton\SoloInstance;

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