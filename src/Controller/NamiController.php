<?php

namespace App\Controller;

use App\Entity\Nami;
use App\Controller\Abstract\AbstractJeuController;
use App\Interface\InterfaceJeu;

final class NamiController extends AbstractJeuController implements InterfaceJeu
{

    private $nami;
    public function __construct(Nami $nami)
    {
        $this->nami = $nami;
    }

    /**
     * Cette action est propres au champion Nami 
     */
    public function regenererLaVie(): ?int
    {
        if ($this->vie === false) {
            throw new \Exception("Vous êtes mort, vous ne pouvez pas vous regénérer");
        }
        if ($this->hp >= 100) {
            throw new \Exception("Vous êtes mort, vous ne pouvez pas vous regénérer");
        }
        return $this->hp += 10;
    }
}
