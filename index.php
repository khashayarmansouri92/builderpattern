<?php

use App\Builder\WoodHomeBuilder;
use App\Directores\HomeDirectore;

require_once ('vendor/autoload.php');

$woodenHome = (new HomeDirectore(new WoodHomeBuilder()))->buildHome();
var_dump($woodenHome);