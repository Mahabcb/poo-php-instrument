<?php

namespace App\Abstract;

abstract class AbstractInstrument{

    public function joue() : bool
    {
        print_r("Je joue de l'instrument" . PHP_EOL);
        return true;
    }
}