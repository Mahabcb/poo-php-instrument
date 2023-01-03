<?php

namespace App;

use App\Abstract\AbstractInstrumentAVent;

class Saxo extends AbstractInstrumentAVent{

    public function souffle() : bool
    {
        print_r("Je souffle sur le saxo" . PHP_EOL);
        return true;
    }
}