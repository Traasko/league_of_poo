<?php

namespace Tests;

use App\Entity\Vayne;
use PHPUnit\Framework\TestCase;

class VayneEntityTest extends TestCase
{
    public function testName()
    {
        $vayne = new Vayne();
        $this->assertEquals('Vayne', $vayne->getNom());
    }

    public function testMethod()
    {
        $vayne = new Vayne();
        $this->assertNull($vayne->getNom());
        $this->assertTrue($vayne->getHp());
        $this->assertTrue($vayne->getForce());
    }
}
