<?php

namespace App\Controller\Abstract;

use Exception;

use App\Entity\AbstractChampion;

/**
 * Le gameplay du jeu
 */

abstract class AbstractJeuController extends AbstractChampion
{
    /**
     * Cette function nous permet d'attaquer notre ennemi "cible"
     */
    public function attaquer($cible): bool
    {
        if ($this->vie === false) {
            throw new \Exception("Vous êtes mort, vous ne pouvez pas attaquer");
            exit();
        } else {
            $degats = $this->force;

            $cible->encaisserDegats($degats);
            if ($cible->vie === false) {
                print_r("Vous avez tué votre ennemi, vous avez gagné");
                return true;
                exit();
            }
            return false;
        }
    }
    /**
     * Cette function permet de faire encaisser des dégats à notre cible
     */
    protected function encaisserDegats(int $degats)
    {
        $this->hp -= $degats;

        if ($this->hp <= 0) {
            $this->vie = false;
            return print_r("Vous êtes mort");
            exit();
        }
    }
}
