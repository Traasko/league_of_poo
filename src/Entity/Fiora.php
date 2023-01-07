<?php

namespace App\Entity;

use App\Entity\AbstractChampion;

/**
 * Avec une final class on empêche les classes enfants de redéfinir 
 * une méthode ou constante en préfixant la définition avec final
 */

final class Fiora extends AbstractChampion
{

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->$name = "Fiora";
    }
}
