<?php

namespace App;

use App\Personagem;

class Arqueiro implements Personagem{
    private int $vida = 100;
    private int $flechas = 100;
    private int $ataque = 15;

    public function __construct(){
        $this->status();
        echo '<br>Arqueiro pronto para batalha...<br>';
    }

    public function atacar(){
        echo '<br>O Arqueiro atira uma flecha';
        $this->flechas--;
        return $this->ataque;
    }

    public function sofrer(int $dano){
        $this->vida -= $dano;
        return;
    }

    public function status(){
        echo '<br><br>=== Status Arqueiro ===';
        echo '<br>Vida do Arqueiro: ' . $this->vida;
        echo '<br>Flechas do Arqueiro: ' . $this->flechas;
        echo '<br>Ataque do Arqueiro: ' . $this->ataque;
        return;
    }
}