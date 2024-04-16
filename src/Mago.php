<?php

namespace App;

use App\Personagem;

class Mago implements Personagem{
    private int $vida = 100;
    private int $magia = 100;
    private int $ataque = 25;

    public function __construct(){
        $this->status();
        echo '<br>Mago pronto para batalha...<br>';
    }

    public function atacar(){
        echo '<br>O Mago conjura uma bola de fogo';
        $this->magia -= $this->ataque;
        return $this->ataque;
    }

    public function sofrer(int $dano){
        $this->vida -= $dano;
        return;
    }

    public function status(){
        echo '<br><br>=== Status Mago ===';
        echo '<br>Vida do Mago: ' . $this->vida;
        echo '<br>Magia do Mago: ' . $this->magia;
        echo '<br>Ataque do Mago: ' . $this->ataque;
        return;
    }
}