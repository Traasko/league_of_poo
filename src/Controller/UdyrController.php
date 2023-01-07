<?php

namespace App\Controller;

use App\Entity\Udyr;
use App\Controller\Abstract\AbstractJeuController;
use App\Interface\InterfaceJeu;

final class UdyrController extends AbstractJeuController implements InterfaceJeu
{

    private $udyr;
    public function __construct(Udyr $udyr)
    {
        $this->udyr = $udyr;
    }

    /**
     * Cette action est propres au champion Udyr 
     */
    public function regenererLaVie(): ?int
    {
        // si on est mort on peut pas se regénérer
        // on aimerait regagner de la vie sur un int fixe
        if ($this->vie === false) {
            throw new \Exception("Vous êtes mort, vous ne pouvez pas vous regénérer");
        }
        if ($this->hp >= 100) {
            throw new \Exception("Vous êtes mort, vous ne pouvez pas vous regénérer");
        }
        return $this->hp += 10;
    }
}
