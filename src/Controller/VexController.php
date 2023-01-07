<?php

namespace App\Controller;

use App\Entity\Vex;
use App\Controller\Abstract\AbstractJeuController;
use App\Interface\InterfaceJeu;

final class VexController extends AbstractJeuController implements InterfaceJeu
{

    private $vex;
    public function __construct(Vex $vex)
    {
        $this->vex = $vex;
    }
}
