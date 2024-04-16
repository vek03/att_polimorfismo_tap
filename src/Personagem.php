<?php

namespace App;

interface Personagem {
    public function atacar();
    public function sofrer(int $dano);
    public function status();
}