<?php
namespace App;

use App\Abstract\AbstractInstrumentAVent;

class Flute extends AbstractInstrumentAVent{

    public function souffle() : bool
    {
        print_r("Je souffle dans ma flute");
        return true;
    }
}