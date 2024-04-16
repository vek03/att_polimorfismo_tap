<?php

namespace App;

use App\Mensageiro;

class Email implements Mensageiro{
    public function enviar(){
        echo '<br>Mensagem Enviada por Email';
    }
}