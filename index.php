<?php

namespace App;

require 'vendor/autoload.php';

use App\Guerreiro;
use App\Mago;
use App\Arquiteto;

function performar(Personagem $char){
    return $char->atacar();
}

$warrior = new Guerreiro();
$mage = new Mago();
$archer = new Arqueiro();

$mage->sofrer(performar($warrior));

$warrior->sofrer(performar($mage));

$warrior->sofrer(performar($archer));
$warrior->sofrer(performar($archer));

$archer->sofrer(performar($mage));

$warrior->status();
$mage->status();
$archer->status();