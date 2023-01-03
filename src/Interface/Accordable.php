<?php

namespace App\Interface;
// dans une interface on veut uniquement les signatures des fonctions
interface Accordable{
    public function tendre() : bool;
    public function utiliserArche() : bool;
}