<?php
declare(strict_types=1);
/**
 * Sample GRPC PHP server.
 */
use Spiral\Goridge;
use Spiral\RoadRunner;
ini_set('display_errors', 'stderr');
require "vendor/autoload.php";
$server = new \Spiral\GRPC\Server();
$server->registerService(\Service\ContrivedServiceInterface::class, new \Service\ContrivedService());
$w = new RoadRunner\Worker(new Goridge\StreamRelay(STDIN, STDOUT));
$server->serve($w);
