<?php

namespace App\Tests;

use App\Violon;

use PHPUnit\Framework\TestCase;

final class ViolonTest extends TestCase{

    private Violon $violon;

    public function setUp() : void
    {
        $this->violon = new Violon();
    }

    public function testViolonGratte() : void
    {
        $this->assertTrue($this->violon->gratte());
        $this->assertEquals("Je gratte une violon", $this->violon->gratte());
    }

    public function testViolonTend() : void
    {
        $this->assertTrue($this->violon->tendre());
        $this->assertEquals("Je tends mon violon", $this->violon->tendre());
    }

    public function testViolonUtiliseArche() : void
    {
        $this->assertTrue($this->violon->utiliserArche());
        $this->assertEquals("J'utilise une arche pour mon violon", $this->violon->utiliserArche());
    }

}