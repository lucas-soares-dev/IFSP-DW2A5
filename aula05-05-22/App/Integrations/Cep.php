<?php

namespace App\Integrations;

use Claudsonm\CepPromise\CepPromise;

class Cep
{
    public static function get($cep) {
        return CepPromise::fetch($cep);
    }
}