<?php

namespace App;

use App\Mensageiro;

class SMS implements Mensageiro{
    public function enviar(){
        echo '<br>Mensagem Enviada por SMS';
    }
}