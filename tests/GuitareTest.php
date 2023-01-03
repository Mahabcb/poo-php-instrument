<?php

use App\Guitare;
use PHPUnit\Framework\TestCase;

final class GuitareTest extends TestCase
{

    private Guitare $guitare;

    public function setUp() : void
    {
        $this->guitare = new Guitare();
    }

    public function testGratte() : void 
    {
        $this->assertTrue($this->guitare->gratte());
        $this->assertEquals("Je gratte une guitare", $this->guitare->gratte());
    }

    public function testGuitarreTend() : void
    {
        $this->assertTrue($this->guitare->tendre());
        $this->assertEquals("Je tends ma guitare", $this->guitare->tendre());
    }

    public function testGuitarreNutilisePasArche() : void
    {
        $this->assertFalse($this->guitare->utiliserArche());
    }

    public function testGuitareJoue() : void 
    {
        $this->assertTrue($this->guitare->joue());
        $this->assertEquals("Je joue de l'instrument", $this->guitare->joue());
    }
}