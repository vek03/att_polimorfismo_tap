<?php

namespace App;

require 'vendor/autoload.php';

use App\Email;
use App\SMS;
use App\WhatsApp;

$email = new Email();
$sms = new SMS();
$whats = new WhatsApp();

$email->enviar();
$sms->enviar();
$whats->enviar();