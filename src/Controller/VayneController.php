<?php

namespace App\Controller;

use App\Entity\Vayne;
use App\Controller\Abstract\AbstractJeuController;
use App\Interface\InterfaceJeu;

final class VayneController extends AbstractJeuController implements InterfaceJeu
{

    private $vayne;
    public function __construct(Vayne $vayne)
    {
        $this->vayne = $vayne;
    }
}
