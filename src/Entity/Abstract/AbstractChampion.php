<?php

/**
 * Comme on est dans une class abstraite
 * on doit obligatoirement avoir des propriétés protected
 */

namespace App\Entity;

abstract class AbstractChampion
{
    /**
     * Variables en protected pour qu'elles soient 
     * accessible par les autres classes
     */
    protected string $nom;
    protected int $hp;
    protected int $force;
    protected int $mana;
    protected bool $vie;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->hp = 100;
        $this->force = rand(1, 10);
        $this->mana = 100;
        $this->vie = true;
    }

    /**
     * Get the value of nom
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Get the value of hp
     */
    public function getHp(): ?int
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */
    public function setHp(int $hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get the value of vie
     */
    public function getVie(): ?bool
    {
        return $this->vie;
    }

    /**
     * Get the value of mana
     */
    public function getMana(): ?int
    {
        return $this->mana;
    }

    /**
     * Set the value of force
     *
     * @return  self
     */
    public function setMana(int $mana): self
    {
        $this->mana = $mana;

        return $this;
    }

    /**
     * Get the value of force
     */
    public function getForce(): ?int
    {
        return $this->force;
    }

    /**
     * Set the value of force
     *
     * @return  self
     */
    public function setForce(int $force): self
    {
        $this->force = $force;

        return $this;
    }
    /**
     * Set the value of vie
     *
     * @return  self
     */
    public function setVie(bool $vie): self
    {
        $this->vie = $vie;

        return $this;
    }
}
