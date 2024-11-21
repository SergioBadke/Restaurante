<?php

require_once("Item.php");

final class Sobremesa extends Item implements iDados
{

    private bool $glutenFree;

    private bool $lactoseFree;


    /**
     * Get the value of glutenFree
     */
    public function isGlutenFree(): bool
    {
        return $this->glutenFree;
    }

    /**
     * Set the value of glutenFree
     */
    public function setGlutenFree(bool $glutenFree): self
    {
        $this->glutenFree = $glutenFree;

        return $this;
    }

    /**
     * Get the value of lactoseFree
     */
    public function isLactoseFree(): bool
    {
        return $this->lactoseFree;
    }

    /**
     * Set the value of lactoseFree
     */
    public function setLactoseFree(bool $lactoseFree): self
    {
        $this->lactoseFree = $lactoseFree;

        return $this;
    }
}

