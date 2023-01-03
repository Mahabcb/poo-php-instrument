<?php

namespace App;

use App\Interface\Accordable;
use App\Abstract\AbstractInstrumentACorde;

class Guitare extends AbstractInstrumentACorde implements Accordable{

    public function gratte() : bool
    {
        print_r("Je gratte une guitare" . PHP_EOL);
        return true;
    }

    public function tendre() : bool
    {
        print_r("Je tends ma guitare" . PHP_EOL);
        return true;
    }

    public function utiliserArche() : bool
    {
        print_r("Je n'utilise pas une arche" . PHP_EOL);
        return false;
    }

}