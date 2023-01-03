<?php
namespace App\Abstract;

use App\Abstract\AbstractInstrument;

abstract class AbstractInstrumentACorde extends AbstractInstrument{
   abstract public function gratte() : bool;
   abstract public function tendre() : bool;
   abstract public function utiliserArche() : bool;
}