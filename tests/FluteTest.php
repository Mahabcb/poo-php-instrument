<?php

namespace App\Tests;

use App\Flute;
use PHPUnit\Framework\TestCase;

final class FluteTest extends TestCase
{

    private Flute $flute;

    public function setUp() : void
    {
        $this->flute = new Flute();
    }

    public function testSouffle() : void
    {
        $this->assertEquals("Je souffle dans ma flute", $this->flute->souffle());
        $this->assertTrue($this->flute->souffle());
    }

    public function testJoue() : void 
    {
        $this->assertTrue($this->flute->joue());
        $this->assertEquals("Je joue de l'instrument", $this->flute->joue());
    }
}