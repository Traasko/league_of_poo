<?php

namespace App\Controller;

use App\Entity\Fiora;
use App\Controller\Abstract\AbstractJeuController;
use App\Entity\AbstractChampion;
use App\Interface\InterfaceJeu;

final class FioraController extends AbstractJeuController implements InterfaceJeu
{

    private $fiora;
    public function __construct(Fiora $fiora)
    {
        $this->fiora = $fiora;
    }
}
