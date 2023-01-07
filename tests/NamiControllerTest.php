<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\AbstractChampion;
use App\Entity\Nami;


class NamiControllerTest extends TestCase
{
    public function testregenererLaVie()
    {
        $nami = new Nami();
        $namiController = new NamiControllerTest($nami);

        $this->assertEquals($nami->getNom(), "Nami");

        $nami = $this->getMockForAbstractClass(AbstractChampion::class);
    }
}
