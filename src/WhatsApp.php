<?php

namespace App;

use App\Mensageiro;

class WhatsApp implements Mensageiro{
    public function enviar(){
        echo '<br>Mensagem Enviada por WhatsApp';
    }
}