<?php
namespace App\Abstract;

use App\Abstract\AbstractInstrument;

abstract class AbstractInstrumentAVent extends AbstractInstrument{
    abstract public function souffle() : bool;
}