<?php

use Azkakhairul09\ApiWilayah\Generator;
use Azkakhairul09\ApiWilayah\Repository;

require "vendor/autoload.php";

$repository = new Repository(__DIR__.'/data');

$repository->cache('districts.csv');
$repository->cache('villages.csv');

$generator = new Generator($repository, __DIR__.'/static/api');

$generator->clearOutputDir();
$generator->generate();
