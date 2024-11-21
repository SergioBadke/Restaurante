<?php

require_once("Item.php");

final class Prato extends Item implements iDados
{
    private int $calorias;


    /**
     * Get the value of calorias
     */
    public function getCalorias(): int
    {
        return $this->calorias;
    }

    /**
     * Set the value of calorias
     */
    public function setCalorias(int $calorias): self
    {
        $this->calorias = $calorias;

        return $this;
    }
}



