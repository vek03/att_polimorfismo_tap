<?php

namespace App;

use App\Personagem;

class Guerreiro implements Personagem{
    private int $vida = 100;
    private int $stamina = 100;
    private int $ataque = 30;

    public function __construct(){
        $this->status();
        echo '<br>Guerreiro pronto para batalha...<br>';
    }

    public function atacar(){
        echo '<br>O Guerreiro usa a espada';
        $this->stamina -= $this->ataque;
        return $this->ataque;
    }

    public function sofrer(int $dano){
        $this->vida -= $dano;
        return;
    }

    public function status(){
        echo '<br><br>=== Status Guerreiro ===';
        echo '<br>Vida do Guerreiro: ' . $this->vida;
        echo '<br>Stamina do Guerreiro: ' . $this->stamina;
        echo '<br>Ataque do Guerreiro: ' . $this->ataque;
        return;
    }
}