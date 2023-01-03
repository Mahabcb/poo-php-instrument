<?php

use App\Saxo;
use PHPUnit\Framework\TestCase;

final class SaxoTest extends TestCase
{
    private Saxo $saxo;

    public function setUp() : void
    {
        $this->saxo = new Saxo();
    }
    // on teste que le saxo souffle
    // on teste que le saxo joue

    public function testSaxoSouffle() : void
    {
        $this->assertTrue($this->saxo->souffle());
        $this->assertEquals("Je souffle sur le saxo", $this->saxo->souffle());
    }

    public function testSaxoJoue() : void 
    {
        $this->assertTrue($this->saxo->joue());
        $this->assertEquals("Je joue de l'instrument", $this->saxo->joue());
    }
}