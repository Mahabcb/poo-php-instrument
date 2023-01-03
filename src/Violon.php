<?php

namespace App;

use App\Interface\Accordable;
use App\Abstract\AbstractInstrumentACorde;

class Violon extends AbstractInstrumentACorde implements Accordable{

    public function gratte() : bool
    {
        print_r("Je gratte une violon" . PHP_EOL);
        return true;
    }

    public function tendre() : bool
    {
        print_r("Je tends mon violon" . PHP_EOL);
        return true;
    }

    public function utiliserArche() : bool
    {
        print_r("J'utilise une arche pour mon violon" . PHP_EOL);
        return true;
    }
}